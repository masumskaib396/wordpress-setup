<?php
/**
 * sakib functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sakib
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sakib_setup' ) ) :

	function sakib_setup() {
	
		load_theme_textdomain( 'sakib', get_template_directory() . '/languages' );

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
				'heder-menu'  => esc_html__( 'Header Menu', 'sakib' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'sakib' ),
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
				'sakib_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'sakib_setup' );

function sakib_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sakib_content_width', 640 );
}
add_action( 'after_setup_theme', 'sakib_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sakib_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sakib' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sakib' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sakib_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sakib_scripts() {

	//enqueue style
	wp_enqueue_style('sakib-googel-fonts','//fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet' );
	wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css') );
	wp_enqueue_style('fontawesome', get_theme_file_uri('assets/css/fontawesome.css') );
	wp_enqueue_style('carousel', get_theme_file_uri('assets/css/owl.carousel.min.css') );
	wp_enqueue_style('sakib-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('responsive', get_theme_file_uri('assets/css/responsive.css') );


	//enqueue script
	wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.bundle.min.js'), ['jquery'], '1.0', true ); 
	wp_enqueue_script('carousel', get_theme_file_uri('assets/js/owl.carousel.min.js'), ['jquery'], '1.0', true ); 
	wp_enqueue_script('wow', get_theme_file_uri('assets/js/wow.min.js'), ['jquery'], '1.0', true ); 
	wp_enqueue_script('sakib-main', get_theme_file_uri('assets/js/main.js'), ['jquery'], time(), true ); 
	
}
add_action( 'wp_enqueue_scripts', 'sakib_scripts' );


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/helper-function.php';
require get_template_directory() . '/inc/cpt.php';
require get_template_directory() . '/inc/elementor-widget/index.php';








