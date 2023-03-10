<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gabe_Valdivia
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="section gv-single-post-page">
			<div class="row">
				<div class="col-sm-12 col-lg-9">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'gabe-valdivia' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'gabe-valdivia' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>				
				</div>
				<div class="col-sm-12 col-lg-3 p-3 d-none d-lg-block">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>


	</main><!-- #main -->

<?php

get_footer();
