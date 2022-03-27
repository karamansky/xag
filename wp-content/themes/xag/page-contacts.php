<?php
	/*
	 * Template name: Contacts
	 */
	get_header();

	$phone_text = __('[:ru]Телефон[:ro]Telefon[:]');
	$address = get_field('settings_address', 'option');
	$phone1 = get_field('settings_phone', 'option');
	$phone2 = get_field('settings_phone2', 'option');
	$email = get_field('settings_email', 'option');
	$map_bg = get_field('map_bg');
?>

<div class="contacts">
	<div class="contacts__header" style="background-image: url(<?php if(!empty($map_bg)) echo $map_bg; ?>);">
		<div class="wrapper">
			<h1 class="contacts__title"><?php _e('[:ru]Здравствуйте[:ro]Buna ziua[:]'); ?></h1>
			<div class="contacts__subtitle"><?php the_title(); ?></div>

			<?php if( !empty($address) ) : ?>

			<div class="contacts__address-title">
				<p><b><?php _e('[:ru]Адрес[:ro]Adresa[:]'); ?>:</b></p>
				<p><?php echo $address; ?></p>
			</div>

			<?php endif; ?>

			<div class="contacts__text">
				<p> <?php _e('[:ru]Хотите узнать больше о наших продуктах и услугах? Мы хотели бы услышать от вас![:ro]Doriți să aflați mai multe despre produsele și serviciile noastre? Am dori să auzim de la tine![:]'); ?></p>
			</div>
		</div>
	</div>
	<div class="contacts__items">
		<div class="wrapper">
			<div class="contacts__items-inner">
				<?php if( !empty($email) ) : ?>
					<div class="contacts__item">
						<div class="contacts__item-title">Email</div>
						<div class="contacts__item-info"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
					</div>
				<?php endif; ?>
				<?php if( !empty($phone1) ) : ?>
					<div class="contacts__item">
						<div class="contacts__item-title"><?php echo $phone_text; ?></div>
						<div class="contacts__item-info"><a href="tel:<?php echo $phone1; ?>"><?php echo $phone1; ?></a></div>
					</div>
				<?php endif; ?>
				<?php if( !empty($phone2) ) : ?>
					<div class="contacts__item">
						<div class="contacts__item-title"><?php echo $phone_text; ?></div>
						<div class="contacts__item-info"><a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a></div>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>