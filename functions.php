<?php
/**
 * mannering-woocommerce-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mannering-woocommerce-child
 */

if ( ! defined( 'MANNERING_WOOCOMMERCE_CHILD_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MANNERING_WOOCOMMERCE_CHILD_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mannering_woocommerce_child_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mannering_woocommerce_child_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mannering-woocommerce-child, use a find and replace
		 * to change 'mannering-woocommerce-child' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mannering-woocommerce-child', get_template_directory() . '/languages' );

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

		// set post thumbnail size.
		set_post_thumbnail_size( 100, 100, true );

		// Create three new image sizes.
		add_image_size( 'featured-image', 783, 9999 );

		// This theme styles the visual editor to resemble the theme style.
		$font_url = '//https://fonts.googleapis.com/css?family=Poppins';
		add_editor_style( array( 'css/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );
		add_theme_support( 'editor-styles' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'shopper'   => esc_html__( 'Shopper', 'mannering-woocommerce-child' ),
				'main'      => esc_html__( 'Main', 'mannering-woocommerce-child' ),
				'secondary' => esc_html__( 'Secondary', 'mannering-woocommerce-child' ),
				'mobile'    => esc_html__( 'Mobile', 'mannering-woocommerce-child' ),
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
				'mannering_woocommerce_child_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => get_template_directory_uri() . '/images/bg.jpg',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo.
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

		// enable block editor styles.
		add_theme_support( 'wp-block-styles' );

		// enable wide alignments.
		add_theme_support( 'align-wide' );

		// allow embeds to be responsive.
		add_theme_support( 'responsive_embeds' );

	}
endif;
add_action( 'after_setup_theme', 'mannering_woocommerce_child_setup' );

// remove version from head.
remove_action( 'wp_head', 'wp_generator' );

// remove version from rss.
add_filter( 'the_generator', '__return_empty_string' );

// remove version from scripts and styles.
function mannering_woocommerce_child_remove_version_scripts_styles( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'mannering_woocommerce_child_remove_version_scripts_styles', 9999 );
add_filter( 'script_loader_src', 'mannering_woocommerce_child_remove_version_scripts_styles', 9999 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mannering_woocommerce_child_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mannering_woocommerce_child_content_width', 640 );
}
add_action( 'after_setup_theme', 'mannering_woocommerce_child_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mannering_woocommerce_child_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mannering-woocommerce-child' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mannering-woocommerce-child' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mannering_woocommerce_child_widgets_init' );

/**
 * Google fonts.
 */
function mannering_woocommerce_child_add_google_fonts() {
	wp_enqueue_style( 'storefront-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins', '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'mannering_woocommerce_child_add_google_fonts' );

/**
 * Block Editor Styling.
 */
function mannering_woocommerce_child_block_editor_fonts() {
	wp_enqueue_style( 'mannering-woocommerce-child-block-editor-fonts', 'https://fonts.googleapis.com/css?family=Poppins', array(), CLASHVIBES_VERSION );

}
add_action( 'enqueue_block_editor_assets', 'mannering_woocommerce_child_block_editor_fonts' );

/**
 * Enqueue scripts and styles.
 */
function mannering_woocommerce_child_scripts() {
	wp_enqueue_style( 'mannering-woocommerce-child-style', get_stylesheet_uri(), array(), MANNERING_WOOCOMMERCE_CHILD_VERSION );
	wp_style_add_data( 'mannering-woocommerce-child-style', 'rtl', 'replace' );

	wp_enqueue_style( 'woocommerce-css', get_stylesheet_directory_uri() . '/woocommerce.css', false, MANNERING_WOOCOMMERCE_CHILD_VERSION, 'all' );

	wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', false, MANNERING_WOOCOMMERCE_CHILD_VERSION, 'all' );

	wp_enqueue_script( 'mannering-woocommerce-child-navigation', get_template_directory_uri() . '/js/navigation.js', array(), MANNERING_WOOCOMMERCE_CHILD_VERSION, true );

	wp_enqueue_script( 'mannering-woocommerce-child-index', get_template_directory_uri() . '/js/index.js', array( 'jquery' ), MANNERING_WOOCOMMERCE_CHILD_VERSION, true );

	wp_enqueue_script( 'mannering-woocommerce-child-navigation', get_template_directory_uri() . '/js/navigation.js', array(), MANNERING_WOOCOMMERCE_CHILD_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mannering_woocommerce_child_scripts' );


/**
 * Front page script function.
 *
 * @return void
 */
function mannering_woocommerce_child_front_scripts() {

	if ( is_front_page() ) {

		wp_enqueue_script( 'bx-slider-js', get_stylesheet_directory_uri() . '/js/bxslider-4-master/dist/jquery.bxslider.js', array( 'jquery' ), MANNERING_WOOCOMMERCE_CHILD_VERSION, true );

		wp_enqueue_style( 'bx-slider-css', get_stylesheet_directory_uri() . '/js/bxslider-4-master/dist/jquery.bxslider.css', false, MANNERING_WOOCOMMERCE_CHILD_VERSION, 'all' );

		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), MANNERING_WOOCOMMERCE_CHILD_VERSION, true );

	}
}
add_action( 'wp_enqueue_scripts', 'mannering_woocommerce_child_front_scripts' );


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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
