<?php /* <header> is in header.php*/
    ?>
        <?if(is_front_page()):?>
            <div class="header-maar24__context">
                <h1><?php the_field('page_banner');?></h1>
                <p><?php the_field('page_subbanner');?></p>
            </div>
        <?php else :?>
            <div class="header-maar24__heading-center">
                <h1><?php  the_title();?></h1>
                <div class="header-maar24__bread-crumps">
                    <a href="/">Home</a> - <span><?php the_title();?></span>
                </div>
            </div>
        <?endif;?>
    </div>
</header>