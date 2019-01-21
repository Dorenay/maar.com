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


function theme_scripts() {
    wp_enqueue_style( 'theme-css', get_stylesheet_uri() );
    wp_enqueue_style( 'avt-js--jq-slick', get_template_directory_uri() . '/libs/slick/slick.css');   
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

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/" , '', $tag );
}


//redirect


add_action( 'wp_footer', 'mycustom_wp_footer' );
