<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gabe_Valdivia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gabe-valdivia' ); ?></a>
	<header id="masthead" class="site-header">

	<nav class="navbar navbar-custom fixed-top justify-content-center">
		<div class="container-xxl">
			<a class="navbar-brand gv-site-name" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Portfolio Links</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<!-- WP Nav -->
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'navbar-nav d-flex justify-content-start flex-grow-1 pe-3'
						)
					);
				?>
				<!-- End WP Nav -->
				
				<!-- Contact Me -->
				<div class="navbar-nav d-flex justify-content-start flex-grow-1 pe-3 gv-follow-me ">
					<h5>Contact Me</h5>
					<ul>
						<li><a href="tel:523330348207" target="_blank"><i class="bi bi-telephone-fill"></i> +52 33 3034 8207</a></li>
						<li><a href="mailto:hey@gabevaldivia.com" target="_blank"><i class="bi bi-envelope-at-fill"></i> hey@gabevaldivia.com</a></li>
						<li><a href="https://goo.gl/maps/GWjtFoTi7Q9jeR6x6" target="_blank"><i class="bi bi-geo-alt-fill"></i> Tlaquepaque, Jalisco, Mexico</a></li>
					</ul>
				</div>
				<!-- End Contact Me -->

				<!-- Follow Me -->
				<div class="navbar-nav d-flex justify-content-start flex-grow-1 pe-3 gv-follow-me ">
					<h5>Follow Me</h5>
					<ul>
						<li><a href="https://www.linkedin.com/in/gabriel-s-valdivia/" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
						<li><a href="https://github.com/GabeValdivia" target="_blank"><i class="bi bi-github"></i> GitHub</a></li>
						<li><a href="https://www.youtube.com/channel/UCCeYJwtavwrnAnFKLrHGFgA" target="_blank"><i class="bi bi-youtube"></i> YouTube</a></li>
					</ul>
				</div>
				<!-- End Follow Me -->
			</div>
		</div>
	</nav>

	</header><!-- #masthead -->
