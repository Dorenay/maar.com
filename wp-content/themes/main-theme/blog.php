<?php
/*Template name: Blog - main*/
    get_header();
    include('page-title.php');

    $args = get_posts( array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post'
    ) );
    $query = new WP_Query( $args );
?>
    <div class="container">
        <div class="post__list">
        <?php 
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) { 
                $query->the_post(); ?>
                    <a class="post__item" href="<?php the_permalink();?>">
                        <div class="post__thumbnail">
                            <?php the_post_thumbnail(); ?> 
                        </div>
                        <div class="post__body">
                            <h2><?php the_title(); ?></h2>
                            <?php
                                the_content();
                                the_excerpt();                            
                            ?>
                        </div>
                    </a><?php
                }
                wp_reset_postdata();
            }
        ?>
        </div>
    </div>
<?php
    get_footer();
?>