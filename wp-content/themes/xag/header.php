<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('title'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/app/img/favicon.ico" type="image/x-icon">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>


<div class="nav-pc-wrap">
	<div class="wrapper">
		<div class="nav-pc">
			<div class="nav-hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="logo"><h1 class="nav-icon"><a href="/">&nbsp;</a></h1></div>
			<div class="navigation">
				<ul>
					<li class="menu-item current-menu-item"><a href="/"><?php _e('[:ru]Главная[:ro]Acasă[:]'); ?></a></li>
					<li class="menu-item menu-item-product">
						<a href="#"><?php _e('[:ru]Техника[:ro]Produse[:]'); ?></a>
						<div class="navigation__popup">
							<ul class="navigation__products">
								<li class="navigation__products-item">
									<a href="#" class="navigation__products-link">
										<div class="nav-product-show">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod1.jpg" alt="">
										</div>
										<div class="nav-product-name">Agricultural Drone</div>
										<div class="nav-product-explain">Agrifuture, Here and Now</div>
									</a>
								</li>
								<li class="navigation__products-item">
									<a href="#" class="navigation__products-link">
										<div class="nav-product-show">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod2.jpg" alt="">
										</div>
										<div class="nav-product-name">Remote Sensing Drone</div>
										<div class="nav-product-explain">The Key to “Sky City”</div>
									</a>
								</li>
								<li class="navigation__products-item">
									<a href="#" class="navigation__products-link">
										<div class="nav-product-show">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod3.jpg" alt="">
										</div>
										<div class="nav-product-name">Unmanned Ground Vehicle</div>
										<div class="nav-product-explain">Customised for Every Mission</div>
									</a>
								</li>
								<li class="navigation__products-item">
									<a href="#" class="navigation__products-link">
										<div class="nav-product-show">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod4.jpg" alt="">
										</div>
										<div class="nav-product-name">Agriculture IoT System</div>
										<div class="nav-product-explain">Connect Land, Crop and People</div>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="menu-item has-sub">
						<a href="#">Services</a>
						<div class="sub-menu">
							<ul>
								<li class="menu-item"><a href="#">Service 1</a></li>
								<li class="menu-item"><a href="#">Service 2</a></li>
							</ul>
						</div>
					</li>
					<li class="menu-item"><a href="#">Service</a></li>
					<li class="menu-item"><a href="#">About XAG</a></li>
				</ul>
			</div>
			<div class="language">
				<ul class="language__items">
					<li class="language__item has-sub">
						<span class="menu-item"><?php echo wpm_get_language(); ?></span>
						<div class="sub-menu">
							<ul>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'language',
											'items_wrap'     => '%3$s',
											'container'      => false,
											'depth'          => 1,
											'fallback_cb'    => false,
										)
									);
								?>
<!--								<li class="menu-item sub-language__item"><a href="#">Rom</a></li>-->
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="nav-mob">
			<div class="wrapper">
				<ul>
					<li class="menu-item"><a href="#">Home</a></li>
					<li class="menu-item has-sub">
						<a href="#">Products</a>
						<div class="sub-menu">
							<a href="#" class="sub-menu__back">&larr;&nbsp;Back</a>
							<ul>
								<li class="menu-item"><a href="#">Agricultural Drone</a></li>
								<li class="menu-item"><a href="#">Remote Sensing Drone</a></li>
								<li class="menu-item"><a href="#">Unmanned Ground Vehicle</a></li>
								<li class="menu-item"><a href="#">Agriculture IoT System</a></li>
							</ul>
						</div>
					</li>
					<li class="menu-item has-sub">
						<a href="#">Services</a>
						<div class="sub-menu">
							<a href="#" class="sub-menu__back">&larr;&nbsp;Back</a>
							<ul>
								<li class="menu-item"><a href="#">Service 1</a></li>
								<li class="menu-item"><a href="#">Service 2</a></li>
							</ul>
						</div>
					</li>
					<li class="menu-item"><a href="#">Service</a></li>
					<li class="menu-item"><a href="#">About XAG</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>