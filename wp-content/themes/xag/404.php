<?php get_header(); ?>

	<div class="info-container white-bg">
		<div class="wrapper">
			<div class="page404">
				<div class="page404__left">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/app/img/404.jpg" alt="xag.md error 404 img">
				</div>
				<div class="page404__right">
					<h1 class="page404__title">404</h1>
					<div class="page404__subtitle"><?php _e('[:ru]Ой, такая страница не найдена![:ro]Hopa, această pagină nu a fost găsită![:]'); ?></div>
					<a href="<?php _e('[:ru]/[:ro]/ro/[:]'); ?>" class="page404__button"><?php _e('[:ru]На главную[:ro]La principal[:]'); ?></a>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>