<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pedrotti_Abogados
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<!-- Instagram, Facebook, Mail, WhatsApp y Teléfono	-->
		<div class="footer-social">
			<a class="social-icon" href="#" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="Instagram">
			</a>
			<a class="social-icon" href="#" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="Facebook">
			</a>
			<a class="social-icon" href="#" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt="WhatsApp">
			</a>
			<a class="social-icon" href="#" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.svg" alt="Mail">
			</a>
			<a class="social-icon" href="#" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="Teléfono">
			</a>
		</div>
		<p class="footer-brand">
			PEDROTTI ABOGADOS
		</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>