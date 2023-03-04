<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gabe_Valdivia
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<div class="row">
				<div class="col-lg-4 col-md-12 column-gap-5 d-flex flex-column pt-3 pb-3 text-white">
					<?php dynamic_sidebar('footer-widget-col-one'); ?>
				</div>
				<div class="col-lg-4 col-md-12 column-gap-5 d-flex flex-column  pt-3 pb-3 text-white">
					<?php dynamic_sidebar('footer-widget-col-two'); ?>
				</div>
				<div class="col-lg-4 col-md-12 column-gap-5 d-flex flex-column  pt-3 pb-3 text-white">
					<?php dynamic_sidebar('footer-widget-col-three'); ?>
				</div>
			</div>
		</div><!-- .site-info -->
		<div class="copyright-section text-center">
			<p><p>&copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?> &mdash; Gabe Valdivia's Portfolio</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
