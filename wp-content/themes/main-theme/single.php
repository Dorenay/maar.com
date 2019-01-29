<?php
    get_header();
    include('page-title.php');

?>

    <div class="container">
    <?php
    if (have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            the_content();
        endwhile;
    endif;?>
    
    </div>
<?php
    

    get_footer();
?>