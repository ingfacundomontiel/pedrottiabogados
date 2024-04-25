<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pedrotti_Abogados
 */

if (is_front_page()) {
	$nav_logo_link = '#top';
} else {
	$nav_logo_link = 'https://pedrottiabogados.com';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10906636645"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-10906636645');
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
				<div class="container px-4">
					<a href="<?php echo $nav_logo_link ?>" class="logo-navegacion">
						PEDROTTI ABOGADOS
					</a>
					<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="main-menu">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-principal',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
						?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->