<?php 
    function the_field_in_group($group, $field){
        if( have_rows($group) ): 
            while( have_rows($group) ): the_row(); 
                the_sub_field($field);
            endwhile; 
        endif;
    }
    function get_field_in_group($group, $field){
        if( have_rows($group) ): 
            while( have_rows($group) ): the_row(); 
                get_sub_field($field);
            endwhile; 
        endif;
    }
    function check_field_in_group($group, $field){
        if( have_rows($group) ): 
            while( have_rows($group) ): the_row(); 
                if( empty( get_sub_field($field) ) ){
                    $res = false;
                }else{
                    $res = true;
                }
            endwhile; 
        endif;
        return $res;
    }  
    if(is_front_page()){
        $page_pre = "";
    }else if(is_page_template('service-template.php')){
        $page_pre = "service-";
    }  
    for($i = 1; $i < 3; $i++):
        if(check_field_in_group($page_pre.'content_block_'.$i, $page_pre.'content_block_'.$i.'--text')): ?>
            <section class="info-sec<?php if($i % 2 == 0){echo " info-sec--reverse"; } ?>">
                <div class="container-sn info-sec__flex">
                    <div class="info-sec__image">
                        <img src="<?php the_field_in_group($page_pre.'content_block_'.$i, $page_pre.'content_block_'.$i.'--image'); ?>" alt="img">
                    </div>
                    <div class="info-sec__text">
                        <div class="info-sec__textContainer">
                            <?php the_field_in_group($page_pre.'content_block_'.$i, $page_pre.'content_block_'.$i.'--text');?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;
    endfor;
?>