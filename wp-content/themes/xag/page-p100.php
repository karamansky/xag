<?php
/*
 * Template Name: drone p100
 * Template Post Type: solutions
 */
get_header();

	$model = get_field('model');
	$tech_page = get_field('tech_page');
	$title = get_field('title');
	$header_video_bg_webm = get_field('header_video_bg_webm');
	$header_video_bg_mp4 = get_field('header_video_bg_mp4');
	$main_popup_video = get_field('main_popup_video');
?>

<div class="tech-wrap">
	<div class="tech">
		<div class="wrapper">
			<div class="tech__header">
				<h3 class="tech__header-title"><?php if(!empty($model)) echo $model; ?></h3>
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
		<div class="tech__content landing">
			<div style="display: none;">
				<div id="p100-video-popup" class="main-video-popup box-modal">
					<div class="box-modal_close arcticmodal-close popup-close">&times;</div>
					<?php
						if(!empty($main_popup_video)){
							$video_code = array_slice(explode('/', $main_popup_video), -1)[0];
					?>
						<iframe width="100%" height="450" src="https://www.youtube.com/embed/<?php echo $video_code; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?php } ?>
				</div>
			</div>

			<section class="landing__header">
				<div class="wrapper">
					<div class="landing__header-content">
						<h2 class="landing__header-title"><?php if(!empty($title)) echo $title; ?></h2>
						<?php if(!empty($main_popup_video)) { ?>
							<a href="#p100-video-popup" class="header__videoplay" data-video="https://www.youtube.com/embed/<?php echo $video_code; ?>"><i class="play"></i></a>
						<?php } ?>
					</div>
				</div>
				<?php if(!empty($header_video_bg_webm) || !empty($header_video_bg_mp4)) : ?>
				<video autoplay="true" preload="auto" playsinline muted loop="true" id="main-video">
					<?php if(!empty($header_video_bg_webm)) { ?>
						<source src="<?php echo $header_video_bg_webm; ?>" type="video/webm">
					<?php } ?>
					<?php if(!empty($header_video_bg_mp4)) { ?>
						<source src="<?php echo $header_video_bg_mp4; ?>" type="video/mp4">
					<?php } ?>
				</video>
				<script> document.getElementById('main-video').play();</script>
				<?php endif; ?>
			</section>


			<?php
				$feature_title = get_field('feature_title');
				$features = get_field('features');
				if( !empty($features) ) :
			?>
				<section class="features">
					<div class="wrapper">
						<?php if( !empty($feature_title) ) { ?>
							<div class="features__text">
								<p><?php echo $feature_title; ?></p>
							</div>
						<?php } ?>
						<div class="features__items">
							<?php foreach ($features as $feature) : ?>
								<div class="features__item features__item--3">
									<h3 class="features__title"><?php echo $feature['title'] ?></h3>
									<div class="features__description"><?php echo $feature['description'] ?></div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$video1_mp4 = get_field('video1_mp4');
				$video1_webm = get_field('video1_webm');
				$video1_title = get_field('video1_title');
				$video1_title_image = get_field('video1_title_image');
				$video1_description = get_field('video1_description');
				$video1_features = get_field('video1_features');
				if( !empty($video1_mp4) || !empty($video1_webm) ) :
			?>
					<section class="video video1 video--centered linear-gradient-bg">
						<div class="wrapper">
							<div class="video__inner">
								<?php if( !empty($video1_title_image) ) { ?>
									<img src="<?php echo $video1_title_image; ?>" alt="<?php echo $video1_title ?>" class="video__logo">
								<?php } ?>
								<?php if( !empty($video1_title) ) { ?>
									<h2 class="video__title"><?php echo $video1_title ?></h2>
								<?php } ?>
								<?php if( !empty($video1_description) ) { ?>
									<div class="video__description">
										<?php echo $video1_description ?>
									</div>
								<?php } ?>
								<?php if(!empty($video1_webm) || !empty($video1_mp4)) : ?>
									<div class="video__block">
										<video class="" autoplay="true" playsinline muted loop="true" id="video1">
											<?php if(!empty($video1_webm)) { ?>
												<source src="<?php echo $video1_webm; ?>" type="video/webm">
											<?php } ?>
											<?php if(!empty($video1_mp4)) { ?>
												<source src="<?php echo $video1_mp4; ?>" type="video/mp4">
											<?php } ?>
										</video>
									</div>
									<script> document.getElementById('video1').play();</script>
								<?php endif; ?>
								<?php if( !empty($video1_features) ) { ?>
									<div class="video__features">
										<div class="features__items">
											<?php foreach ($video1_features as $video1_feature) { ?>
												<div class="features__item features__item--3">
													<h3 class="features__title"><?php echo $video1_feature['title'] ?></h3>
													<div class="features__description"><?php echo $video1_feature['description'] ?></div>
												</div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</section>
			<?php endif; ?>


			<?php
				$slider1 = get_field('slider1');
				if( !empty($slider1) ) {
			?>
				<section class="slider slider--centered">
					<div class="wrapper">
						<div class="slider__items">
							<?php foreach ($slider1 as $slide) { ?>
								<div class="slider__item">
									<div class="slider__item-img">
										<img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title'] ?>">
									</div>
									<h3 class="slider__item-description">
										<?php echo $slide['title'] ?>
									</h3>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>



			<?php
				$video2_mp4 = get_field('video2_mp4');
				$video2_webm = get_field('video2_webm');
				$video2_title = get_field('video2_title');
				$video2_title_image = get_field('video2_title_image');
				$video2_description = get_field('video2_description');
				$video2_features = get_field('video2_features');
				if( !empty($video2_mp4) || !empty($video2_webm) ) :
			?>
				<section class="video video2 video--centered linear-gradient-bg">
					<div class="wrapper">
						<div class="video__inner">
							<?php if( !empty($video2_title_image) ) { ?>
								<img src="<?php echo $video2_title_image; ?>" alt="<?php echo $video2_title ?>" class="video__logo">
							<?php } ?>
							<?php if( !empty($video2_title) ) { ?>
								<h2 class="video__title"><?php echo $video2_title ?></h2>
							<?php } ?>
							<?php if( !empty($video2_description) ) { ?>
								<div class="video__description">
									<?php echo $video2_description ?>
								</div>
							<?php } ?>
							<?php if(!empty($video2_webm) || !empty($video2_mp4)) : ?>
								<div class="video__block">
									<video class="" autoplay="true" playsinline muted loop="true" id="video2">
										<?php if(!empty($video2_webm)) { ?>
											<source src="<?php echo $video2_webm; ?>" type="video/webm">
										<?php } ?>
										<?php if(!empty($video2_mp4)) { ?>
											<source src="<?php echo $video2_mp4; ?>" type="video/mp4">
										<?php } ?>
									</video>
								</div>
								<script> document.getElementById('video2').play();</script>
							<?php endif; ?>
							<?php if( !empty($video2_features) ) { ?>
								<div class="video__features">
									<div class="features__items">
										<?php foreach ($video2_features as $video2_feature) { ?>
											<div class="features__item features__item--3">
												<h3 class="features__title"><?php echo $video2_feature['title'] ?></h3>
												<div class="features__description"><?php echo $video2_feature['description'] ?></div>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php endif; ?>



			<?php
				$video3_mp4 = get_field('video3_mp4');
				$video3_webm = get_field('video3_webm');
				$video3_title = get_field('video3_title');
				$video3_title_image = get_field('video3_title_image');
				$video3_description = get_field('video3_description');
				$video3_features = get_field('video3_features');
				if( !empty($video3_mp4) || !empty($video3_webm) ) :
			?>
				<section class="video video3 video--centered linear-gradient-bg">
					<div class="wrapper">
						<div class="video__inner">
							<?php if( !empty($video3_title_image) ) { ?>
								<img src="<?php echo $video3_title_image; ?>" alt="<?php echo $video3_title ?>" class="video__logo">
							<?php } ?>
							<?php if( !empty($video3_title) ) { ?>
								<h2 class="video__title"><?php echo $video3_title ?></h2>
							<?php } ?>
							<?php if( !empty($video3_description) ) { ?>
								<div class="video__description">
									<?php echo $video3_description ?>
								</div>
							<?php } ?>
							<?php if(!empty($video3_webm) || !empty($video3_mp4)) : ?>
								<div class="video__block">
									<video class="" autoplay="true" playsinline muted loop="true" id="video3">
										<?php if(!empty($video3_webm)) { ?>
											<source src="<?php echo $video3_webm; ?>" type="video/webm">
										<?php } ?>
										<?php if(!empty($video3_mp4)) { ?>
											<source src="<?php echo $video3_mp4; ?>" type="video/mp4">
										<?php } ?>
									</video>
								</div>
								<script> document.getElementById('video3').play();</script>
							<?php endif; ?>
							<?php if( !empty($video3_features) ) { ?>
								<div class="video__features">
									<div class="features__items">
										<?php foreach ($video3_features as $video3_feature) { ?>
											<div class="features__item features__item--3">
												<h3 class="features__title"><?php echo $video3_feature['title'] ?></h3>
												<div class="features__description"><?php echo $video3_feature['description'] ?></div>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$full_with_bg = get_field('full_with_bg');
				$full_with_bg_title_image = get_field('full_with_bg_title_image');
				$full_with_bg_title = get_field('full_with_bg_title');
				$full_with_bg_description = get_field('full_with_bg_description');
				$full_with_bg_items = get_field('full_with_bg_items');

				if( !empty($full_with_bg_items) ) {
			?>
				<section class="full-width-bg full-width-bg--x4"
						 <?php if( !empty($full_with_bg) ) { ?>
							style="background-image: url('<?php echo $full_with_bg; ?>')"
						 <?php } ?>
				>
					<div class="wrapper-fluid">
						<div class="full-width-bg__inner">
							<?php if( !empty($full_with_bg_title_image) ) { ?>
								<div class="full-width-bg__logo"><img src="<?php echo $full_with_bg_title_image ?>" alt="<?php echo $full_with_bg_title ?>"></div>
							<?php } ?>
							<?php if( !empty($full_with_bg_title) ) { ?>
								<h2 class="full-width-bg__title"><?php echo $full_with_bg_title ?></h2>
							<?php } ?>
							<?php if( !empty($full_with_bg_description) ) { ?>
								<div class="full-width-bg__description">
									<?php echo $full_with_bg_description ?>
								</div>
							<?php } ?>
							<?php if( !empty($full_with_bg_items) ) { ?>
								<div class="full-width-bg__items">
									<?php foreach ($full_with_bg_items as $item) { ?>
										<div class="full-width-bg__item">
											<h3><?php echo $item['title'] ?></h3>
											<span><?php echo $item['description'] ?></span>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>



			<?php
				$video4_mp4 = get_field('video4_mp4');
				$video4_webm = get_field('video4_webm');
				$video4_title = get_field('video4_title');
				$video4_title_image = get_field('video4_title_image');
				$video4_description = get_field('video4_description');
				$video4_features = get_field('video4_features');
				if( !empty($video4_mp4) || !empty($video4_webm) ) :
			?>
				<section class="video video4 video--centered linear-gradient-bg">
						<div class="wrapper">
							<div class="video__inner">
								<?php if( !empty($video4_title_image) ) { ?>
									<img src="<?php echo $video4_title_image; ?>" alt="<?php echo $video4_title ?>" class="video__logo">
								<?php } ?>
								<?php if( !empty($video4_title) ) { ?>
									<h2 class="video__title"><?php echo $video4_title ?></h2>
								<?php } ?>
								<?php if( !empty($video4_description) ) { ?>
									<div class="video__description">
										<?php echo $video4_description ?>
									</div>
								<?php } ?>
								<?php if(!empty($video4_webm) || !empty($video4_mp4)) : ?>
									<div class="video__block">
										<video class="" autoplay="true" playsinline muted loop="true" id="video4">
											<?php if(!empty($video4_webm)) { ?>
												<source src="<?php echo $video4_webm; ?>" type="video/webm">
											<?php } ?>
											<?php if(!empty($video4_mp4)) { ?>
												<source src="<?php echo $video4_mp4; ?>" type="video/mp4">
											<?php } ?>
										</video>
									</div>
									<script> document.getElementById('video4').play();</script>
								<?php endif; ?>
								<?php if( !empty($video4_features) ) { ?>
									<div class="video__features">
										<div class="features__items">
											<?php foreach ($video4_features as $video4_feature) { ?>
												<div class="features__item features__item--2">
													<h3 class="features__title"><?php echo $video4_feature['title'] ?></h3>
													<div class="features__description"><?php echo $video4_feature['description'] ?></div>
												</div>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</section>
			<?php endif; ?>



			<?php
				$video5_mp4 = get_field('video5_mp4');
				$video5_webm = get_field('video5_webm');
				$video5_title = get_field('video5_title');
				$video5_title_image = get_field('video5_title_image');
				$video5_description = get_field('video5_description');
				$video5_features = get_field('video5_features');
				if( !empty($video5_mp4) || !empty($video5_webm) ) :
			?>
				<section class="video video5 video--centered linear-gradient-bg">
					<div class="wrapper">
						<div class="video__inner">
							<?php if( !empty($video5_title_image) ) { ?>
								<img src="<?php echo $video5_title_image; ?>" alt="<?php echo $video5_title ?>" class="video__logo">
							<?php } ?>
							<?php if( !empty($video5_title) ) { ?>
								<h2 class="video__title"><?php echo $video5_title ?></h2>
							<?php } ?>
							<?php if( !empty($video5_description) ) { ?>
								<div class="video__description">
									<?php echo $video5_description ?>
								</div>
							<?php } ?>
							<?php if(!empty($video5_webm) || !empty($video5_mp4)) : ?>
								<div class="video__block">
									<video class="" autoplay="true" playsinline muted loop="true" id="video5">
										<?php if(!empty($video5_webm)) { ?>
											<source src="<?php echo $video5_webm; ?>" type="video/webm">
										<?php } ?>
										<?php if(!empty($video5_mp4)) { ?>
											<source src="<?php echo $video5_mp4; ?>" type="video/mp4">
										<?php } ?>
									</video>
								</div>
								<script> document.getElementById('video5').play();</script>
							<?php endif; ?>
							<?php if( !empty($video5_features) ) { ?>
								<div class="video__features">
									<div class="features__items">
										<?php foreach ($video5_features as $video5_feature) { ?>
											<div class="features__item features__item--3">
												<h3 class="features__title"><?php echo $video5_feature['title'] ?></h3>
												<div class="features__description"><?php echo $video5_feature['description'] ?></div>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php endif; ?>



			<?php
				$three_items = get_field('three_items');
				$three_items_title = get_field('three_items_title');

				if( !empty($three_items) ) {
			?>
				<section class="three-items">
					<div class="wrapper-fluid">
						<div class="three-items__inner">
							<?php if( !empty($three_items_title) ) { ?>
								<h2 class="three-items__title"><?php echo $three_items_title ?></h2>
							<?php } ?>
							<div class="three-items__blocks">
								<?php foreach ($three_items as $three_item) { ?>
									<div class="three-items__block">
										<div class="three-items__img">
											<img src="<?php echo $three_item['image'] ?>" alt="<?php echo $three_item['title'] ?>">
										</div>
										<?php if( !empty($three_item['title']) ) { ?>
											<h3 class="three-items__block-title"><?php echo $three_item['title'] ?></h3>
										<?php } ?>
										<?php if( !empty($three_item['subtitle']) ) { ?>
											<div class="three-items__block-subtitle">
												<?php echo $three_item['subtitle'] ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$block_with_img = get_field('block_with_img');
				$block_with_img_title = get_field('block_with_img_title');
				$block_with_img_description = get_field('block_with_img_description');

				if( !empty($block_with_img) ) {
			?>
				<section class="block-with-img">
					<div class="wrapper">
						<div class="block-with-img__inner">
							<?php if( !empty($block_with_img_title) ) { ?>
							<h2 class="block-with-img__title">
								<?php echo $block_with_img_title; ?>
							</h2>
							<?php } ?>
							<?php if( !empty($block_with_img_description) ) { ?>
							<div class="block-with-img__subtitle">
								<?php echo $block_with_img_description ?>
							</div>
							<?php } ?>
							<div class="block-with-img__picture">
								<img src="<?php echo $block_with_img ?>" alt="<?php echo $block_with_img_title; ?>">
							</div>
						</div>
					</div>
				</section>
			<?php } ?>



			<?php
				$slider_info = get_field('slider_info');
				if( !empty($slider_info) ) {
			?>
					<section class="slider slider--info">
						<div class="wrapper">
							<div class="slider__items">
								<?php foreach ($slider_info as $slide) { ?>
									<div class="slider__item">
										<div class="slider__item-info">
											<h3 class="slider__item-info-title">
												<?php echo $slide['title'] ?>
											</h3>
											<?php if( !empty( $slide['description'] ) ) { ?>
												<div class="slider__item-info-description">
													<?php echo $slide['description'] ?>
												</div>
											<?php } ?>
										</div>
										<div class="slider__item-img">
											<img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title'] ?>">
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</section>
			<?php } ?>



			<?php
				$img_left_with_icons = get_field('img_left_with_icons');
				$img_left_with_icons_title = get_field('img_left_with_icons_title');
				$img_left_with_icons_description = get_field('img_left_with_icons_description');

				if( !empty($img_left_with_icons) ) {
			?>
				<section class="img-left-with-icons linear-gradient-bg">
					<div class="wrapper">
						<div class="img-left-with-icons__inner">
							<?php if( !empty($img_left_with_icons_title) ) { ?>
								<h2 class="img-left-with-icons__title"><?php echo $img_left_with_icons_title ?></h2>
							<?php } ?>
							<?php if( !empty($img_left_with_icons_title) ) { ?>
							<div class="img-left-with-icons__subtitle">
								<?php echo $img_left_with_icons_description ?>
							</div>
							<?php } ?>

							<?php foreach ($img_left_with_icons as $block) { ?>
								<div class="img-left-with-icons__item">
									<?php if(!empty($block['title'])) { ?>
										<h3 class="img-left-with-icons__item-title"><?php echo $block['title'] ?></h3>
									<?php } ?>
									<div class="img-left-with-icons__item-inner">

										<?php if( !empty($block['image']) ) { ?>
											<div class="img-left-with-icons__img">
												<img src="<?php echo $block['image']; ?>" alt="">
												<?php if( !empty($block['images_slider']) ) { ?>
													<ul class="img-left-with-icons__img-slider">
														<?php foreach($block['images_slider'] as $item) { ?>
															<li><img src="<?php echo $item['img']; ?>" alt="<?php echo $block['title'] ?>"></li>
														<?php } ?>
													</ul>
												<?php } ?>
											</div>
										<?php } ?>

										<?php if( !empty($block['icons']) ) { ?>
											<div class="img-left-with-icons__icons">
												<?php foreach ($block['icons'] as $icon) { ?>
													<div class="img-left-with-icons__icon">
														<div class="img-left-with-icons__icon-img">
															<img src="<?php echo $icon['icon'] ?>" alt="<?php echo $icon['description'] ?>">
														</div>
														<div class="img-left-with-icons__description">
															<?php echo $icon['description'] ?>
														</div>
													</div>
												<?php } ?>
											</div>
										<?php } ?>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>


			<?php
				$slider_full = get_field('slider_full');

				if( !empty($slider_full) ) {
			?>
				<section class="slider-full left-to-right-gradient">
					<div class="wrapper-fluid">
						<div class="slider-full__inner">
							<?php foreach ($slider_full as $slide) { ?>
								<div class="slider-full__item">
									<?php if( !empty($slide['title']) ) { ?>
										<h2 class="slider-full__title"><?php echo $slide['title']; ?></h2>
									<?php } ?>
									<?php if( !empty($slide['main_description']) ) { ?>
										<div class="slider-full__description">
											<?php echo $slide['main_description'] ?>
										</div>
									<?php } ?>
									<div class="slider-full__item-inner">
										<div class="slider-full__item-img">
											<img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>">
										</div>
										<div class="slider-full__item-content">
											<?php if( !empty($slide['description']) ) { ?>
												<div class="features__items">
													<?php foreach ($slide['description'] as $slide_desc_item) { ?>
														<div class="features__item features__item--full">
															<h3 class="features__title"><?php echo $slide_desc_item['title'] ?></h3>
															<div class="features__description">
																<?php echo $slide_desc_item['description'] ?>
															</div>
														</div>
													<?php } ?>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>



			<section class="cta-form">
				<div class="wrapper">
					<h2 class="cta-form__title"><?php _e('[:ru]Есть вопросы? Готовы купить?[:ro]Ai întrebări? Ești gata să cumperi?[:]'); ?></h2>
					<div class="cta-form__body">
						<?php echo do_shortcode('[contact-form-7 id="4392" title=":roФорма на лендинге:ruФорма на лендинге:"]'); ?>
<!--						<label>--><?php //_e('[:ru]Пожалуйста, заполните необходимые поля ниже.[:ro]Vă rugăm să completați câmpurile obligatorii de mai jos.[:]'); ?><!--</label>-->
<!--						<div class="cta-form__bottom">Please also write a message to overseas@xa.com, we will reply to it in the order it was received.</div>-->
					</div>
				</div>
			</section>


		</div>
	</div>
</div>


<?php get_footer(); ?>


