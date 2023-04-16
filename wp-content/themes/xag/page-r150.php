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


			<?php
				$half_images = get_field('half_images');

				if( !empty($half_images) ) {
			?>
				<section class="r150-2img-with-caption gradient-ltr-bg">
					<div class="wrapper">
						<div class="r150-2img-with-caption__inner">
							<div class="r150-2img-with-caption__items">
								<?php foreach ($half_images as $image) { ?>
									<div class="r150-2img-with-caption__item">
										<?php if( !empty($image['image']) ) { ?>
											<div class="r150-2img-with-caption__img"><img src="<?php echo $image['image']['url'] ?>" alt="<?php echo sanitize_text_field($image['title']) ?>"></div>
										<?php } ?>
										<div class="r150-2img-with-caption__content">
											<?php if( !empty($image['title']) ){ ?>
												<h3 class="r150-2img-with-caption__content-title"><?php echo sanitize_text_field($image['title']) ?></h3>
											<?php } ?>
											<?php if( !empty($image['description']) ) { ?>
												<div class="r150-2img-with-caption__content-desc"><?php echo $image['description'] ?></div>
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
				$custom_slider = get_field('custom_slider');
				if( !empty($custom_slider) ) {
			?>
				<section class="r150-full-slider gradient-ltr-bg">
					<div class="wrapper-fluid">
						<div class="r150-full-slider__inner">
							<div class="r150-full-slider__items">
								<?php foreach ($custom_slider as $slide) { ?>
									<?php if( !$slide['customize_slide'] ) { ?>
										<div class="r150-full-slider__item">
											<?php if( !empty($slide['main_title']) ) { ?>
												<h2 class="r150-full-slider__title"><?php echo sanitize_text_field($slide['main_title']); ?></h2>
											<?php } ?>
											<?php if( !empty($slide['description']) ) { ?>
												<div class="r150-full-slider__item-description"><?php echo $slide['description']; ?></div>
											<?php } ?>
											<div class="r150-full-slider__block">
												<?php if( !empty($slide['left_title']) ) { ?>
													<h3 class="r150-full-slider__item-title"><?php echo sanitize_text_field($slide['left_title']) ?></h3>
												<?php } ?>
												<?php if( !empty($slide['main_slide_image']) ) { ?>
													<img class="r150-full-slider__main-img" src="<?php echo $slide['main_slide_image']['url'] ?>" alt="r150 xag">
												<?php } ?>
											</div>
										</div>
									<?php }else{ ?>
										<?php if( !empty($slide['items']) ) { ?>
											<div class="r150-full-slider__item">
												<?php $i=1; foreach ( $slide['items'] as $item ) { ?>
													<div class="r150-full-slider__block r150-full-slider__block--<?php echo $i; ?>">
														<div class="r150-full-slider__block-content">
															<?php if( $i==1 && !empty($slide['left_title']) ) { ?>
																<h3 class="r150-full-slider__item-title"><?php echo sanitize_text_field($slide['left_title']) ?></h3>
															<?php } ?>
															<?php if( $i==1 && !empty($slide['description']) ) { ?>
																<div class="r150-full-slider__item-description"><?php echo $slide['description']; ?></div>
															<?php } ?>
															<div class="battery-13960s">
																<div class="battery-title"><?php echo $item['title'] ?></div>
																<?php if( !empty($item['features']) ) { ?>
																	<ul class="battery-tips desc">
																		<?php foreach ($item['features'] as $feature){ ?>
																			<?php if( !empty($feature['text']) ){ ?>
																				<li><?php echo $feature['text'] ?></li>
																			<?php } ?>
																		<?php } ?>
																	</ul>
																<?php } ?>
															</div>
														</div>
														<?php if( !empty($item['image']) ) { ?>
															<img class="r150-full-slider__main-img" src="<?php echo $item['image']['url'] ?>" alt="r150 xag">
														<?php } ?>
													</div>
												<?php $i++; } ?>
											</div>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$lr_items = get_field('lr_items');

				if( !empty($lr_items) ){
			?>
				<section class="block-scroll">
					<div class="wrapper-fluid">
						<ul class="block-scroll__items">
							<?php $i=1; foreach ( $lr_items as $item ) { ?>
								<?php if( !empty($item) ){ ?>
									<?php if( !empty($i % 2 != 0) ){ ?>
										<li class="block-scroll__item">
											<div class="block-scroll__item-left">
												<?php if( !empty($item['title']) || !empty($item['title_image']) ){ ?>
													<h2 class="block-scroll__title">
														<?php if( !empty($item['title_image']) ){ ?>
															<img src="<?php echo $item['title_image']['url'] ?>" alt="<?php echo sanitize_text_field($item['title']) ?>">
														<?php } ?>
														<?php if( !empty($item['title']) ){ ?>
															<span><?php echo $item['title'] ?></span>
														<?php } ?>
													</h2>
												<?php } ?>
												<div class="block-scroll__description">
													<?php if( !empty($item['text']) ) echo $item['text'] ?>
													<?php if( !empty($item['features']) ){ ?>
														<div class="block-scroll__description__items">
															<?php foreach( $item['features'] as $feature ){ ?>
																<div class="block-scroll__description__item">
																	<?php if( !empty($feature['title']) ){ ?>
																		<h3 class="block-scroll__description__title"><?php echo sanitize_text_field($feature['title']) ?></h3>
																	<?php } ?>
																	<?php if(!empty($feature['description'])){ ?>
																		<div class="block-scroll__description__desc">
																			<?php echo $feature['description'] ?>
																		</div>
																	<?php } ?>
																</div>
															<?php } ?>
														</div>
													<?php } ?>
												</div>
											</div>
											<div class="block-scroll__item-right">
												<?php if( !empty($item['image']) ) { ?>
													<img class="block-scroll__img-item block-scroll__img-item--1" src="<?php echo $item['image']['url'] ?>" alt="<?php echo sanitize_text_field($item['title']) ?>">
												<?php } ?>
											</div>
										</li>
									<?php }else{ ?>
										<li class="block-scroll__item">
											<div class="block-scroll__item-left">
												<?php if( !empty($item['image']) ) { ?>
													<img class="block-scroll__img-item block-scroll__img-item--1" src="<?php echo $item['image']['url'] ?>" alt="<?php echo sanitize_text_field($item['title']) ?>">
												<?php } ?>
											</div>
											<div class="block-scroll__item-right">
												<?php if( !empty($item['title']) || !empty($item['title_image']) ){ ?>
													<h2 class="block-scroll__title">
														<?php if( !empty($item['title_image']) ){ ?>
															<img src="<?php echo $item['title_image']['url'] ?>" alt="<?php echo sanitize_text_field($item['title']) ?>">
														<?php } ?>
														<?php if( !empty($item['title']) ){ ?>
															<span><?php echo $item['title'] ?></span>
														<?php } ?>
													</h2>
												<?php } ?>
												<div class="block-scroll__description">
													<?php if( !empty($item['text']) ) echo $item['text'] ?>
													<?php if( !empty($item['features']) ){ ?>
														<div class="block-scroll__description__items">
															<?php foreach( $item['features'] as $feature ){ ?>
																<div class="block-scroll__description__item">
																	<?php if( !empty($feature['title']) ){ ?>
																		<h3 class="block-scroll__description__title"><?php echo sanitize_text_field($feature['title']) ?></h3>
																	<?php } ?>
																	<?php if(!empty($feature['description'])){ ?>
																		<div class="block-scroll__description__desc">
																			<?php echo $feature['description'] ?>
																		</div>
																	<?php } ?>
																</div>
															<?php } ?>
														</div>
													<?php } ?>
												</div>
											</div>
										</li>
									<?php } ?>
								<?php } ?>
							<?php $i++; } ?>
						</ul>
					</div>
				</section>
			<?php } ?>


			<?php
				$bfp_slider = get_field('bfp_slider');

				if( !empty($bfp_slider) ){
			?>
				<section class="simple-full-slider">
					<div class="wrapper-fluid">
						<div class="simple-full-slider__inner">
							<div class="simple-full-slider__items">
								<?php foreach ($bfp_slider as $slide){ ?>
									<?php if( !empty($slide['image']) ){ ?>
										<div class="simple-full-slider__item">
											<img src="<?php echo $slide['image']['url'] ?>" alt="<?php echo $slide['image']['alt'] ?>">
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$note = get_field('note');
				if( !empty($note) ){
			?>
				<section class="block-with-note">
					<div class="wrapper">
						<div class="block-with-note__inner">
							<div class="block-with-note__text">
								<?php echo $note; ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<section class="cta-form">
				<div class="wrapper">
					<h2 class="cta-form__title"><?php _e('[:ru]Есть вопросы? Готовы купить?[:ro]Ai întrebări? Ești gata să cumperi?[:]'); ?></h2>
					<div class="cta-form__body">
						<?php echo do_shortcode('[contact-form-7 id="4392" title=":roФорма на лендинге:ruФорма на лендинге:"]'); ?>
					</div>
				</div>
			</section>


		</div>
	</div>
</div>

<?php get_footer(); ?>