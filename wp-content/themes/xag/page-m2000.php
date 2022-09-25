<?php
	/*
	 * Template Name: drone M2000
	 * Template Post Type: solutions
	 */
	get_header();

	$model = get_field('model');
	$tech_page = get_field('tech_page');
	$small_title = get_field('small_title');
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
				<div id="m2000-video-popup" class="main-video-popup box-modal">
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
						<?php  if(!empty($small_title)) { ?>
							<h3 class="landing__header-subtitle"><?php echo $small_title; ?></h3>
						<?php } ?>
						<?php if(!empty($title)) { ?>
							<h2 class="landing__header-title"><?php echo $title; ?></h2>
						<?php } ?>
						<?php if(!empty($main_popup_video)) { ?>
							<a href="#m2000-video-popup" class="header__videoplay" data-video="https://www.youtube.com/embed/<?php echo $video_code; ?>"><i class="play"></i></a>
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
				$block_with_features_title = get_field('features_title');
				$block_with_features_description = get_field('features_description');
				$block_with_features_items = get_field('features_items');
			?>
			<section class="features">
				<div class="wrapper">
					<?php if( !empty($block_with_features_title) ) { ?>
						<h2 class="features__main-title"><?php echo strip_tags($block_with_features_title); ?></h2>
					<?php } ?>
					<?php if( !empty($block_with_features_description) ) { ?>
						<div class="features__text">
							<?php echo $block_with_features_description ?>
						</div>
					<?php } ?>
					<?php if( !empty($block_with_features_items) ) { ?>
						<div class="features__items">
							<?php foreach ($block_with_features_items as $item) { ?>
								<div class="features__item features__item--2">
									<h3 class="features__title"><?php echo $item['title'] ?></h3>
									<div class="features__description"><?php echo $item['description'] ?></div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</section>




			<?php
				$video_title = get_field('video_title');
				$video_description = get_field('video_description');
				$video_webm = get_field('video_webm');
				$video_mp4 = get_field('video_mp4');
				$video_icons = get_field('video_icons');

			?>
			<section class="video">
				<div class="wrapper">
					<div class="video__inner">
						<div class="video__block">
							<video class="" autoplay="true" playsinline muted loop="true" id="video1">
								<?php if(!empty($video_webm)) { ?>
									<source src="<?php echo $video_webm; ?>" type="video/webm">
								<?php } ?>
								<?php if(!empty($video_mp4)) { ?>
									<source src="<?php echo $video_mp4; ?>" type="video/mp4">
								<?php } ?>
							</video>
							<script> document.getElementById('video1').play();</script>
						</div>
						<?php if( !empty($video_icons) ) { ?>
							<div class="video__icons">
								<?php foreach ($video_icons as $video_icon) { ?>
									<div class="video__icon-block">
										<div class="video__icon"><img src="<?php echo $video_icon['icon']['url'] ?>" alt="<?php echo strip_tags($video_icon['title']) ?>" style="max-width: 100px;"></div>
										<h4 class="video__icon-title"><?php echo $video_icon['title'] ?></h4>
										<div class="video__icon-description"><?php echo $video_icon['description'] ?></div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>




			<?php
				$block_with_img_image_title = get_field('block_with_img_image_title');
				$block_with_img_title = get_field('block_with_img_title');
				$block_with_img_description = get_field('block_with_img_description');
				$block_with_img = get_field('block_with_img');
				$block_with_img_features = get_field('block_with_img_features');
			?>
			<section class="block-with-img" style="background: #2d2d2d;">
				<div class="wrapper">
					<div class="block-with-img__inner">
						<?php if( !empty($block_with_img_image_title) ) { ?>
							<div class="block-with-img__logo">
								<img src="<?php echo $block_with_img_image_title['url'] ?>" alt="<?php echo strip_tags($block_with_img_title); ?>">
							</div>
						<?php } ?>
						<?php if( !empty($block_with_img_title) ) { ?>
							<h2 class="block-with-img__title">
								<?php echo $block_with_img_title ?>
							</h2>
						<?php } ?>
						<?php if( !empty($block_with_img_description) ) { ?>
							<div class="block-with-img__subtitle">
								<?php echo $block_with_img_description ?>
							</div>
						<?php } ?>
						<?php if( !empty($block_with_img) ) { ?>
							<div class="block-with-img__picture">
								<img src="<?php echo $block_with_img['url'] ?>" alt="super x4">
							</div>
						<?php } ?>
					</div>
					<?php if( !empty($block_with_img_features) ) { ?>
						<div class="block-with-img__features">
							<div class="features__items">
								<?php foreach( $block_with_img_features as $feature ) { ?>
									<div class="features__item features__item--2">
										<h3 class="features__title"><?php echo $feature['title'] ?></h3>
										<div class="features__description"><?php echo $feature['description'] ?></div>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>



			<?php
				$block_with_img2_title = get_field('block_with_img_title');
				$block_with_img2 = get_field('block_with_img');
				$block_with_img2_features = get_field('block_with_img_features');
			?>
			<section class="block-with-img">
				<div class="wrapper">
					<div class="block-with-img__inner">
						<?php if( !empty($block_with_img2_title) ) { ?>
							<h2 class="block-with-img__title">
								<?php echo $block_with_img2_title ?>
							</h2>
						<?php } ?>
						<?php if( !empty($block_with_img2) ) { ?>
							<div class="block-with-img__picture">
								<img src="<?php echo $block_with_img2['url'] ?>" alt="super x4">
							</div>
						<?php } ?>
					</div>
					<?php if( !empty($block_with_img2_features) ) { ?>
						<div class="block-with-img__features">
							<div class="features__items">
								<?php foreach( $block_with_img2_features as $feature ) { ?>
									<div class="features__item features__item--2">
										<h3 class="features__title"><?php echo $feature['title'] ?></h3>
										<div class="features__description"><?php echo $feature['description'] ?></div>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>




			<?php
				$block_2x2_title = get_field('block_2x2_title');
				$block_2x2_description = get_field('block_2x2_description');
				$block_2x2_image = get_field('block_2x2_image');
				$block_2x2_items = get_field('block_2x2_items');
			?>
			<section class="block-with-2x2">
				<div class="wrapper">
					<div class="block-with-2x2__inner">
						<?php if( !empty($block_2x2_title) ) { ?>
							<h2 class="block-with-2x2__title">
								<?php echo $block_2x2_title ?>
							</h2>
						<?php } ?>
						<?php if( !empty($block_2x2_description) ) { ?>
							<div class="block-with-2x2__description">
								<?php echo $block_2x2_description ?>
							</div>
						<?php } ?>
						<?php if( !empty($block_2x2_image) ){ ?>
						<div class="block-with-2x2__description-img">
							<img src="<?php echo $block_2x2_image['url'] ?>" alt="m2000">
						</div>
						<?php } ?>
						<?php if( !empty($block_2x2_items) ) { ?>
							<div class="block-with-2x2__items linear-gradient-bg">
								<?php foreach ($block_2x2_items as $block_2x2_item) { ?>
									<div class="block-with-2x2__item">
										<div class="block-with-2x2__img">
											<img src="<?php echo $block_2x2_item['image']['url'] ?>" alt="camera">
										</div>
										<h3 class="block-with-2x2__item-title">
											<?php echo $block_2x2_item['title'] ?>
										</h3>
										<div class="block-with-2x2__item-description">
											<?php echo $block_2x2_item['description'] ?>
										</div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>





			<?php
				$features_title = get_field('features_title');
				$features_description = get_field('features_description');
				$features_items = get_field('features_items');
			?>
			<section class="features">
				<div class="wrapper">
					<?php if( !empty($features_title) ) { ?>
						<h2 class="features__main-title"><?php echo strip_tags($features_title); ?></h2>
					<?php } ?>
					<?php if( !empty($features_description) ) { ?>
						<div class="features__text">
							<?php echo $features_description ?>
						</div>
					<?php } ?>
					<?php if( !empty($features_items) ) { ?>
						<div class="features__items">
							<?php foreach ($features_items as $item) { ?>
								<div class="features__item features__item--2">
									<h3 class="features__title"><?php echo $item['title'] ?></h3>
									<div class="features__description"><?php echo $item['description'] ?></div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</section>





			<?php
				$video2_title = get_field('video_title');
				$video2_description = get_field('video_description');
				$video2_webm = get_field('video_webm');
				$video2_mp4 = get_field('video_mp4');
				$video2_icons = get_field('video_icons');

			?>
			<section class="video video1 video--centered">
				<div class="wrapper">
					<div class="video__inner">
						<div class="video__block">
							<video class="" autoplay="true" playsinline muted loop="true" id="video1">
								<?php if(!empty($video2_webm)) { ?>
									<source src="<?php echo $video2_webm; ?>" type="video/webm">
								<?php } ?>
								<?php if(!empty($video2_mp4)) { ?>
									<source src="<?php echo $video2_mp4; ?>" type="video/mp4">
								<?php } ?>
							</video>
							<script> document.getElementById('video1').play();</script>
						</div>
						<?php if( !empty($video2_icons) ) { ?>
							<div class="video__icons">
								<?php foreach ($video2_icons as $video_icon) { ?>
									<div class="video__icon-block">
										<div class="video__icon"><img src="<?php echo $video_icon['icon']['url'] ?>" alt="<?php echo strip_tags($video_icon['title']) ?>"></div>
										<h4 class="video__icon-title"><?php echo $video_icon['title'] ?></h4>
										<div class="video__icon-description"><?php echo $video_icon['description'] ?></div>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>




			<?php
				$block_with_img_text_title = get_field('block_with_img_text_title');
				$block_with_img_text_description = get_field('block_with_img_text_description');
				$block_with_img_text_content = get_field('block_with_img_text_content');
				if( !empty($block_with_img_text_content) ) {
			?>
				<section class="block-with-img-text linear-gradient-bg">
					<div class="wrapper">
						<div class="block-with-img-text__inner">
							<?php if(!empty($block_with_img_text_title)) { ?>
								<h2 class="block-with-img-text__title">
									<?php echo strip_tags($block_with_img_text_title); ?>
								</h2>
							<?php } ?>
							<?php foreach ($block_with_img_text_content as $content) { ?>
								<div class="block-with-img-text__item">
									<div class="block-with-img-text__left">
										<img src="<?php echo $content['image']['url'] ?>" alt="<?php echo strip_tags($content['title']) ?>">
									</div>
									<div class="block-with-img-text__right">
										<h3 class="block-with-img-text__item-title"><?php echo $content['title'] ?></h3>
										<div class="block-with-img-text__item-description">
											<?php echo $content['description'] ?>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</section>
			<?php } ?>



			<?php
				$block_with_note_text = get_field('block_with_note_text');
				if( !empty($block_with_note_text) ){
					?>
					<section class="block-with-note">
						<div class="wrapper">
							<div class="block-with-note__inner">
								<div class="block-with-note__text">
									<?php echo $block_with_note_text ?>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>



			<section class="cta-form">
				<div class="wrapper">
					<h2 class="cta-form__title"><?php _e('[:ru]Есть вопросы или Готовы купить?[:ro]Ai întrebări? Ești gata să cumperi?[:]'); ?></h2>
					<div class="cta-form__body">
						<?php echo do_shortcode('[contact-form-7 id="4392" title=":roФорма на лендинге:ruФорма на лендинге:"]'); ?>
					</div>
				</div>
			</section>


		</div>
	</div>
</div>


<?php get_footer(); ?>


