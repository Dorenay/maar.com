<?php
/*Template name: front page*/
?>
<?php 
    get_header();
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
?>
			<div class="header-maar24__context">
				<h1><?php the_field('page_banner');?></h1>
				<p><?php the_field('page_subbanner');?></p>
			</div>
		</div>
	</header>
	<section class="our-services">
		<div class="container">
			<div class="our-services__title">
				<h2>Our service</h2>
			</div>
			<div class="our-services__product">

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>
				
				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

				<div class="our-services__items">
					<div class="our-services__items__img">
						<img src="<?php echo get_template_directory_uri()?>/img/Dishwasher-PNG-Pic.png" alt="img">
					</div>
					<div class="our-services__items__title">
						<h4>Dishwasher Repair</h4>
					</div>
					<div class="our-services__hidden">
						<h4>Dishwasher Repair</h4>
						<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
						<button class="our-services__hidden__bt">to order</button>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div class="container-sn">
		<section class="form-section ">
			<div class="container form-section__in">
				<div class="form-section__title">
					<h2>Washer Repair Service</h2>
				</div>
				<form class="form-section__form">
					<input type="text" placeholder="Name*">
					<input type="text" placeholder="Name*">
					<input type="text" placeholder="Name*">
					<input type="submit" value="to order">
				</form>
			</div>
		</section>
	</div>

    <?php for($i = 1; $i < 3; $i++): ?>
        <?php if(check_field_in_group("content_block_$i", "content_block_$i--text")): ?>
            <section class="info-sec">
                <div class="container-sn info-sec__flex">
                    <div class="info-sec__image">
                        <img src="<?php the_field_in_group("content_block_$i", "content_block_$i--image"); ?>" alt="img">
                    </div>
                    <div class="info-sec__text">
                        <div class="info-sec__textContainer">
                            <?php the_field_in_group("content_block_$i", "content_block_$i--text");?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>
    <?php endfor;?>

	<section class="logo-cm">
		<div class="container">
			<div class="logo-cm__slider">
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-0.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-2.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-3.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-4.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-5.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-0.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-2.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-3.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-4.jpg" alt="img"></div>
				<div><img src="<?php echo get_template_directory_uri()?>/img/logo-CM-5.jpg" alt="img"></div>
			</div>
		</div>
	</section>

	<section class="contact-maar24">
		<div class="contact-maar24__content">
			<div class="contact-maar24__title">
				<h2>Our contacts</h2>
			</div>
			<div class="contact-maar24__inf-text">
				<p class="minText">Telephone:</p>
				<a href="tel:+(647) 797-4589" class="bigText">(647) 797-4589</a>
			</div>

			<div class="contact-maar24__inf-text">
				<p class="minText">Address:</p>
				<p class="bigText">451 The West Mall Etobicoke, ON, M9C 1G1</p>
			</div>
			<button class="contact-maar24__brn">
				massege
			</button>
			<p class="contact-maar24__copyright">Copyright © 2018. All rights reserved.</p>
		</div>
		<div class="contact-maar24__maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10295.239733957973!2d23.98903559855387!3d49.827237390612474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smaps!5e0!3m2!1sru!2sua!4v1547731857057" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>

<?php
	get_footer();
?>