<?php
	/*
	 * Template Name: Product tech
	 */
	get_header(); ?>

<?php
	$model = get_field('model');
	$param_title = get_field('param_title');
	$param_images = get_field('param_images');
	$parameters = get_field('parameters');
	$description_page = get_field('description_page');
?>
<div class="tech-wrap">
	<div class="wrapper">
		<div class="tech">
			<div class="tech__header">
				<h3 class="tech__header-title"><?php if( !empty($model) ) echo $model; ?></h3>
				<div class="tech__navigation">
					<ul>
						<?php if(!empty($description_page)) : ?>
							<li><a href="<?php echo get_the_permalink($description_page->ID); ?>"><?php _e('[:ru]Описание[:ro]Descriere[:]'); ?></a></li>
						<?php endif; ?>
						<li><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php _e('[:ru]Характеристики[:ro]Caracteristici[:]'); ?></a></li>
					</ul>
				</div>
			</div>

			<div class="tech__content">
				<?php if(!empty($param_title)) echo '<h2 class="tech__title">'. $param_title .'</h2>'; ?>

				<?php if(!empty($param_images)): ?>
				<div class="tech__sizes">
					<?php foreach ($param_images as $param_image) :
							if( !empty($param_image['img']) ):
					?>
							<img src="<?php echo $param_image['img']; ?>" alt="<?php echo $model; ?>">
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>

				<?php if(!empty($parameters)): ?>
				<div class="tech__description">

					<?php foreach ($parameters as $parameter): ?>

						<div class="tech__item">
							<h3 class="tech__item-title"><?php echo $parameter['title']; ?></h3>
							<div class="tech__item-inner">

								<?php
									$i=0;
									foreach ($parameter['params'] as $param) :
									$count = count($parameter['params']);

									if( $i == 0 ) { echo '<div class="tech__item-left">'; }
									if ($i == round($count / 2)) { echo '</div><div class="tech__item-right">'; }
								?>

									<div class="tech__item-param">
										<h4><?php echo $param['title']; ?></h4>
										<div class="tech__item-desc">
											<?php echo $param['param']; ?>
										</div>
									</div>

								<?php $i++; endforeach; ?>
							</div>

							</div>
						</div>

					<?php endforeach; ?>

				</div>
				<?php endif; ?>
			</div>
			<?php if( !empty(get_the_content()) ) : ?>
				<div class="tech-content">
					<?php the_content(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
