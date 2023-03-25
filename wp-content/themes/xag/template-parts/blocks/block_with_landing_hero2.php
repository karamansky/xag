<?php
	/*
	* Block with landing hero2
	*/
	if( !defined( 'ABSPATH' ) ) exit;
	if( is_admin() ){
		if( empty($block) ) exit;
		if( GutenbergBlocks::checkForPreview($block) ) return;
	}

	$title = get_field('_block_title');
	$subtitle = get_field('_block_subtitle');
	$description = get_field('_block_description');
	$background = get_field('_block_background');
	if( empty($background) ){
		$background = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	}

	if( empty($title) && empty($description) ) return false;
?>
<header class="block-hero-full" style="background-image: url(<?php echo $background; ?>)">
	<div class="wrapper">
		<div class="block-hero-full__inner">
			<div class="block-hero-full__content">
				<?php if( !empty($title) ){ ?>
					<h1 class="block-hero-full__title"><?php echo sanitize_text_field($title) ?></h1>
				<?php } ?>
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