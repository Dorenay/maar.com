<?php
    get_header();

    $posts = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
    ) );
    
    foreach( $posts as $post ){
        echo '<h2>'. the_title(); .'</h2>';
        echo '<a href="' the_permalink(); '">read more..</a>';
    }
    
    wp_reset_postdata(); // сброс

    get_footer();
?>