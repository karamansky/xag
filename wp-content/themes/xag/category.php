<?php
	get_header();

	$category = get_queried_object();
	$args = array(
		'orderby' => 'date',
		'category_name' => $category->slug
	);
	$query = new WP_Query( $args );

?>

<div class="info-container">
	<div class="category">
		<div class="wrapper">
			<?php if( !empty($category) ) echo '<h2 class="category__title">'. $category->name .'</h2>'; ?>

			<div class="category__items">
				<?php
					if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
					$query->the_post();
				?>
						<a href="<?php the_permalink(); ?>" class="category__item">
							<div class="category__item-img"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
							<div class="category__item-info">
								<h3 class="category__item-title"><?php the_title(); ?></h3>
								<div class="category__item-footer">
									<div class="category__item-date"><?php echo get_the_date(); ?></div>
									<div class="category__item-views"><?php echo xag_get_post_view(); ?></div>
								</div>
							</div>
						</a>
					<?php endwhile; ?>
				<?php else:
						echo get_template_part('template-parts/notfound');
					endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>

			<div class="pagination">
				<?php
					echo paginate_links(
						array(
							'prev_next' => true,
							'prev_text' => __( '&larr;' ),
							'next_text' => __( '&rarr;' ),
						)
					);
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>