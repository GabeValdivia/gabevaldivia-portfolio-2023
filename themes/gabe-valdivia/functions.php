<?php
/**
 * Gabe Valdivia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gabe_Valdivia
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gabe_valdivia_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Gabe Valdivia, use a find and replace
		* to change 'gabe-valdivia' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gabe-valdivia', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'gabe-valdivia' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'gabe_valdivia_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'gabe_valdivia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gabe_valdivia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gabe_valdivia_content_width', 640 );
}
add_action( 'after_setup_theme', 'gabe_valdivia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gabe_valdivia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gabe-valdivia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gabe-valdivia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gabe_valdivia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gabe_valdivia_scripts() {
	wp_enqueue_style( 'gabe-valdivia-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'gabe-valdivia-main', get_template_directory_uri()  . '/css/main.css' );
	wp_style_add_data( 'gabe-valdivia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'gabe-valdivia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'boostrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'gabevaldivia-script', get_template_directory_uri() . '/js/script.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gabe_valdivia_scripts' );

/**
 * Custom fonts.
 * font-family: 'Merriweather', sans-serif;
 * font-family: 'Ubuntu', sans-serif;
 */
function enqueue_custom_fonts(){
	if(!is_admin()){
		wp_register_style('merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
		wp_register_style('ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
		wp_register_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css');
		wp_enqueue_style('merriweather');
		wp_enqueue_style('ubuntu');
		wp_enqueue_style('bootstrap-icons');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Footer Widget One
 */

 function custom_footer_widget_one() {
	$args = array(
	'id'                => 'footer-widget-col-one',
	'name'              => __('Footer Column One', 'text_domain'),
	'description'       => __('Column One', 'text_domain'),
	'before_title'      => '<h3 class="title">',
	'after_title'       => '</h3>',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>' 
	);
register_sidebar( $args );
}
add_action('widgets_init', 'custom_footer_widget_one');


/**
 * Footer Widget Two
 */
function custom_footer_widget_two() {
	$args = array(
	'id'                => 'footer-widget-col-two',
	'name'              => __('Footer Column Two', 'text_domain'),
	'description'       => __('Column Two', 'text_domain'),
	'before_title'      => '<h3 class="title">',
	'after_title'       => '</h3>',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>' 
	);
register_sidebar( $args );
}
add_action('widgets_init', 'custom_footer_widget_two');


/**
 * Footer Widget Three
 */
function custom_footer_widget_three() {
	$args = array(
	'id'                => 'footer-widget-col-three',
	'name'              => __('Footer Column Three', 'text_domain'),
	'description'       => __('Column Three', 'text_domain'),
	'before_title'      => '<h3 class="title">',
	'after_title'       => '</h3>',
	'before_widget'     => '<div id="%1$s" class="widget %2$s">',
	'after_widget'      => '</div>' 
	);
register_sidebar( $args );
}
add_action('widgets_init', 'custom_footer_widget_three');

/**
 * Blog excerpt set to 20 char length
 */

function gabe_valdivia_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'gabe_valdivia_custom_excerpt_length', 999 );


function new_excerpt_more($more) {
	global $post;
	return '<a class="moretag" 
	href="'. get_permalink($post->ID) . '"> ...Read More</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');