<?php
/*Template name: Blog - main*/
    get_header();
    $posts = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'post_per_page' => 1
    ) );

    foreach( $posts as $post ){
        the_title();
        the_permalink();
    }

    get_footer();
?>