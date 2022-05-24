<?php
/*
 * Template Name: drone v40
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
				<div id="v40-video-popup" class="main-video-popup box-modal">
					<div class="box-modal_close arcticmodal-close popup-close">&times;</div>
					<?php
						if(!empty($main_popup_video)):
							$video_code = array_slice(explode('/', $main_popup_video), -1)[0];
					?>
						<iframe width="100%" height="450" src="https://www.youtube.com/embed/<?php echo $video_code; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?php endif; ?>
				</div>
			</div>
			<section class="landing__header">
				<div class="wrapper">
					<div class="landing__header-content">
						<h2 class="landing__header-title"><?php if(!empty($title)) echo $title; ?></h2>
						<a href="#v40-video-popup" class="header__videoplay" data-video="<?php echo get_template_directory_uri()?>/app/img/v40.mp4"><i class="play"></i></a>
					</div>
				</div>
				<?php if(!empty($header_video_bg_webm) || !empty($header_video_bg_mp4)) : ?>
				<video autoplay muted loop="true" id="main-video">
					<source src="<?php echo $header_video_bg_webm; ?>" type="video/webm">
					<source src="<?php echo $header_video_bg_mp4; ?>" type="video/mp4">
				</video>
				<script> document.getElementById('main-video').play();</script>
				<?php endif; ?>
			</section>


			<?php
				$features = get_field('features');
				if( !empty($features) ) :
			?>
				<section class="features">
					<div class="wrapper">
						<div class="features__items">
							<?php foreach ($features as $feature) : ?>
								<div class="features__item">
									<h3 class="features__title"><?php echo $feature['title'] ?></h3>
									<div class="features__description"><?php echo $feature['description'] ?></div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$features2_title = get_field('features2_title');
				$features2_subtitle = get_field('features2_subtitle');
				$features2_img = get_field('features2_img');
				$features2_bottom_title = get_field('features2_bottom_title');
				$features2_description = get_field('features2_description');

				if( !empty($features2_title) ) :
			?>
				<section class="features2">
					<div class="wrapper">
						<?php if( !empty($features2_subtitle) ): ?>
							<h4 class="features2__section-subtitle"><?php echo $features2_subtitle; ?></h4>
						<?php endif; ?>

						<h2 class="features2__section-title"><?php echo $features2_title; ?></h2>

						<?php if( !empty($features2_img) ): ?>
							<img class="features2__img" src="<?php echo $features2_img; ?>" alt="<?php echo $features2_title; ?>">
						<?php endif; ?>
						<?php if( !empty($features2_bottom_title) ): ?>
							<h2 class="features2__title"><?php echo $features2_bottom_title; ?></h2>
						<?php endif; ?>
						<?php if( !empty($features2_description) ): ?>
							<div class="features2__description"> <?php echo $features2_description; ?> </div>
						<?php endif; ?>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$structure_title = get_field('structure_title');
				$structure_description = get_field('structure_description');
				$structure_img = get_field('structure_img');
				if( !empty($structure_title) ) :
			?>
				<section class="left-bg">
					<div class="left-bg__img" style="background-image: url('<?php if( !empty($structure_img) ) echo $structure_img; ?> ')"></div>
					<div class="wrapper">
						<div class="left-bg__content">
							<h2 class="section__title"><?php echo $structure_title; ?></h2>
							<?php if( !empty($structure_description) ) : ?>
								<div class="left-bg__description">
									<?php echo $structure_description; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$structure2_title = get_field('structure2_title');
				$structure2_description = get_field('structure2_description');
				$structure2_img = get_field('structure2_img');
				if( !empty($structure2_title) ) :
			?>
				<section class="right-bg">
					<div class="right-bg__img" style="background-image: url('<?php if( !empty($structure2_img) ) echo $structure2_img; ?>')"></div>
					<div class="wrapper">
						<div class="right-bg__content">
							<h2 class="section__title"><?php echo $structure2_title; ?></h2>
							<?php if( !empty($structure2_description) ) : ?>
							<div class="right-bg__description">
								<?php echo $structure2_description; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$spray_title = get_field('spray_title');
				$spray_subtitle = get_field('spray_subtitle');
				$spray_video_webm = get_field('spray_video_webm');
				$spray_video_mp4 = get_field('spray_video_mp4');

				if( !empty($spray_video_webm) || !empty($spray_video_mp4) ) :
			?>
				<section class="text-content">
					<div class="wrapper">
						<?php if( !empty($spray_subtitle) ) : ?>
							<div class="section__subtitle"><?php echo $spray_subtitle; ?></div>
						<?php endif; ?>
						<?php if( !empty($spray_title) ) : ?>
							<h2 class="section__title"><?php echo $spray_title; ?></h2>
						<?php endif; ?>
					</div>
					<div class="tech-video-play">
						<video autoplay muted loop="true" id="video-spray">
							<source src="<?php echo $spray_video_webm; ?>" type="video/webm">
							<source src="<?php echo $spray_video_mp4; ?>" type="video/mp4">
						</video>
						<script> document.getElementById('video-spray').play();</script>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$modular_title = get_field('modular_title');
				$modular_subtitle = get_field('modular_subtitle');
				$modular_img = get_field('modular_img');
				if( !empty($modular_img) ):
			?>
				<section class="modular">
					<div class="wrapper">
						<?php if( !empty($modular_subtitle) ) echo '<h4 class="section__subtitle">'. $modular_subtitle .'</h4>'; ?>
					<?php if( !empty($modular_title) ) echo '<h2 class="section__title">'. $modular_title .'</h2>'; ?>
						<img src="<?php echo $modular_img; ?>" alt="<?php echo $modular_title; ?>">
					</div>
				</section>
			<?php endif; ?>


			<?php
				$sizes_title = get_field('sizes_title');
				$sizes_subtitle = get_field('sizes_subtitle');
				$sizes_tabs = get_field('sizes_tabs');
				if( !empty($sizes_tabs) ) :
			?>
				<section class="propellers">
					<div class="wrapper">
						<?php if( !empty($sizes_subtitle) ) echo '<h4 class="section__subtitle">'. $sizes_subtitle .'</h4>'; ?>
						<?php if( !empty($sizes_title) ) echo '<h2 class="section__title">'. $sizes_title .'</h2>'; ?>
						<div class="propellers__tabs">
							<div class="tab_content">
								<?php foreach ($sizes_tabs as $tab) : ?>
									<div class="tab_item"><img src="<?php echo $tab['img']; ?>" alt="<?php echo $tab['name'] ?>"></div>
								<?php endforeach; ?>
							</div>
							<div class="tabs">
								<?php foreach ($sizes_tabs as $tab) : ?>
									<div class="tab"><?php echo $tab['name'] ?></div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$ip67_subtitle = get_field('ip67_subtitle');
				$ip67_title = get_field('ip67_title');
				$ip67_video_webm = get_field('ip67_video_webm');
				$ip67_video_mp4 = get_field('ip67_video_mp4');
				if( !empty($ip67_video_webm) || !empty($ip67_video_mp4) ) :
			?>
				<section class="ip67">
					<div class="wrapper">
						<?php if( !empty($ip67_subtitle) ) echo '<h4 class="section__subtitle">'. $ip67_subtitle .'</h4>'; ?>
						<?php if( !empty($ip67_title) ) echo '<h2 class="section__title">'. $ip67_title .'</h2>'; ?>
					</div>
					<div class="tech-video-play">
						<video autoplay muted loop="true" id="tech-video">
							<source src="<?php echo $ip67_video_webm; ?>" type="video/webm">
							<source src="<?php echo $ip67_video_mp4; ?>" type="video/mp4">
						</video>
						<script> document.getElementById('tech-video').play();</script>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$x4_title = get_field('x4_title');
				$x4_subtitle = get_field('x4_subtitle');
				$x4_img = get_field('x4_img');
				if( !empty($x4_img) ) :
			?>
				<section class="x4">
					<div class="wrapper">
						<?php if(!empty($x4_title)) echo '<h2 class="section__title">'. $x4_title .'</h2>'; ?>
						<?php if(!empty($x4_subtitle)) echo '<h4 class="section__subtitle">'. $x4_subtitle .'</h4>'; ?>
						<img src="<?php echo $x4_img; ?>" alt="<?php echo $x4_title; ?>">
					</div>
				</section>
			<?php endif; ?>


			<?php
				$x4_video_title = get_field('x4_video_title');
				$x4_video_subtitle = get_field('x4_video_subtitle');
				$x4_video_webm = get_field('x4_video_webm');
				$x4_video_mp4 = get_field('x4_video_mp4');
				$x4_video_features = get_field('x4_video_features');
				if( !empty($x4_video_webm) || !empty($x4_video_mp4) ):
			?>
				<section class="x4-video">
					<div class="wrapper">
						<?php if( !empty($x4_video_title) ) echo '<h2 class="section__title">'. $x4_video_title .'</h2>'; ?>
					<?php if( !empty($x4_video_title) ) echo '<h4 class="section__subtitle">'. $x4_video_subtitle .'</h4>'; ?>
					</div>
					<div class="tech-video-play">
						<video autoplay muted loop="true" id="x4-video">
							<source src="<?php echo $x4_video_webm; ?>" type="video/webm">
							<source src="<?php echo $x4_video_mp4; ?>" type="video/mp4">
						</video>
						<script> document.getElementById('x4-video').play();</script>
					</div>
					<?php if( !empty($x4_video_features) ) : ?>
						<div class="wrapper">
							<div class="features__items">
								<?php foreach ($x4_video_features as $x4_feature) : ?>
									<div class="features__item">
										<h3 class="features__title"><?php echo $x4_feature['title']; ?></h3>
										<div class="features__description"><?php echo $x4_feature['description']; ?></div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
				</section>
			<?php endif; ?>


			<?php
				$radar_title = get_field('radar_title');
				$radar_tabs = get_field('radar_tabs');
				if( !empty($radar_tabs) ):
			?>
				<section class="radar">
					<div class="wrapper">
						<?php if( !empty($radar_title) ) echo '<h2 class="section__title">'. $radar_title .'</h2>'; ?>
					</div>
					<div class="radar__tabs">
						<div class="tabs">
							<?php foreach ($radar_tabs as $tab) : ?>
								<div class="tab"><?php echo $tab['name']; ?></div>
							<?php endforeach; ?>
						</div>
						<div class="tab_content">
							<?php foreach ($radar_tabs as $tab) : ?>
								<div class="tab_item"><img src="<?php echo $tab['img']; ?>" alt="<?php echo $radar_title; ?>"></div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$camera_subtitle = get_field('camera_subtitle');
				$camera_title = get_field('camera_title');
				$camera_video_webm = get_field('camera_video_webm');
				$camera_video_mp4 = get_field('camera_video_mp4');
				if( !empty($camera_video_webm) || !empty($camera_video_mp4)) :
			?>
				<section class="camera">
					<div class="wrapper">
						<?php if( !empty($camera_subtitle) ) echo '<h4 class="section__subtitle">'. $camera_subtitle .'</h4>'; ?>
						<?php if( !empty($camera_title) ) echo '<h2 class="section__title">'. $camera_title .'</h2>'; ?>
					</div>
					<div class="tech-video-play">
						<video autoplay muted loop="true" id="camera-video">
							<source src="<?php echo $camera_video_webm; ?>" type="video/webm">
							<source src="<?php echo $camera_video_mp4; ?>" type="video/mp4">
						</video>
						<script> document.getElementById('camera-video').play();</script>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$control_title = get_field('control_title');
				$control_subtitle = get_field('control_subtitle');
				$control_tabs = get_field('control_tabs');
				if( !empty($control_tabs) ) :
			?>
				<section class="control">
					<div class="wrapper">
						<?php if( !empty($control_title) ) echo '<h2 class="section__title">'. $control_title .'</h2>'; ?>
						<?php if( !empty($control_subtitle) ) echo '<h4 class="section__subtitle">'. $control_subtitle .'</h4>'; ?>
						<div class="control__tabs">
							<div class="tab_content">
								<?php foreach ($control_tabs as $tab) : ?>
									<div class="tab_item"><img src="<?php echo $tab['img']; ?>" alt="<?php echo $control_title; ?>"></div>
								<?php endforeach; ?>
							</div>
							<div class="tabs">
								<?php foreach ($control_tabs as $tab) : ?>
									<div class="tab"><?php echo $tab['name']; ?></div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$sowing_title = get_field('sowing_title');
				$sowing_subtitle = get_field('sowing_subtitle');
				$sowing_video_webm = get_field('sowing_video_webm');
				$sowing_video_mp4 = get_field('sowing_video_mp4');
				if( !empty($sowing_video_mp4) || !empty($sowing_video_webm) ) :
			?>
				<section class="sowing">
					<div class="wrapper">
						<?php if( !empty($sowing_title) ) echo '<h2 class="section__title">'. $sowing_title .'</h2>'; ?>
						<?php if( !empty($sowing_subtitle) ) echo '<h4 class="section__subtitle">'. $sowing_subtitle .'</h4>'; ?>
					</div>
					<div class="tech-video-play">
						<video autoplay muted loop="true" id="sowing-video">
							<source src="<?php echo $sowing_video_webm; ?>" type="video/webm">
							<source src="<?php echo $sowing_video_mp4; ?>" type="video/mp4">
						</video>
						<script> document.getElementById('sowing-video').play();</script>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$components = get_field('components');
				if( !empty($components) ):
			?>
				<section class="block-scroll">
					<div class="wrapper-fluid">
						<ul class="block-scroll__items">
							<?php $i = 1; foreach ($components as $component): ?>
								<?php if( $i % 2 != 0 ) : ?>
									<li class="block-scroll__item">
										<div class="block-scroll__item-left">
											<h2 class="block-scroll__title"><?php echo $component['title']; ?></h2>
											<div class="block-scroll__description"><?php echo $component['description']; ?></div>
										</div>
										<div class="block-scroll__item-right">
											<img class="block-scroll__img-item" src="<?php echo $component['img']; ?>" alt="component">
										</div>
									</li>
								<?php else: ?>
									<li class="block-scroll__item">
										<div class="block-scroll__item-left">
											<img class="block-scroll__img-item" src="<?php echo $component['img']; ?>" alt="component">
										</div>
										<div class="block-scroll__item-right">
											<h2 class="block-scroll__title"><?php echo $component['title']; ?></h2>
											<div class="block-scroll__description"><?php echo $component['description']; ?></div>
										</div>
									</li>
								<?php endif; ?>
							<?php $i++; endforeach; ?>
						</ul>
					</div>
				</section>
			<?php endif; ?>


			<?php
				$battery_subtitle = get_field('battery_subtitle');
				$battery_title = get_field('battery_title');
				$battery_description = get_field('battery_description');
				$battery_clarification = get_field('battery_clarification');
				$battery_img = get_field('battery_img');
				if( !empty($battery_title) ) :
			?>
			<section class="battery">
				<div class="wrapper">
					<div class="battery__inner">
						<div class="battery__left">
							<?php if( !empty($battery_subtitle) ) echo '<h4 class="section__subtitle">'. $battery_subtitle .'</h4>'; ?>
							<h2 class="section__title"><?php echo $battery_title; ?></h2>
							<?php if( !empty($battery_description) ) echo '<div class="battery__description">' . $battery_description . '</div>'; ?>
							<?php if( !empty($battery_clarification) ) echo '<div class="battery__explain">' . $battery_clarification . '</div>'; ?>
						</div>
						<?php if( !empty($battery_img) ) : ?>
						<div class="battery__right">
							<img src="<?php echo $battery_img; ?>" alt="<?php echo $battery_title; ?>">
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php endif; ?>


			<?php
				$cta_title = get_field('cta_title');
				if( !empty($cta_title) ) :
			?>
				<section class="cta-text">
					<div class="wrapper">
						<h2 class="cta-text__title">
							<?php echo $cta_title; ?>
						</h2>
					</div>
				</section>
			<?php endif; ?>


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
