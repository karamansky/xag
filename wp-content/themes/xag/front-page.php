<?php
	/*
	 * Template name: Home page
	 */
	get_header();

	$video = get_field('video');
	$main_popup_video = get_field('main_popup_video');
?>

	<div class="header">
		<div class="wrapper">
			<div class="header__content">
				<h2 class="header__title"><?php the_title(); ?></h2>
				<?php if(!empty($main_popup_video)) echo '<a href="#main-video-popup" class="header__videoplay" ><i class="play"></i></a>'; ?>
			</div>
		</div>
		<?php if(!empty($video)) echo '<video src="'. $video .'" autoplay muted loop="true" id="main-video"></video>'; ?>
	</div>

	<div style="display: none;">
		<div id="main-video-popup" class="main-video-popup box-modal">
			<div class="box-modal_close arcticmodal-close popup-close">&times;</div>
			<?php if(!empty($main_popup_video)) echo $main_popup_video; ?>
		</div>
	</div>


<?php
	$taxonomies = get_object_taxonomies(array('post_type' => 'solutions'));
	if( !empty($taxonomies) ):
?>
	<section class="catItems-wrap">
		<div class="wrapper">
			<div class="catItems">
				<h2 class="catItems__title section__title"><?php _e('[:ru]Умные решения для сельского хозяйства[:ro]Soluții inteligente pentru agricultură[:]'); ?></h2>
				<?php if( !empty($taxonomies) ): ?>
				<div class="catItems__items">
					<?php
						$taxonomy = $taxonomies[0];
						$terms = get_terms( $taxonomy );
						$term_items = array();
						foreach ($terms as $term) {
							$term_items[] = array(
								'image' => get_field('image', 'term_' . $term->term_id),
								'name' => $term->name,
								'link' => get_term_link($term),
								'sort' => get_field('sort', 'term_' . $term->term_id),
							);
						}
						$term_items = xag_array_sort($term_items, 'sort', SORT_ASC);
						foreach ($term_items as $item) {
					?>
						<a href="<?php echo $item['link']; ?>" class="catItem__item">
							<div class="catItem__img">
								<?php if(!empty( $item['image'])) echo '<img src="'.  $item['image'] .'" alt="'.  $item['name']  .'">'; ?>
							</div>
							<h3 class="catItem__title"><?php echo $item['name']; ?></h3>
						</a>
					<?php }	?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>


<?php
	$infoblocks = get_field('infoblocks');
	if( !empty($infoblocks) ):
?>
<section class="img-blocks-wrap">
	<div class="fluid-wrapper">
		<div class="img-blocks">
			<?php foreach ($infoblocks as $infoblock) : ?>
				<a href="<?php echo $infoblock['link']['url']; ?>" class="img-blocks__item" style="background-image: url('<?php echo $infoblock['image'] ?>');">
					<h3 class="img-blocks__title"><?php echo $infoblock['title'] ?></h3>
					<span><?php _e('[:ru]Подробнее[:ro]Mai mult[:]'); ?> &rarr;</span>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>


<section class="text-block-wrap">
	<div class="wrapper">
		<div class="text-block">
			<div class="text-block__content">
				<?php the_content(); ?>
			</div>
			<div class="text-block__img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/animation_bottom.gif" alt="drone">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>