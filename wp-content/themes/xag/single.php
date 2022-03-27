<?php get_header();

	$post_id = get_the_ID();
	$category = get_the_category( $post_id );
	$category = $category[0];
	$category_id = $category->cat_ID;

?>

<div class="info-container">
	<div class="single">
		<div class="wrapper">
			<?php if( !empty($category) ): ?>
				<h2 class="single__category-title"><?php echo $category->cat_name; ?></h2>
			<?php endif; ?>

			<div class="single__inner">
				<div class="single__box">
					<div class="single__content">
						<div class="single__box-date"><?php echo get_the_date(); ?></div>
						<h1 class="single__content-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<div class="single__nav">
						<?php
							if( get_previous_post_link() || get_next_post_link()){
								if( get_previous_post_link() ){
									echo get_previous_post_link( '%link', '← '.__('[:ru]Пред.[:ro]Ant.[:]'), 1 );
								}else{
									echo '<a href="#" class="single__nav-prev">&larr; '. __('[:ru]Пред.[:ro]Ant.[:]') .'</a>';
								}

								if( get_next_post_link() ){
									echo get_next_post_link( '%link', __('[:ru]След.[:ro]Urmă.[:]').' →', 1 );
								}else{
									echo '<a href="#" class="single__nav-next">'. __('[:ru]Нет[:ro]Nici unul[:]') .' &rarr;</a>';
								}
							}
							?>
						<?php if( !empty($category_id) ) : ?>
							<a href="<?php echo get_category_link($category_id); ?>" class="single__nav-back">&larr; <?php _e('[:ru]Назад к «'. $category->cat_name .'»[:ro] Înapoi la «'. $category->cat_name .'»[:]') ?></a>
						<?php endif; ?>
					</div>
				</div>

				<?php
					$args = array(
						'orderby' => 'date',
						'category_name' => $category->slug,
					);
					$query = new WP_Query( $args );
					if ($query->have_posts() && $query->have_posts() > 1) :
				?>
					<div class="single__sidebar">
						<h4 class="single__sidebar-title"><?php _e('[:ru]Другие публикации[:ro]Alte publicații[:]'); ?></h4>
						<div class="single__sidebar-posts">

							<?php
									while ($query->have_posts()) :
										$query->the_post();
										// remove duplicate post
										if(get_the_ID() == $post_id) continue;
							?>

								<a href="<?php the_permalink(); ?>" class="single__sidebar-post">
									<h5><?php the_title(); ?></h5>
									<div class="single__sidebar-date"><?php echo get_the_date(); ?></div>
								</a>

							<?php endwhile; ?>


						</div>
					</div>
				<?php endif; ?>
			</div>

		</div>
	</div>
</div>


<?php xag_set_post_view(); ?>
<?php get_footer(); ?>
