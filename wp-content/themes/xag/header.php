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
			<div class="logo">
				<?php if( !is_front_page() ) { echo '<a href="'. get_home_url() .'">'; } else{ echo '<span>'; }?>
					<img src="<?php echo esc_url( get_theme_mod( 'xag_logo_header' ) ); ?>" alt="Logo">
				<?php if( !is_front_page() ) { echo '</a>'; } else{ echo '</span>'; }?>
			</div>
			<div class="navigation">
				<ul>
					<li class="menu-item current-menu-item"><a href="/"><?php _e('[:ru]Главная[:ro]Acasă[:]'); ?></a></li>
					<li class="menu-item menu-item-product">
						<a href="#"><?php _e('[:ru]Техника[:ro]Produse[:]'); ?></a>
						<div class="navigation__popup">
							<ul class="navigation__products">
								<?php
									$args = array(
										'taxonomy' => 'solution_category',
										'hide_empty'   => 0,
										'posts_per_page' => 1
									);
									$categories = get_categories($args);
									$term_items = array();
									$i = 1;
									foreach ($categories as $term) {
										//показываем только первые 4 категории в меню
										if($i > 4) break;

										$term_items[] = array(
											'image' => get_field('image', 'term_' . $term->term_id),
											'name' => $term->name,
											'description' => $term->description,
											'link' => get_term_link($term),
											'sort' => get_field('sort', 'term_' . $term->term_id),
										);
										$i++;
									}
									$term_items = xag_array_sort($term_items, 'sort', SORT_ASC);
									foreach ($term_items as $item) {
								?>
									<li class="navigation__products-item">
										<a href="<?php echo $item['link']; ?>" class="navigation__products-link">
											<div class="nav-product-show">
												<?php if(!empty($item['image'])) : ?><img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>"><?php endif; ?>
											</div>
											<div class="nav-product-name"><?php echo $item['name']; ?></div>
											<div class="nav-product-explain"><?php echo $item['description']; ?></div>
										</a>
									</li>
								<?php } ?>
							</ul>
						</div>
					</li>

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 2,
								'fallback_cb'    => false,
							)
						);
					?>
				</ul>
			</div>
			<div class="language-box">
				<div class="language__items">
					<div class="language__item menu-item-has-children">
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
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="nav-mob">
			<div class="wrapper">
				<ul>
					<li class="menu-item current-menu-item"><a href="/"><?php _e('[:ru]Главная[:ro]Acasă[:]'); ?></a></li>
					<li class="menu-item menu-item-has-children">
						<a href="#"><?php _e('[:ru]Техника[:ro]Produse[:]'); ?></a>
						<div class="sub-menu">
							<ul>
								<?php
									foreach ($term_items as $item) : ?>
										<li class="menu-item"><a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</li>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 2,
								'fallback_cb'    => false,
							)
						);
					?>
				</ul>
			</div>
		</div>
	</div>
</div>