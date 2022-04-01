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
						<video autoplay muted loop="true">
							<source src="<?php echo $spray_video_webm; ?>" type="video/webm">
							<source src="<?php echo $spray_video_mp4; ?>" type="video/mp4">
						</video>
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
						<video autoplay muted loop="true">
							<source src="<?php echo $ip67_video_webm; ?>" type="video/webm">
							<source src="<?php echo $ip67_video_mp4; ?>" type="video/mp4">
						</video>
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
						<video autoplay muted loop="true">
							<source src="<?php echo $x4_video_webm; ?>" type="video/webm">
							<source src="<?php echo $x4_video_mp4; ?>" type="video/mp4">
						</video>
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


			<section class="camera">
				<div class="wrapper">
					<h4 class="section__subtitle">PSL pilot perspective image</h4>
					<h2 class="section__title">Clearly Display Field Condition and Allows Precision in Complex Environment</h2>
				</div>
				<div class="tech-video-play">
					<video autoplay muted loop="true">
						<source src="<?php echo get_template_directory_uri()?>/app/img/v40-psl-mini.mp4" type="video/mp4">
						<source src="<?php echo get_template_directory_uri()?>/app/img/v40-psl-mini.webm" type="video/webm">
					</video>
				</div>
			</section>


			<section class="control">
				<div class="wrapper">
					<h2 class="section__title">Smart Control with Ease</h2>
					<h4 class="section__subtitle">Quick start with one connection<br>Three operation modes for you to take</h4>
					<div class="control__tabs">
						<div class="tab_content">
							<div class="tab_item"><img src="<?php echo get_template_directory_uri()?>/app/img/v40-control-1.jpg" alt="v40"></div>
							<div class="tab_item"><img src="<?php echo get_template_directory_uri()?>/app/img/v40-control-2.jpg" alt="v40"></div>
							<div class="tab_item"><img src="<?php echo get_template_directory_uri()?>/app/img/v40-control-3.jpg" alt="v40"></div>
						</div>
						<div class="tabs">
							<div class="tab">Standart mode</div>
							<div class="tab">Customised mode</div>
							<div class="tab">Remote control mode</div>
						</div>
					</div>
				</div>
			</section>


			<section class="sowing">
				<div class="wrapper">
					<h2 class="section__title">All in One, Outsmart Your Brain</h2>
					<h4 class="section__subtitle">As the flagship model of XAG V series agricultural drone,<br>the V40 has powerful performance and amazing efficiency</h4>
				</div>
				<div class="tech-video-play">
					<video autoplay muted loop="true">
						<source src="<?php echo get_template_directory_uri()?>/app/img/v40-power.mp4" type="video/mp4">
						<source src="<?php echo get_template_directory_uri()?>/app/img/v40-power.webm" type="video/webm">
					</video>
				</div>
			</section>


			<section class="block-scroll">
				<div class="wrapper-fluid">
					<ul class="block-scroll__items">
						<li class="block-scroll__item">
							<div class="block-scroll__item-left">
								<h2 class="block-scroll__title">
									<img src="<?php echo get_template_directory_uri()?>/app/img/icon/v40-realterra.png" alt="">
									<span>A Smart Companion in Mapping</span>
								</h2>
								<div class="block-scroll__description">
									HD resolution optical image + AI image processing chip<br>
									Fully autonomous aerial photography<br>
									Field boundary recognition, fruit tree identification,<br>
									map stitching, 3D modelling
								</div>
							</div>
							<div class="block-scroll__item-right">
								<img class="block-scroll__img-item block-scroll__img-item--1" src="<?php echo get_template_directory_uri()?>/app/img/v40-revo-1.png" alt="">
							</div>
						</li>
						<li class="block-scroll__item">
							<div class="block-scroll__item-left">
								<img class="block-scroll__img-item block-scroll__img-item--2" src="<?php echo get_template_directory_uri()?>/app/img/v40-revo-2.png" alt="">
							</div>
							<div class="block-scroll__item-right">
								<h2 class="block-scroll__title">
									<img src="<?php echo get_template_directory_uri()?>/app/img/icon/v40-revospray.png" alt="">
									<span>A Smart Companion in Mapping</span>
								</h2>
								<div class="block-scroll__description">
									HD resolution optical image + AI image processing chip<br>
									Fully autonomous aerial photography<br>
									Field boundary recognition, fruit tree identification,<br>
									map stitching, 3D modelling
								</div>
							</div>
						</li>
						<li class="block-scroll__item">
							<div class="block-scroll__item-left">
								<h2 class="block-scroll__title">
									<img src="<?php echo get_template_directory_uri()?>/app/img/icon/v40-revocast.png" alt="">
									<span>A Smart Companion in Mapping</span>
								</h2>
								<div class="block-scroll__description">
									HD resolution optical image + AI image processing chip<br>
									Fully autonomous aerial photography<br>
									Field boundary recognition, fruit tree identification,<br>
									map stitching, 3D modelling
								</div>
							</div>
							<div class="block-scroll__item-right">
								<img class="block-scroll__img-item block-scroll__img-item--3" src="<?php echo get_template_directory_uri()?>/app/img/v40-revo-3.png" alt="">
							</div>
						</li>
					</ul>
				</div>
			</section>


			<section class="battery">
				<div class="wrapper">
					<div class="battery__inner">
						<div class="battery__left">
							<h4 class="section__subtitle">Battery Power</h4>
							<h2 class="section__title">Stronger, Smarter, and Safer</h2>
							<div class="battery__description">
								Lithium polymer battery in 962 Wh large capacity
								Intelligent battery management system to make proper use
								Connection design ensures stable large current output
								IP65 protection, 11min* SuperCharge in water cooling tank
							</div>
							<div class="battery__explain">
								*Laboratory research shows that, under general operating conditions, the GC4000+ Auto SuperCharge Station can fully charge a B13960S Battery within 11 minutes from 30% to 95%. The specific performance may vary depending on the working environment, temperature, user habits, etc. Please use strictly in accordance with the official product guidelines.
							</div>
						</div>
						<div class="battery__right">
							<img src="<?php echo get_template_directory_uri()?>/app/img/v40-battry.png" alt="v40">
						</div>
					</div>
				</div>
			</section>


			<section class="cta-text">
				<div class="wrapper">
					<h2 class="cta-text__title">Agrifuture, Here and Now<br>Are You Ready?</h2>
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
