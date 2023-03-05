<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gabe_Valdivia
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Hero -->
		<div class="hero-bg-section">
			<section class="container site-hero-section">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-6 col-lg-8">
						<h1>Frontend Web Developer</h1>
						<p>I do freelance and contract work for various agencies and small businesses. My specialty is frontend Web Development on various platfroms ( WordPress, Shopify, Wix/EditorX, and Squarespce).</p>
						<a href="#latest-projects" class="btn btn-primary btn-lg" role="button">View My Work</a>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 text-align-center d-none d-md-block">
						<img class="img-fluid text-light" src="<?php echo get_template_directory_uri(); ?>/img/profile-pic.webp" alt="profile picture of Gabe Valdivia" />
					</div>
				</div>
			</section>
		</div>
        <!-- Hero end -->

		<!-- About Me -->
		<div class="about-bg-section">
			<section class="container">
				<div class="row about-section">
					<div class="col-md-12">
						<h2>About Me</h2>
						<p>I have 9 years of professional experience under my belt. I’m a skilled frontend web developer and SEO specialist with Google certifications in Digital Marketing & Google Tag Manager. In the course of my career I’ve worked with several fantastic marketing agencies in across the world and in 2 languages.</p>
					</div>
				</div>
			</section>
			<section class="container">
				<div class="row about-section">
					<div class="col-xs-6 col-md-6 col-lg-3">
						<?php dynamic_sidebar('about-widget-col-one'); ?>
					</div>
					<div class="col-6 col-lg-3">
					<?php dynamic_sidebar('about-widget-col-two'); ?>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-3">
					<?php dynamic_sidebar('about-widget-col-three'); ?>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-3">
					<?php dynamic_sidebar('about-widget-col-four'); ?>
					</div>
				</div>
			</section>
			<section class="container">
				<div class="row about-section">
					<div class="col-md-12">
						<a href="https://www.linkedin.com/in/gabriel-s-valdivia/" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn Profile</a>
					</div>
				</div>
			</section>
		</div>
		<!-- End About Me -->

		<!-- Portfolio Section -->
		<div class="portfolio-bg-section" id="latest-projects">
			<section class="container">
				<div class="row portfolio-section">
					<div class="col-md-12">
						<h2>Latest Projects</h2>
						<p>I have 9 years of professional experience under my belt. I’m a skilled frontend web developer and SEO specialist with Google certifications in Digital Marketing & Google Tag Manager. In the course of my career I’ve worked with several fantastic marketing agencies in across the world and in 2 languages.</p>
					</div>
				</div>
			</section>
			<section class="container">
				<div class="row portfolio-section">
					<div class="col-12">
						<!--Projects grid-->
					</div>
				</div>
			</section>
			<section class="container">
				<div class="row portfolio-section">
					<div class="col-md-12">
						<a href="#" target="_blank"><i class="bi bi-github"></i> View GitHub Projects</a>
					</div>
				</div>
			</section>
		</div>
		<!-- End Portfolio Section -->

		<!-- CTA Section -->
		<div class="gvcta-bg-section">
			<section class="container">
				<div class="row gvcta-section">
					<div class="col-md-12">
						<p>Let’s work together. I’m available for contract or freelance work. Whether you need a skilled WordPress, Wix, Editor X, Shopify or plain CSS & HTML developer. I’m happy to step in and help out.</p>
						<a href="#" class="btn btn-ghostWhite btn-lg" role="button">My Resume</a>
					</div>
				</div>
			</section>
		</div>		
		<!-- End CTA Section -->

		<!-- Blog Section -->
		<div class="gvblog-bg-section">
			<section class="container">
				<div class="row gvblog-section">
					<div class="col-md-12">
						<h2>Blog</h2>
					</div>
				</div>
				<div class="row gvblog-section">
					<!-- <div class="col-md-12"> -->
						<!--Blog loop-->
						<?php 
						// the query
						$the_query = new WP_Query( array(
							'category_name' => 'recent',
							'posts_per_page' => 3,
						)); 
						?>

						<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-4 col-sm-12 grid gap-0 gap-3">
								<?php the_post_thumbnail(); ?>
								<h3><?php the_title(); ?></h3>
								<small>On <?php the_time('F jS, Y'); ?></small>
								<p><?php the_excerpt(); ?></p>
							</div>
							
							

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

						<?php else : ?>
						<p><?php __('No News'); ?></p>
						<?php endif; ?>
					<!-- </div> -->
				</div>
			</section>
		</div>			
		<!-- End Blog Section -->

	</main><!-- #main -->

<?php
get_footer();
