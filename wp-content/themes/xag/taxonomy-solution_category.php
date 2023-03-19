<?php
	/*
	 * Template Name: Archive product
	 */
	get_header();

	$term = get_term_by( 'id', get_queried_object()->term_id, 'solution_category');
	$term_slug = $term->slug;
	$term_name = $term->name;
	$term_description = $term->description;

?>

	<div class="page-header-wrap" style="background-image: url('<?php echo get_template_directory_uri() ?>/app/img/products-header-bg.jpg')">
		<div class="wrapper">
			<div class="page-header">
				<h2 class="page-header__title"><?php if(!empty($term_name)) echo $term_name; ?></h2>
			</div>
		</div>
	</div>

<?php
	$tax_post_args = array(
		'post_type' => 'solutions',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'order' => 'ASC',
		'tax_query' => array(
			array(
				'post_status' => 'publish',
				'taxonomy' => 'solution_category',
				'field' => 'slug',
				'terms' => $term_slug,
			),
		),
	);

	$tax_post_qry = new WP_Query($tax_post_args);
	if ($tax_post_qry->have_posts()) :
?>
	<div class="products-wrap">
		<div class="wrapper">
			<div class="products">
				<?php
					while ($tax_post_qry->have_posts()) : $tax_post_qry->the_post(); ?>

					<div class="products__item">
						<div class="products__item-img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
						<a href="<?php the_permalink(); ?>" class="products__item-title"><?php the_title(); ?></a>
						<div class="products__item-subtitle"><?php the_excerpt(); ?></div>
						<a href="<?php the_permalink(); ?>" class="products__item-button"><?php _e('[:ru]Подробнее[:ro]Detaliu[:]'); ?></a>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php
	else :
		echo get_template_part('template-parts/notfound');
	endif;
?>
<?php
	get_footer();
?>