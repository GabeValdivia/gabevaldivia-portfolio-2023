<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Gabe_Valdivia
 */

get_header();
?>

	<main id="primary" class="site-main container">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gabe-valdivia' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<div class="row">
					<div class="col-md-12 align-middle text-align-center notFound404">
					<h1>404</h1>
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'gabe-valdivia' ); ?></p>
					</div>
				</div>
				

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->


<?php
get_footer();
