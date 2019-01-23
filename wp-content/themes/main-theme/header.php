<!DOCTYPE html>
<html lang="ru">

<head>
    <?php wp_head()?>
	<meta charset="utf-8">

	<title>New site</title>
	<meta name="description" content=""> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="icon" href="<?php the_field('favicon', 80); ?>">


</head>

<body class="background-color">
	<header class="header-maar24" style="background-image: url('<?php echo get_template_directory_uri()?>/img/BG-first-section.jpg')">
		<div class="container-md header-maar24__container">
			<div class="header-maar24__top">
				<div class="header-maar24__burgerMobile">
					Menu
					<div class="menu btn2">
						<div class="icon"></div>
					</div>
				</div>
				<nav class="header-maar24__navigation">
					<?php wp_nav_menu( array('theme_location'    => 'top menu', 
										'menu_class'     => '', 
										'fallback_cb'    => '__return_empty_string',
										'walker'         => new Nav_Walker_Nav_Menu())); ?>
					<!-- <ul>
						<li><a href="#">Appliance Repair</a>
							<ul class="header-maar24__navigationSub">
								<li><a href="#">Area We Cover</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</li>               
						<li><a href="#">Area We Cover</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Contact</a></li>
					</ul> -->
				</nav>
				<a href="/" class="header-maar24__logo">
					<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="logo">
				</a>
				<div class="header-maar24__phone">
					<img src="<?php echo get_template_directory_uri()?>/img/icon-phone.png" alt="icon-phone">
					<a href="tel:+<?php the_field('tel', 80);?>"><?php the_field('tel', 80);?></a>
				</div>
			</div>
