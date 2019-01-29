<?php
/**
 * site functions and definitions
 *

 * @package main theme
 */


if ( ! function_exists( 'theme_setup' ) ) :
	function theme_setup() {
		add_theme_support( 'automatic-feed-links' );

        register_nav_menu('top menu', 'top menu');		


		add_theme_support( 'html5', array(
		) );

		add_theme_support( 'custom-background', apply_filters( 'atlas_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );



	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'post_thumbnail', 320, 150, true );


function theme_scripts() {
    wp_enqueue_style( 'theme-css', get_stylesheet_uri() );
	wp_enqueue_style( 'avt-js--jq-slick', get_template_directory_uri() . '/libs/slick/slick.css');
	wp_enqueue_style( 'avt-js--jq-slick-theme', get_template_directory_uri() . '/libs/slick/slick-theme.css');
    wp_enqueue_style( 'theme-css--2', get_template_directory_uri() . '/css/application.css' );

    wp_enqueue_script( 'avt-js--jq', get_template_directory_uri() . '/libs/jquery/dist/jquery.min.js');
    wp_enqueue_script( 'avt-js--jq-migrate', get_template_directory_uri() . '/libs/jquery/jquery-migrate-1.2.1.min.js');   
    wp_enqueue_script( 'avt-js--jq-slick', get_template_directory_uri() . '/libs/slick/slick.js');   
    wp_enqueue_script( 'avt-js--1', get_template_directory_uri() . '/js/common.js');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'theme_scripts' );

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

define( 'WPCF7_AUTOP', false );
function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/" , '', $tag );
}


add_action( 'wp_footer', 'mycustom_wp_footer' );


class Nav_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth) {
        if($depth >= 0){
			$output .= '<ul class="header-maar24__navigationSub">';
        } 
	}
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
		// функция join превращает массив в строку
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		/*
		 * Генерируем ID элемента
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
 
		/*
		 * Генерируем элемент меню
		 */
        
        $output .= $indent . '<li' . $value . $class_names .'>';
        
 
		// атрибуты элемента, title="", rel="", target="" и href=""
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		// ссылка и околоссылочный текст
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
       	$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .=  '</a>';
        $item_output .= $args->after;
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
