<footer class="footer">
	<div class="wrapper">
		<div class="footer__inner">
			<div class="footer__inner-left">
				<div class="footer__menus">
					<?php if(has_nav_menu('footer1')) : ?>
					<div class="footer__menu">
						<h5 class="footer__menu-title"><?php _e('[:ru]О нас[:ro]Despre noi[:]'); ?></h5>
						<ul>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer1',
										'items_wrap'     => '%3$s',
										'container'      => false,
										'depth'          => 1,
										'fallback_cb'    => false,
									)
								);
							?>
						</ul>
					</div>
					<?php endif; ?>
					<?php if(has_nav_menu('footer2')) : ?>
					<div class="footer__menu">
						<h5 class="footer__menu-title"><?php _e('[:ru]Услуги[:ro]Servicii[:]'); ?></h5>
						<ul>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer2',
										'items_wrap'     => '%3$s',
										'container'      => false,
										'depth'          => 1,
										'fallback_cb'    => false,
									)
								);
							?>
						</ul>
					</div>
					<?php endif; ?>
					<?php if(has_nav_menu('footer3')) : ?>
					<div class="footer__menu">
						<h5 class="footer__menu-title"><?php _e('[:ru]События[:ro]Evenimente[:]'); ?></h5>
						<ul>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer3',
										'items_wrap'     => '%3$s',
										'container'      => false,
										'depth'          => 1,
										'fallback_cb'    => false,
									)
								);
							?>
						</ul>
					</div>
					<?php endif; ?>
					<?php if(has_nav_menu('footer4')) : ?>
					<div class="footer__menu">
						<h5 class="footer__menu-title"><?php _e('[:ru]Новости[:ro]Știri[:]'); ?></h5>
						<ul>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer4',
										'items_wrap'     => '%3$s',
										'container'      => false,
										'depth'          => 1,
										'fallback_cb'    => false,
									)
								);
							?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="footer__inner-right">
				<ul class="footer__socials">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'fallback_cb'    => false,
							)
						);
					?>
				</ul>
			</div>
		</div>
		<div class="footer__copy">
			<?php if( !is_front_page() ) { echo '<a href="'. get_home_url() .'">'; } else{ echo '<span>'; }?>
				<img src="<?php echo esc_url( get_theme_mod( 'xag_logo_footer' ) ); ?>" alt="Logo">
			<?php if( !is_front_page() ) { echo '</a>'; } else{ echo '</span>'; }?>
			<?php
				$phone = get_field('settings_phone', 'option');
			?>
			<p>Contactează © <?php echo date('Y'); ?> XAG Moldova All Rights Reserved <?php if( !empty($phone) ) echo '<a href="tel:'. $phone .'">'. $phone .'</a>'; ?></p>
		</div>
	</div>
</footer>

<!--popups-->
<div style="display: none;">

<!--	<div id="main-video-popup" class="main-video-popup box-modal">-->
<!--		<div class="box-modal_close arcticmodal-close">&times;</div>-->
<!--		--><?php //if(!empty($main_popup_video)) echo $main_popup_video; ?>
<!--	</div>-->

</div>

<?php wp_footer(); ?>

</body>
</html>