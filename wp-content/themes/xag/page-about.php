<?php
	/*
	 * Template Name: About page
	 */
get_header();
?>


<div class="page-header-wrap" style="background-image: url('<?php echo get_the_post_thumbnail_url( NULL,'full') ?>')">
	<div class="wrapper">
		<div class="page-header">
			<h2 class="page-header__title"><?php the_title(); ?></h2>
		</div>
	</div>
</div>

<?php
	$text_block = get_field('text_block');
	if( !empty($text_block) ):
?>
<div class="products-wrap">
	<div class="wrapper">
		<div class="about">
			<div class="about__content">
				<?php echo $text_block; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php
	$default_bg =  get_template_directory_uri() . '/app/img/mission-new-bg.png';
	$background = get_field('background');
	$mission = get_field('mission');
	$vision = get_field('vision');

	if(!empty($background)) {
		$default_bg = $background;
	}

?>
<section class="mission-block" style="background-image: url(<?php echo $default_bg; ?>)">
	<div class="wrapper-mini">
		<div class="mission">
			<?php if(!empty($mission)) : ?>
				<div class="mission__item mission--left">
					<h3 class="mission__title"><?php _e('[:ru]Миссия[:ro]Misiune[:]'); ?></h3>
					<div class="mission__content">
						<p><?php echo $mission; ?></p>
					</div>
				</div>
			<?php endif; ?>
			<?php if(!empty($vision)) : ?>
				<div class="mission__item mission--right">
					<h3 class="mission__title"><?php _e('[:ru]Видение[:ro]Viziune[:]'); ?></h3>
					<div class="mission__content">
						<p>
							<?php echo $vision; ?>
						</p>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>


<?php
	$timeline = get_field('timeline');
	$timeline = array_reverse($timeline);
	$timeline_title = get_field('timeline_title');
	if(!empty($timeline)):
?>
	<section class="timeline-wrap">
		<div class="wrapper">
			<?php if(!empty($timeline_title)) echo '<h2 class="section__title">'. $timeline_title .'</h2>' ?>

			<div class="timeline">

				<?php foreach ($timeline as $item) : ?>
					<div class="timeline__item">
						<h3 class="timeline__title"><?php echo $item['year']; ?></h3>
						<div class="timeline__text">
							<?php echo $item['description']; ?>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
<?php endif; ?>


<?php
	$infoblocks_title = get_field('infoblocks_title');
	$infoblock = get_field('infoblock');
	if(!empty($infoblock)) :
?>
<section class="xag-core-wrap">
	<div class="wrapper-fluid">
		<?php if(!empty($infoblocks_title)) echo '<h2 class="section__title">'. $infoblocks_title .'</h2>'; ?>
		<div class="xag-core">
			<?php foreach ($infoblock as $item): ?>
				<div class="xag-core__item" style="background-image: url('<?php echo $item['image'] ?>')">
					<div class="xag-core__item-content">
						<h3 class="xag-core__item-title"><?php echo $item['title'] ?></h3>
						<div class="xag-core__item-text">
							<p><?php echo $item['description'] ?></p>
						</div>
					</div>
					<div class="xag-core__item-popup">
						<div class="xag-core__item-inner">
							<h3 class="xag-core__item-title"><?php echo $item['title'] ?></h3>
							<div class="xag-core__item-text">
								<p><?php echo $item['description'] ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>


<?php $content = get_field('content');
	if( !empty($content) ) :
?>
<section class="about-content">
	<div class="wrapper">
		<div class="about">
			<div class="about__content">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>


<?php
	$partners = get_field('partners');
	if( !empty($partners) ) :
?>
<section class="partners-wrap">
	<div class="wrapper">
		<div class="partners">
			<?php foreach ($partners as $partner): ?>
				<div class="partner__item">
					<img src="<?php echo $partner['image']; ?>" alt="XAG md">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>


<?php get_footer(); ?>
