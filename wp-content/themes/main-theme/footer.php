    <section class="contact-maar24<?php echo (get_the_ID() == 80) ? " contact-maar24--contact-page" : "";?>">
		<div class="contact-maar24__content">
			<div class="contact-maar24__title">
				<h2>Our contacts</h2>
			</div>
			<div class="contact-maar24__inf-text">
				<p class="minText">Telephone:</p>
				<a href="tel:+<?php the_field('tel', 80);?>" class="bigText"><?php the_field('tel', 80);?></a>
			</div>

			<div class="contact-maar24__inf-text">
				<p class="minText">Address:</p>
				<p class="bigText"><?php the_field('Adress', 80);?></p>
			</div>
			
			<?php 
				if(get_the_ID() == 80){
					echo do_shortcode('[contact-form-7 id="82" title="vertical contact form"]'); 
				}else{
					?>
					<button class="contact-maar24__brn reviews__button">massege</button>
					<?php
				}?>
			<p class="contact-maar24__copyright">Copyright © 2018. All rights reserved.</p>
			<?php include('developed_by.php');?>
		</div>
		<div class="contact-maar24__maps">
			<?php the_field('map_iframe', 80); ?>
		</div>
	</section>
	<?php 
	if(get_the_ID() != 80):?>
	<div class="overlay"></div>
	<div class="popup">
		<h2>Submit the form</h2>
		<span class="cross">+</span>
		<div class="popup-content">
			<?php echo do_shortcode('[contact-form-7 id="82" title="vertical contact form"]');?>
		</div>
	</div>		
	<?php endif?>
<?php wp_footer()?>
</body>
</html>