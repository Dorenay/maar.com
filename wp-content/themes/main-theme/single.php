<?php
    get_header();
    include('page-title.php');

?>

    <div class="container">
        <div class="post__list">
        <?php
            if (have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    the_content();
                endwhile;
            endif;?>
        </div>
    </div>
<?php
    

    get_footer();
?>