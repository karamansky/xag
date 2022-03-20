<?php
	/*
	 * Template name: Service page(downloads)
	 */
	get_header();



?>
<div class="page-header-wrap download-header-wrap" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>')">
	<div class="wrapper">
		<div class="page-header">
			<h2 class="page-header__title"><?php _e('[:ru]Техническая поддержка[:ro]Suport tehnic[:]'); ?></h2>
		</div>
	</div>
</div>


<?php

	$drone_files = get_field('drone_files');
	$accessories_files = get_field('accessories_files');

	if( !empty($accessories_files) || !empty($drone_files)) :
?>
	<div class="download-wrap">
		<div class="wrapper">
			<div class="download">
				<div class="tabs">
					<?php if( !empty($drone_files)) : ?>
						<span class="tab">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/down_drone.png" alt="">
							<?php _e('[:ru]Дроны и наземная техника[:ro]Dronă și vehicul terestru[:]'); ?>
						</span>
					<?php endif; ?>
					<?php if( !empty($accessories_files)) : ?>
						<span class="tab">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/app/img/accesories.png" alt="">
							<?php _e('[:ru]Аксессуары[:ro]Accesorii[:]'); ?>
						</span>
					<?php endif; ?>
				</div>
				<div class="tab_content">

					<?php if( !empty($drone_files)) : ?>
						<div class="tab_item">
							<h3 class="tab_item__title"><?php _e('[:ru]Документы и руководства[:ro]Documente și manuale[:]'); ?></h3>
							<ul class="download__items">
								<?php foreach ($drone_files as $file) : ?>
									<li class="download__item">
										<div>
											<div class="download__filename"><?php echo $file['name'] ?></div>
											<div class="download__filedate"><?php echo $file['date'] ?></div>
										</div>
										<a href="<?php echo $file['file'] ?>" class="download__filelink"><?php _e('[:ru]Скачать[:ro]Descarca[:]'); ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
					<?php if( !empty($accessories_files)) : ?>
						<div class="tab_item">
							<h3 class="tab_item__title"><?php _e('[:ru]Документы и руководства[:ro]Documente și manuale[:]'); ?></h3>
							<ul class="download__items">
								<?php foreach ($accessories_files as $file) : ?>
									<li class="download__item">
										<div>
											<div class="download__filename"><?php echo $file['name'] ?></div>
											<div class="download__filedate"><?php echo $file['date'] ?></div>
										</div>
										<a href="<?php echo $file['file'] ?>" class="download__filelink"><?php _e('[:ru]Скачать[:ro]Descarca[:]'); ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php
	$faq = get_field('faq');
	if( !empty($faq) ) :
?>
	<div class="faq-wrap">
		<div class="wrapper-980">
			<div class="faq">
				<h2 class="faq__title"><?php _e('[:ru]Часто задаваемые вопросы[:ro]Întrebări frecvente[:]') ?></h2>
				<div class="faq__items">
					<?php $i=1; foreach ($faq as $item) : ?>
					<div class="faq__item">
						<input type="checkbox" id="chck<?php echo $i; ?>" name="chck">
						<label class="faq__item-label" for="chck<?php echo $i; ?>">
							<?php echo $item['question'] ?>
						</label>
						<div class="faq__item-content">
							<?php echo $item['answer'] ?>
						</div>
					</div>
					<?php $i++; endforeach; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php get_footer(); ?>