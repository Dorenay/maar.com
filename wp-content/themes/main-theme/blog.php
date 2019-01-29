<?php
/*Template name: Blog - main*/
    get_header();
    include('page-title.php');

    $posts = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post'
    ) );
?>
    <div class="post__list">
    <?php foreach( $posts as $post ): ?>
            <div class="post__item">
                <div class="post__thumbnail">
                    <?php the_tumbnail(); ?>
                </div>
                <div class="post__thumbnail">
                    <?php
                    the_title();
                    the_permalink();
                    ?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
<?php
    get_footer();
?>