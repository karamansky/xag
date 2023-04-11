<?php
	/*
	 * Template Name: R-150 2022
	 * Template Post Type: solutions
	 */
	get_header();

	$model = get_field('model');
	$tech_page = get_field('tech_page');
	$title = get_field('title');
	$subtitle = get_field('subtitle');
	$header_bg = get_field('header_bg');
?>

<div class="tech-wrap r150">
	<div class="tech">
		<div class="wrapper">
			<div class="tech__header">
				<?php if( !empty($model) ) { ?>
					<h3 class="tech__header-title"><?php echo $model; ?></h3>
				<?php } ?>
				<div class="tech__navigation">
					<div class="tech__navigation">
						<ul>
							<li><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php _e('[:ru]Описание[:ro]Descriere[:]'); ?></a></li>
							<?php if(!empty($tech_page)) : ?>
								<li><a href="<?php echo get_the_permalink($tech_page->ID); ?>"><?php _e('[:ru]Характеристики[:ro]Caracteristici[:]'); ?></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="tech__content landing">

			<?php if( !empty($title) && !empty($header_bg) ) { ?>
				<section class="landing__header">
					<div class="wrapper">
						<div class="landing__header-content">
							<?php if( !empty($subtitle) ) { ?>
								<h3 class="landing__header-subtitle">XAG R150 Unmanned Ground Vehicle EV</h3>
							<?php } ?>
							<?php if( !empty($title) ) { ?>
								<h2 class="landing__header-title"><?php echo sanitize_text_field($title) ?></h2>
							<?php } ?>
							<?php if( !empty($header_bg) ) { ?>
								<div class="landing__header-image">
									<img src="<?php echo $header_bg['url'] ?>" alt="<?php echo sanitize_text_field($title); ?>">
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$poster_image = get_field('poster_image');
				$poster_title = get_field('poster_title');

				if( !empty($poster_image) ) {
			?>
				<section class="block-with-big-banner" style="background-image: url('<?php echo $poster_image['url'] ?>');">
					<div class="wrapper">
						<div class="block-with-big-image__inner">
							<?php if( !empty($poster_title) ) { ?>
								<h2 class="block-with-big-image__title"><?php echo sanitize_text_field($poster_title) ?></h2>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$full_bg_video_title = get_field('full_bg_video_title');
				$full_bg_video = get_field('full_bg_video');
				$full_bg_video_items = get_field('full_bg_video_items');

				if( !empty($full_bg_video_items) ) {
			?>
				<section class="block-with-full-bg-video">
					<?php if( !empty($full_bg_video) ) { ?>
						<video autoplay muted id="myVideo">
							<source src="<?php echo $full_bg_video ?>" type="video/mp4">
						</video>
					<?php } ?>
					<div class="wrapper">
						<div class="full-bg-video">
							<?php if( !empty($full_bg_video_title) ) { ?>
								<h2 class="full-bg-video__title"><?php echo sanitize_text_field($full_bg_video_title) ?></h2>
							<?php } ?>
							<div class="full-bg-video__items">
								<?php foreach ($full_bg_video_items as $item) { ?>
									<div class="full-bg-video__item">
										<div class="full-bg-video__item-content">
											<?php if( !empty($item['title']) ) { ?>
												<h3 class="full-bg-video__item-title"><?php echo sanitize_text_field($item['title']) ?></h3>
											<?php } ?>
											<?php if( !empty($item['description']) ) { ?>
												<div class="full-bg-video__subtitle">
													<?php echo $item['description'] ?>
												</div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$loop_video_title = get_field('loop_video_title');
				$loop_video_description = get_field('loop_video_description');
				$loop_bg_video = get_field('loop_bg_video');

				if( !empty($loop_bg_video) ){
			?>
				<section class="r150-loop-video">
					<div class="wrapper-fluid">
						<div class="r150-loop-video__inner">
							<?php if( !empty($loop_video_title) ) { ?>
								<h2 class="r150-loop-video__title"><?php echo sanitize_text_field($loop_video_title) ?></h2>
							<?php } ?>
							<?php if( !empty($loop_video_description) ){ ?>
								<div class="r150-loop-video__description">
									<?php echo $loop_video_description ?>
								</div>
							<?php } ?>
							<div class="r150-loop-video__content">
								<video autoplay muted loop loop="true">
									<source src="<?php echo $loop_bg_video ?>" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$r150_slider = get_field('r150_slider');

				if( !empty($r150_slider) ) {
			?>
				<section class="r150-slider">
					<div class="wrapper">
						<div class="r150-slider__inner">
							<div class="r150-slider__items">
								<?php foreach ($r150_slider as $slide) { ?>
									<?php if( $slide['image'] ) { ?>
										<div class="r150-slider__item">
											<div class="r150-slider__item-content">
												<?php if( !empty($slide['title']) ) { ?>
													<h3 class="r150-slider__item-title"><?php echo sanitize_text_field($slide['title']) ?></h3>
												<?php } ?>
												<?php if( !empty($slide['description']) ){ ?>
													<div class="r150-slider__item-description"><?php echo $slide['description'] ?></div>
												<?php } ?>
											</div>
											<?php if( !empty($slide['captions']) ){ ?>
												<?php $i=1; foreach ($slide['captions'] as $caption) { ?>
													<div class="r150-slider__item-caption r150-slider__item--caption<?php echo $i; ?>">
														<?php if( !empty($caption['title']) ){ ?>
															<h4 class="caption-title"><?php echo sanitize_text_field($caption['title']); ?></h4>
														<?php } ?>
														<?php if( !empty($caption['text']) ){ ?>
															<div class="caption-text"><?php echo $caption['text'] ?></div>
														<?php } ?>
													</div>
												<?php $i++; } ?>
											<?php } ?>
											<img src="<?php echo $slide['image']['url'] ?>" alt="<?php echo sanitize_text_field($slide['title']) ?>">
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$r150_image_title_image = get_field('r150_image_title_image');
				$r150_image_title = get_field('r150_image_title');
				$r150_image_description = get_field('r150_image_description');
				$r150_image = get_field('r150_image');

				if( !empty($r150_image) && !empty($r150_image_title) ){
			?>
				<div class="r150-image-block">
					<div class="wrapper-fluid">
						<div class="r150-image-block__inner">
							<?php if( !empty($r150_image_title_image) ) { ?>
								<div class="r150-image-block__img-title"><img src="<?php echo $r150_image_title_image['url'] ?>" alt="superx4"></div>
							<?php } ?>
							<?php if( !empty($r150_image_title) ) { ?>
								<h2 class="r150-image-block__title"><?php echo sanitize_text_field($r150_image_title) ?></h2>
							<?php } ?>
							<?php if( !empty($r150_image_description) ) { ?>
								<div class="r150-image-block__description"><?php echo $r150_image_description ?></div>
							<?php } ?>
							<?php if( !empty($r150_image) ) { ?>
								<div class="r150-image-block__img">
									<img src="<?php echo $r150_image['url'] ?>" alt="<?php echo sanitize_text_field($r150_image_title) ?>">
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>


			<?php
				$features_title = get_field('features_title');
				$features_description = get_field('features_description');
				$features = get_field('features');

				if( !empty($features) ) {
			?>
				<section class="features gradient-ltr-bg">
					<div class="wrapper">

						<?php if( !empty($features_title) ) { ?>
							<h2 class="features__main-title"><?php echo sanitize_text_field($features_title) ?></h2>
						<?php } ?>

						<?php if( !empty($features_description) ) { ?>
							<div class="features__text"><?php echo $features_description ?></div>
						<?php } ?>

						<div class="features__items ">
							<?php foreach ($features as $feature) { ?>
								<div class="features__item features__item--2">
									<h3 class="features__title"><?php echo sanitize_text_field($feature['title']) ?></h3>
									<div class="features__description"><?php echo $feature['description'] ?></div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$controller_title = get_field('controller_title');
				$controller_description = get_field('controller_description');
				$controllers = get_field('controllers_items');

				if( !empty($controllers) ) {
			?>
				<section class="img-left-with-icons img-left-with-icons--img-half gradient-ltr-bg">
					<div class="wrapper">
						<div class="img-left-with-icons__inner">
							<?php if( !empty($controller_title) ) { ?>
								<h2 class="img-left-with-icons__title"><?php echo sanitize_text_field($controller_title) ?></h2>
							<?php } ?>
							<?php if( !empty($controller_description) ) { ?>
								<div class="img-left-with-icons__subtitle"><?php echo $controller_description ?></div>
							<?php } ?>
							<?php $i=0; foreach ($controllers as $controller) { ?>
								<div class="img-left-with-icons__item">
									<?php if( !empty($controller['title']) ) { ?>
										<h3 class="img-left-with-icons__item-title"><?php echo sanitize_text_field($controller['title']) ?></h3>
									<?php } ?>
									<?php if( !empty($controller['image']) ) { ?>
										<div class="img-left-with-icons__item-inner">
												<div class="img-left-with-icons__img">
													<?php if( $i == 0 ) { ?>
														<img src="<?php echo get_template_directory_uri() ?>/app/img/slider/nongfu-photo-box.png" alt="">
														<ul class="img-left-with-icons__img-slider">
															<li><img src="<?php echo $controller['image']['url'] ?>" alt="<?php echo sanitize_text_field($controller['title']) ?>"></li>
														</ul>
													<?php }else{ ?>
														<img src="<?php echo $controller['image']['url'] ?>" alt="<?php echo sanitize_text_field($controller['title']) ?>">
													<?php } ?>
												</div>
											<?php if( !empty($controller['icons']) ) { ?>
												<div class="img-left-with-icons__icons">
													<?php foreach ($controller['icons'] as $icon){ ?>
														<div class="img-left-with-icons__icon">
															<?php if( !empty($icon['icon']) ) { ?>
																<div class="img-left-with-icons__icon-img">
																	<img src="<?php echo $icon['icon']['url'] ?>" alt="">
																</div>
															<?php } ?>
															<?php if( !empty($icon['description']) ) { ?>
																<div class="img-left-with-icons__description"><?php echo $icon['description']; ?></div>
															<?php } ?>
														</div>
													<?php } ?>
												</div>
											<?php } ?>
										</div>
									<?php } ?>
								</div>
							<?php $i++; } ?>
						</div>
					</div>
				</section>
			<?php } ?>


			<section class="r150-2img-with-caption gradient-ltr-bg">
				<div class="wrapper">
					<div class="r150-2img-with-caption__inner">
						<div class="r150-2img-with-caption__items">
							<div class="r150-2img-with-caption__item">
								<div class="r150-2img-with-caption__img"><img src="img/r150/r150-p91.png" alt=""></div>
								<div class="r150-2img-with-caption__content">
									<h3 class="r150-2img-with-caption__content-title">Route Mode</h3>
									<div class="r150-2img-with-caption__content-desc">Multiple routes, execute autonomously</div>
								</div>
							</div>
							<div class="r150-2img-with-caption__item">
								<div class="r150-2img-with-caption__img"><img src="img/r150/r150-p94.png" alt=""></div>
								<div class="r150-2img-with-caption__content">
									<h3 class="r150-2img-with-caption__content-title">Remote Control Mode</h3>
									<div class="r150-2img-with-caption__content-desc">Quick start, easy to use</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="r150-full-slider gradient-ltr-bg">
				<div class="wrapper-fluid">
					<div class="r150-full-slider__inner">
						<div class="r150-full-slider__items">
							<div class="r150-full-slider__item">
								<h2 class="r150-full-slider__title">I am energetic and full of power</h2>
								<div class="r150-full-slider__block">
									<h3 class="r150-full-slider__item-title">Electric Version</h3>
									<img class="r150-full-slider__main-img" src="img/r150/r150-p10-swiper-img1.png" alt="r150 xag">
								</div>
							</div>
							<div class="r150-full-slider__item">
								<div class="r150-full-slider__block r150-full-slider__block--1">
									<div class="r150-full-slider__block-content">
										<h3 class="r150-full-slider__item-title">Electric Version</h3>
										<div class="r150-full-slider__item-description">
											Pure electric drive, equipped with 2 smart batteries Powerful, cost-saving, effortless
										</div>
										<div class="battery-13960s">
											<div class="battery-title">B13960S Intelligent SuperCharge Battery</div>
											<ul class="battery-tips desc">
												<li>962 Wh large capacity</li>
												<li>11 min fully charged in water cooling tank¹</li>
											</ul>
										</div>
									</div>
									<img class="r150-full-slider__main-img" src="img/r150/r150-p10-swiper-img2.png" alt="r150 xag">
								</div>

								<div class="r150-full-slider__block r150-full-slider__block--2">
									<div class="r150-full-slider__block-content">
										<div class="battery-13960s">
											<div class="battery-title">GC4000+ Auto SuperCharge Station</div>
											<ul class="battery-tips desc">
												<li>Variable frequency generator with ultra-low fuel consumption of 0.6 L/KWh</li>
												<li>Max. 25 batteries can be fully charged with a 15 L full tank of petrol</li>
											</ul>
										</div>
									</div>
									<img class="r150-full-slider__main-img" src="img/r150/r150-p10-gc9000.png" alt="r150 xag">
								</div>

								<div class="r150-full-slider__block r150-full-slider__block--3">
									<div class="r150-full-slider__block-content">
										<div class="battery-cm27000">
											<div class="battery-title">CM12500P Intelligent<br> SuperCharger</div>
											<ul class="battery-tips desc">
												<li>Economical and highly efficient</li>
												<li>2500 W rated power, 15 min SuperCharge </li>
											</ul>
										</div>
									</div>
									<img class="r150-full-slider__main-img" src="img/r150/r150-p10-cm27000.png" alt="r150 xag">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="block-scroll">
				<div class="wrapper-fluid">
					<ul class="block-scroll__items">
						<li class="block-scroll__item">
							<div class="block-scroll__item-left">
								<h2 class="block-scroll__title">
									<img src="img/r150/revospray2.png" alt="">
									<!--									<span>title text</span>-->
								</h2>
								<div class="block-scroll__description">
									360° atomization spray with adjusted droplet size works perfectly for
									forestry, orchard, disinfection and more.
									<div class="block-scroll__description__items">
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">Smart Airflow Atomization</h3>
											<div class="block-scroll__description__desc">
												60-200 μm adjustable droplet size
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">Dual Gimbal Design</h3>
											<div class="block-scroll__description__desc">
												Omni-directional spraying
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">150 L</h3>
											<div class="block-scroll__description__desc">
												Rated capacity liquid tank
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">12 m</h3>
											<div class="block-scroll__description__desc">
												Max. Spray Width3
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="block-scroll__item-right">
								<img class="block-scroll__img-item block-scroll__img-item--1" src="img/r150/r150-p122-new.png" alt="">
							</div>
						</li>
						<li class="block-scroll__item">
							<div class="block-scroll__item-left">
								<img class="block-scroll__img-item block-scroll__img-item--2" src="img/r150/r150-p121-new.png" alt="">
							</div>
							<div class="block-scroll__item-right">
								<h2 class="block-scroll__title">
									<img src="img/r150/revomower2.png" alt="">
									<!--									<span>title text</span>-->
								</h2>
								<div class="block-scroll__description">
									Adjust power and travel speed based on the thicknesses of weeds to easily cut
									shrubs, reeds and many others. The optimum solution for land reclamation and
									orchard weeding.
									<div class="block-scroll__description__items">
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">Smart Variable-speed Mowing</h3>
											<div class="block-scroll__description__desc">
												Maximize working efficiency
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">Alloy Steel
																						 Dual Blades</h3>
											<div class="block-scroll__description__desc">
												Adjustable height
												between 2-17 cm
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">Digital Operation</h3>
											<div class="block-scroll__description__desc">
												Traceable operation data
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">90 cm</h3>
											<div class="block-scroll__description__desc">
												Maximum cutting width
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="block-scroll__item">
							<div class="block-scroll__item-left">
								<h2 class="block-scroll__title">
									<img src="img/r150/cargorack2.png" alt="">
									<!--									<span>title text</span>-->
								</h2>
								<div class="block-scroll__description">
									Smart round-trip routing delivers your materials
									to the destination in a worry-free way.
									<div class="block-scroll__description__items">
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">200 kg</h3>
											<div class="block-scroll__description__desc">
												Maximum payload
											</div>
										</div>
										<div class="block-scroll__description__item">
											<h3 class="block-scroll__description__title">1080*1080 mm</h3>
											<div class="block-scroll__description__desc">
												Sturdy rack
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="block-scroll__item-right">
								<img class="block-scroll__img-item block-scroll__img-item--3" src="img/r150/r150-p124-new.png" alt="">
							</div>
						</li>
					</ul>
				</div>
			</section>


			<section class="simple-full-slider">
				<div class="wrapper-fluid">
					<div class="simple-full-slider__inner">
						<div class="simple-full-slider__items">
							<div class="simple-full-slider__item">
								<img src="img/r150/r150-slide1.png" alt="xag r150 2022">
							</div>
							<div class="simple-full-slider__item">
								<img src="img/r150/r150-slide2.png" alt="xag r150 2022">
							</div>
							<div class="simple-full-slider__item">
								<img src="img/r150/r150-slide3.png" alt="xag r150 2022">
							</div>
							<div class="simple-full-slider__item">
								<img src="img/r150/r150-slide4.png" alt="xag r150 2022">
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="block-with-note">
				<div class="wrapper">
					<div class="block-with-note__inner">
						<div class="block-with-note__text">
							<h5 class="block-with-note__title"><b>Note:</b></h5>
							1. Laboratory research shows that, under general operating conditions, the GC4000+ Auto SuperCharge Station can fully charge a B13960S Battery within 11 minutes from 30% to 95%. The specific performance may vary depending on the working environment, temperature, user habits, etc. Please use strictly according to the official product guidelines.
							2. The App for iOS is not available now.
							3. The data of practical operations depends on actual situations. All parameters and data related to this product are results of standard laboratory tests. The specific performance may vary depending on the working environment, temperature, user habits, etc. Please use the product in strict accordance with the official user manual and product guidelines.
						</div>
					</div>
				</div>
			</section>


			<section class="cta-form">
				<div class="wrapper">
					<h2 class="cta-form__title">Ready to buy?</h2>
					<div class="cta-form__body">
						<form action="">
							<div class="input-wrap">
								<label>Please fill in the fields required below.</label>
								<input type="text" placeholder="*Компания">
							</div>
							<div class="input-wrap">
								<input type="text" placeholder="*ФИО">
							</div>
							<div class="input-wrap">
								<input type="text" placeholder="*Phone">
							</div>
							<div class="input-wrap">
								<input type="text" placeholder="*Email">
							</div>
							<div class="cta-form__bottom">Please also write a message to overseas@xa.com, we will reply to it in the order it was received.</div>
							<button type="submit">Submit</button>
						</form>
					</div>
				</div>
			</section>


		</div>
	</div>
</div>

<?php get_footer(); ?>