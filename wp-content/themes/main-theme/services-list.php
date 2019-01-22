<?php
$args = array(
    'post_type' => 'page',
    // 'meta_query' => array(
    //     array(
    //         'key' => 'is_service_page',
    //         'value' => '1'
    //     )    
	// ),
); 
$pages = get_pages( $args );
$current_page_id = get_the_ID();
?>
<section class="our-services">
    <div class="container">
        <div class="our-services__title">
            <h2><?php echo get_field('is_service_page') ? "Other services" : "Our services";?></h2>
        </div>
        <div class="our-services__product">
            <?php
            foreach( $pages as $post ){
                setup_postdata( $post );
                if( get_field('is_service_page') && $current_page_id != get_the_ID()){
                ?>
                    <div class="our-services__items">
                        <div class="our-services__items__img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
                        </div>
                        <div class="our-services__items__title">
                            <h4><?php the_title();?> </h4>
                        </div>
                        <div class="our-services__hidden">
                            <h4><?php the_title();?></h4>
                            <p><?php the_field('short_preview_text');?></p>
                            <a href="<?php the_permalink();?>" class="our-services__hidden__bt">to order</a>
                        </div>
                    </div>
                <?php
                }
            } 
            ?>
        </div>
    </div>
</section>