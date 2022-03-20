<footer class="footer">
	<div class="wrapper">
		<div class="footer__inner">
			<div class="footer__inner-left">
				<div class="footer__menus">
					<div class="footer__menu">
						<h5 class="footer__menu-title">About</h5>
						<ul>
							<li class="footer__menu-item"><a href="#">About XAG</a></li>
							<li class="footer__menu-item"><a href="#">About XAG</a></li>
							<li class="footer__menu-item"><a href="#">About XAG</a></li>
							<li class="footer__menu-item"><a href="#">About XAG</a></li>
							<li class="footer__menu-item"><a href="#">About XAG</a></li>
						</ul>
					</div>
					<div class="footer__menu">
						<h5 class="footer__menu-title">Services</h5>
						<ul>
							<li class="footer__menu-item"><a href="#">Agricultural UAS</a></li>
							<li class="footer__menu-item"><a href="#">Agriculture IoT System</a></li>
							<li class="footer__menu-item"><a href="#">Agriculture IoT System</a></li>
							<li class="footer__menu-item"><a href="#">Agriculture IoT System</a></li>
						</ul>
					</div>
					<div class="footer__menu">
						<h5 class="footer__menu-title">Events</h5>
						<ul>
							<li class="footer__menu-item"><a href="#">XAAC 2021</a></li>
							<li class="footer__menu-item"><a href="#">XAAC 2019</a></li>
							<li class="footer__menu-item"><a href="#">XAAC 2018</a></li>
							<li class="footer__menu-item"><a href="#">XAAC 2017</a></li>
						</ul>
					</div>
					<div class="footer__menu">
						<h5 class="footer__menu-title">News</h5>
						<ul>
							<li class="footer__menu-item"><a href="#">Agricultural UAS</a></li>
							<li class="footer__menu-item"><a href="#">Agriculture IoT System</a></li>
							<li class="footer__menu-item"><a href="#">Agriculture IoT System</a></li>
							<li class="footer__menu-item"><a href="#">Agriculture IoT System</a></li>
						</ul>
					</div>
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
			Contactează © <?php echo date('Y'); ?> XAG Moldova All Rights Reserved + 373 79 131317
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