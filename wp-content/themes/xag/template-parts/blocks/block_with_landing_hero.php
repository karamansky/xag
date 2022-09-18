<?php
/*
* Block with landing hero
*/
if( !defined( 'ABSPATH' ) ) exit;
if( is_admin() ){
	if( empty($block) ) exit;
	if( GutenbergBlocks::checkForPreview($block) ) return;
}

	$smalltitle = get_field('_block_smalltitle');
	$title = get_field('_block_title');
	$header_video_bg_webm = get_field('_block_header_video_bg_webm');
	$header_video_bg_mp4 = get_field('_block_header_video_bg_mp4');
	$main_popup_video = get_field('_block_main_popup_video');

?>

<div style="display: none;">
	<div id="hero-video-popup" class="main-video-popup box-modal">
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
			<?php if(!empty($smalltitle)) { ?>
				<div class="landing__header-subtitle"><?php echo $smalltitle ?></div>
			<?php } ?>
			<?php if(!empty($title)) { ?>
				<h2 class="landing__header-title"><?php  echo $title; ?></h2>
			<?php } ?>
			<?php if(!empty($main_popup_video)) { ?>
				<a href="#hero-video-popup" class="header__videoplay" data-video="https://www.youtube.com/embed/<?php echo $video_code; ?>"><i class="play"></i></a>
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
