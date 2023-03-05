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
						<a href="#" class="btn btn-primary btn-lg" role="button">View My Work</a>
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
						<h3>Programming</h3>
						<ul>
							<li>HTML5</li>
							<li>SCSS/CSS</li>
							<li>JavaScript</li>
							<li>PHP</li>
						</ul>
					</div>
					<div class="col-6 col-lg-3">
						<h3>Platforms</h3>
						<ul>
							<li>WordPress</li>
							<li>Shopify</li>
							<li>Wix</li>
							<li>Editor X</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-3">
						<h3>Frameworks</h3>
						<ul>
							<li>React</li>
							<li>Gatsby</li>
							<li>Shopify/Liquid</li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-6 col-lg-3">
						<h3>Languages</h3>
						<ul>
							<li>English (Native)</li>
							<li>Spanish (Fluent)</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="container">
				<div class="row about-section">
					<div class="col-md-12">
						<a href="#" target="_blank"><i class="bi bi-file-earmark-pdf-fill"></i> View Resume PDF</a>
					</div>
				</div>
			</section>
		</div>
		<!-- End About Me -->

		<!-- Portfolio Section -->
		<div class="portfolio-bg-section">
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
		<!-- End Blog Section -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
