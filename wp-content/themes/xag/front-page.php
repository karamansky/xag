<?php get_header(); ?>

<div class="header">
	<div class="wrapper">
		<div class="header__content">
			<h2 class="header__title">Advancing Agriculture</h2>
			<a href="#" class="header__videoplay" data-video="<?php echo get_stylesheet_directory_uri(); ?>/app/img/video1.mp4"><i class="play"></i></a>
		</div>
	</div>
	<video src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/index-video.mp4" autoplay muted loop="true" id="main-video"></video>
</div>


<section class="catItems-wrap">
	<div class="wrapper">
		<div class="catItems">
			<h2 class="catItems__title section__title">Smart Agriculture Solutions</h2>
			<div class="catItems__items">
				<a href="#" class="catItem__item">
					<div class="catItem__img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod1.jpg" alt="">
					</div>
					<h3 class="catItem__title">Agricultural drone</h3>
				</a>
				<a href="#" class="catItem__item">
					<div class="catItem__img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod2.jpg" alt="">
					</div>
					<h3 class="catItem__title">Remote sensing drone</h3>
				</a>
				<a href="#" class="catItem__item">
					<div class="catItem__img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod3.jpg" alt="">
					</div>
					<h3 class="catItem__title">Unnamed ground Vehicle</h3>
				</a>
				<a href="#" class="catItem__item">
					<div class="catItem__img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/prod4.jpg" alt="">
					</div>
					<h3 class="catItem__title">Agriculture IoT</h3>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="img-blocks-wrap">
	<div class="fluid-wrapper">
		<div class="img-blocks">
			<a href="#" class="img-blocks__item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/app/img/services.png');">
				<h3 class="img-blocks__title">Services</h3>
				<span>More &rarr;</span>
			</a>
			<a href="#" class="img-blocks__item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/app/img/academy.png');">
				<h3 class="img-blocks__title">Academy</h3>
				<span>More &rarr;</span>
			</a>
			<a href="#" class="img-blocks__item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/app/img/news.png');">
				<h3 class="img-blocks__title">News Center</h3>
				<span>More &rarr;</span>
			</a>
		</div>
	</div>
</section>



<section class="text-block-wrap">
	<div class="wrapper">
		<div class="text-block">
			<div class="text-block__content">
				XAG este implicat în introducerea dronelor, roboților, pilotului automat, inteligenței artificiale și Internetului lucrurilor în lumea agriculturii. Creăm un ecosistem inteligent al agriculturii care ne conduce în era agriculturii 4.0, caracterizată prin automatizare, precizie și eficiență.
			</div>
			<div class="text-block__img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/animation_bottom.gif" alt="drone">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>