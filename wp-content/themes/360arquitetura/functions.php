<?php

/**
 * The gutenberg-starter-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gutenberg-starter-theme
 */

if ( ! function_exists( 'gutenberg_starter_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gutenberg_starter_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gutenberg-starter-theme, use a find and replace
		 * to change 'gutenberg-starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gutenberg-starter-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'gutenberg-starter-theme' ),
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
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'_s_custom_background_args',
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
		// Align
		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'gutenberg_starter_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gutenberg_starter_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gutenberg_starter_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_content_width', 0 );

/**
 * Register Google Fonts
 */
function gutenberg_starter_theme_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$notoserif = esc_html_x( 'on', 'Noto Serif font: on or off', 'gutenberg-starter-theme' );

	if ( 'off' !== $notoserif ) {
		$font_families   = array();
		$font_families[] = 'Noto Serif:400,400italic,700,700italic';

		$query_args = array(
			'family' => rawurlencode( implode( '|', $font_families ) ),
			'subset' => rawurlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
define( 'VERSION', wp_rand() );

function gutenberg_starter_theme_scripts() {
	wp_enqueue_style( 'gutenbergbase-style', get_stylesheet_uri(), array(), VERSION );

	wp_enqueue_style( 'gutenberg-starter-themeblocks-style', get_template_directory_uri() . '/css/blocks.css', array(), VERSION );

	// wp_enqueue_style( 'gutenberg-starter-theme-fonts', gutenberg_starter_theme_fonts_url(), array(), VERSION );

	wp_enqueue_script( 'gutenberg-starter-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), VERSION, true );

	wp_enqueue_script( 'gutenberg-starter-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gutenberg_starter_theme_scripts' );


/**
 * Admin Tailwind
 */
// function tailwind_css() {
// wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), VERSION );
// }
// add_action( 'wp_enqueue_scripts', 'tailwind_css' );
// add_action( 'admin_enqueue_scripts', 'tailwind_css' );


/**
 * Admin Styles
 */
function acf_block_scripts() {
	wp_enqueue_style( 'acf-blocks', get_template_directory_uri() . '/css/acf-blocks.css', array(), VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/admin.css', array(), VERSION );
}
add_action( 'admin_enqueue_scripts', 'acf_block_scripts' );
add_action( 'wp_enqueue_scripts', 'acf_block_scripts' );

/**
 * Disable Categories and Tags
 */

// add_action( 'init', 'myprefix_remove_tags' );
// function myprefix_remove_tags() {
// register_taxonomy( 'category', array() );
// register_taxonomy( 'post_tag', array() );
// }


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
if ( defined( 'JETPACK_VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Theme Settings
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Register ACF Options
 */
require get_template_directory() . '/inc/acf-options.php';

/**
 * Register ACF Blocks
 */
require get_template_directory() . '/inc/acf-blocks.php';

/**
 * Allowed Block Types in Guttenberg
 *
 * require get_template_directory() . 'inc/allowed-block-types.php';
 */

/**
 * Default Page Blocks
 */
require get_template_directory() . '/inc/default-templates.php';

/**
 * Disable Guttenberg
 */
// require get_template_directory() . '/inc/disable-guttenberg.php';

/**
 * ACF Update fields when name changes
 */
require get_template_directory() . '/inc/acf-update-fields.php';

/**
 * Diable default blog features
 */
function remove_posts_menu() {
	remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'remove_posts_menu' );
