<?php
/*
 * Template Name: Autopilot
 * Template Post Type: solutions
 */
get_header();

	$model = get_field('model');
	$tech_page = get_field('tech_page');
	$title = get_field('title');


?>

<div class="tech-wrap tech-wrap--white">
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
			<?php
				$title = get_field('header_title');
				$subtitle = get_field('header_subtitle');
				$description = get_field('header_description');
				$background = get_field('header_background');
				if( !empty($background) ){
					$background = $background['url'];
				}else{
					$background = get_the_post_thumbnail_url( get_the_ID(), 'full' );
				}

				if( !empty($title) ) {
			?>
				<header class="block-hero-full" style="background-image: url(<?php echo $background; ?>)">
					<div class="wrapper">
						<div class="block-hero-full__inner">
							<div class="block-hero-full__content">
								<h1 class="block-hero-full__title"><?php echo sanitize_text_field($title) ?></h1>
								<?php if( !empty($subtitle) ) { ?>
									<div class="block-hero-full__subtitle"><?php echo $subtitle; ?></div>
								<?php } ?>
								<?php if( !empty($description) ) { ?>
									<div class="block-hero-full__text">
										<?php echo $description; ?>
									</div>
								<?php } ?>
							</div>
							<a href="#" class="block-hero-full__link"><i class="icon icon-arrow-down--rounded"></i><?php _e('[:ru]SCROLL[:ro]SCROLL[:]'); ?></a>
						</div>
					</div>
				</header>
			<?php } ?>


			<?php
				$block_with_icons_title = get_field('block_with_icons_title');
				$block_with_icons_icons = get_field('block_with_icons_icons');
				$block_with_icons_bottom_image = get_field('block_with_icons_bottom_image');

				if( !empty($block_with_icons_icons) ) {
			?>
				<div class="block-with-icons">
					<div class="wrapper">
						<div class="block-with-icons__inner">
							<?php if( !empty($block_with_icons_title) ) { ?>
								<h2 class="block-with-icons__title"><?php echo sanitize_text_field($block_with_icons_title); ?></h2>
							<?php } ?>
							<div class="block-with-icons__items">
								<?php foreach ($block_with_icons_icons as $block){ ?>
									<div class="block-with-icons__item">
										<?php if( !empty($block['icon']) ) { ?>
											<div class="block-with-icons__img"><img src="<?php echo $block['icon']['url'] ?>" alt="<?php echo sanitize_text_field($block['description']) ?>"></div>
										<?php } ?>
										<?php if( !empty($block['description']) ){ ?>
										<div class="block-with-icons__text">
											<?php echo $block['description'] ?>
										</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
							<?php if( !empty($block_with_icons_bottom_image) ) { ?>
								<div class="block-with-icons__big-img">
									<img src="<?php echo $block_with_icons_bottom_image['url'] ?>" alt="<?php echo sanitize_text_field($block_with_icons_title); ?>">
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>


			<?php
				$block_with_half_width_items_title = get_field('block_with_half_width_items_title');
				$block_with_half_width_items = get_field('block_with_half_width_items');

				if( !empty($block_with_half_width_items) ){
			?>
				<div class="block-with-half-width-items">
					<div class="wrapper">
						<div class="block-with-half-width-items__inner">
							<?php if( !empty($block_with_half_width_items_title) ) { ?>
								<h2 class="block-with-half-width-items__title"><?php echo sanitize_text_field($block_with_half_width_items_title) ?></h2>
							<?php } ?>

							<div class="block-with-half-width-items__items">
								<?php foreach ($block_with_half_width_items as $item) { ?>
									<div class="block-with-half-width-items__item">
										<?php if( !empty($item['title']) ) { ?>
											<h3 class="block-with-half-width-items__item-title"><?php echo sanitize_text_field($item['title']); ?></h3>
										<?php } ?>
										<?php if( !empty($item['image']) ) { ?>
											<div class="block-with-half-width-items__image">
												<img src="<?php echo $item['image']['url'] ?>" alt="<?php echo sanitize_text_field($item['title']); ?>">
											</div>
										<?php } ?>
										<?php if( !empty($item['content']) ){ ?>
											<div class="block-with-half-width-items__content">
												<?php foreach ($item['content'] as $content) { ?>
													<div class="block-with-half-width-items__content-block">
														<?php if( !empty($content['title']) ) { ?>
															<h4 class="block-with-half-width-items__small-title"><?php echo sanitize_text_field($content['title']) ?></h4>
														<?php } ?>
														<?php if( !empty($content['text']) ) { ?>
															<div class="block-with-half-width-items__description">
																<?php echo $content['text']; ?>
															</div>
														<?php } ?>
													</div>
												<?php } ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>


			<?php
				$demo_title = get_field('demo_title');
				$demo_description = get_field('demo_description');
				$demo_main_image = get_field('demo_main_image');
				$demo_items = get_field('demo_items');

				if( !empty($demo_main_image) ) {
			?>
				<div class="autopilot-demo">
					<div class="autopilot-demo-fix">
						<div class="wrapper">
							<div class="autopilot-demo__inner">
								<?php if( !empty($demo_title) ) { ?>
									<h2 class="autopilot-demo__title"><?php echo sanitize_text_field($demo_title) ?></h2>
								<?php } ?>
								<?php if( !empty($demo_description) ){ ?>
									<div class="autopilot-demo__description">
										<?php echo $demo_description ?>
									</div>
								<?php } ?>
								<div class="autopilot-demo__content">
									<div class="autopilot-demo__image">
										<div class="autopilot-demo__tractor" style="background-image: url('<?php echo $demo_main_image['url'] ?>')"></div>
										<div class="autopilot-demo__tractor-plane"></div>
										<div class="autopilot-demo__tractor-wheel"></div>
										<div class="autopilot-demo__tractor-tablet"></div>
									</div>
									<?php if( !empty($demo_items) ){ ?>
										<?php foreach ($demo_items as $item){ ?>
											<div class="autopilot-demo__item autopilot-demo__<?php echo !empty($item['id']) ? $item['id'] : 'plane' ?>">
												<?php if( !empty($item['image']) ) { ?>
													<div class="autopilot-demo__item-img"><img src="<?php echo $item['image']['url'] ?>" alt="<?php echo sanitize_text_field($item['title']) ?>"></div>
												<?php } ?>
												<?php if( !empty($item['title']) ) { ?>
													<h3 class="autopilot-demo__item-title"><?php echo sanitize_text_field($item['title']) ?></h3>
												<?php } ?>
												<?php if( !empty($item['description']) ) { ?>
													<div class="autopilot-demo__item-description">
														<?php echo $item['description'] ?>
													</div>
												<?php } ?>
											</div>
										<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>


			<?php
				$image_items_title = get_field('image_items_title');
				$image_items_description = get_field('image_items_description');
				$image_items_blocks = get_field('image_items_blocks');

				if( !empty($image_items_blocks) ){
			?>
				<div class="block-with-img-items">
					<div class="wrapper">
						<div class="block-with-img-items__inner">
							<?php if( !empty($image_items_title) ) { ?>
								<h2 class="block-with-img-items__title"><?php echo sanitize_text_field($image_items_title) ?></h2>
							<?php } ?>
							<?php if( !empty($image_items_description) ) { ?>
								<div class="block-with-img-items__description">
									<?php echo $image_items_description; ?>
								</div>
							<?php } ?>
							<div class="block-with-img-items__blocks">
								<?php foreach ($image_items_blocks as $block) { ?>
									<div class="block-with-img-item">
										<?php if( !empty($block['image']) ) { ?>
											<div class="block-with-img-item__img">
												<img src="<?php echo $block['image']['url'] ?>" alt="<?php echo $block['description'] ?>">
											</div>
										<?php } ?>
										<?php if( !empty($block['description']) ){ ?>
											<div class="block-with-img-item__description">
												<?php echo $block['description'] ?>
											</div>
										<?php } ?>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>


			<?php
				$left_tabs_title = get_field('left_tabs_title');
				$left_tabs_description = get_field('left_tabs_description');
				$left_tabs_tabs = get_field('left_tabs_tabs');

				if( !empty($left_tabs_tabs) ) {
			?>
				<div class="left-tabs-with-img">
					<div class="wrapper">
						<div class="left-tabs-with-img__inner">
							<?php if( !empty($left_tabs_title) ) { ?>
								<h2 class="left-tabs-with-img__title"><?php echo sanitize_text_field($left_tabs_title); ?></h2>
							<?php } ?>
							<?php if( !empty($left_tabs_description) ) { ?>
								<div class="left-tabs-with-img__description">
									<?php echo $left_tabs_description; ?>
								</div>
							<?php } ?>
							<div class="left-tabs-with-img__tabs">
								<div class="left-tabs-wrapper">
									<div class="tabs">
										<?php foreach ($left_tabs_tabs as $tab){ ?>
											<span class="tab"><?php echo $tab['title'] ?></span>
										<?php } ?>
									</div>
									<div class="tab_content">
										<?php foreach ($left_tabs_tabs as $tab){ ?>
											<div class="tab_item">
												<img src="<?php echo $tab['image']['url'] ?>" alt="<?php echo sanitize_text_field($tab['title']) ?>">
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
