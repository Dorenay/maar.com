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
    <div class="container">
        <div class="post__list">
        <?php foreach( $posts as $post ): ?>
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
                            post
                        <?
                        while ( $post->have_posts() ) {
                            $post->the_post();
                            the_content();
                            the_excerpt();                            

                        }?>
                            posts
                        <?
                        while ( $posts->have_posts() ) {
                            $posts->the_post();
                            the_content();
                            the_excerpt();                            

                        }?>                        

                        <?php endwhile; endif; ?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
<?php
    get_footer();
?>