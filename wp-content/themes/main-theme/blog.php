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
    echo '<div class="post__list">';
        foreach( $posts as $post ){
            echo '<div class="post__item">';
                echo '<div class="post__thumbnail">';
                    the_tumbnail();
                echo '</div>'
                echo '<div class="post__thumbnail">';
                    the_title();
                    the_permalink();
                echo '</div>';
            echo '</div>';
        }
    echo '</div>';

    get_footer();
?>