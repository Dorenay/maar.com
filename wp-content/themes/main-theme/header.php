<!DOCTYPE html>
<html lang="ru">

<head>
    <?php wp_head()?>
	<meta charset="utf-8">

	<title>New site</title>
	<meta name="description" content=""> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



</head>

<body class="background-color">
	<header class="header-maar24" style="background-image: url('<?php echo get_template_directory_uri()?>/img/BG-first-section.jpg')">
		<div class="container-md">
			<div class="header-maar24__top">
				<div class="header-maar24__burgerMobile">
					Menu
					<div class="menu btn2">
						<div class="icon"></div>
					</div>
				</div>
				<nav class="header-maar24__navigation">
					<ul>
						<li><a href="#">Appliance Repair</a></li>               
						<li><a href="#">Area We Cover</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
				<a href="#" class="header-maar24__logo">
					<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="logo">
				</a>
				<div class="header-maar24__phone">
					<img src="<?php echo get_template_directory_uri()?>/img/icon-phone.png" alt="icon-phone">
					<a href="tel:+(903) 722 17 03">(903) 722 17 03</a>
				</div>
			</div>
			<div class="header-maar24__context">
				<h1>Help your appliances  work to the max</h1>
				<p>Reliable repair partner.  In order to avoid the risk of acciden</p>
			</div>
		</div>
	</header>