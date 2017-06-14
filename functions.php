<?php
/**
 * Layla functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Layla
 */

if ( ! function_exists( 'layla_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function layla_setup() {
    
    
        if( !defined( 'LAYLA_VERSION' ) ) :
            define('LAYLA_VERSION', '1.2.9');
        endif;
    
        
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Layla, use a find and replace
	 * to change 'layla' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'layla', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'layla' ),
		'footer' => esc_html__( 'Footer Menu', 'layla' ),
            
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
                'gallery',
	) );

        add_theme_support( 'custom-logo' );
        
        add_theme_support( 'custom-header', array( 
            'default-image'          => get_template_directory_uri() . '/inc/images/layla.jpg',
            'width'                  => 1200,
            'height'                 => 800,
            'flex-height'            => true,
            'flex-width'             => true,
            'uploads'                => true,
            'random-default'         => false,
            'header-text'            => false,
            'default-text-color'     => '',
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
            'video'                  => false
        ) );
        
        register_default_headers( array(
            'layla' => array(
                'url'   => get_template_directory_uri() . '/inc/images/layla.jpg',
                'thumbnail_url'   => get_template_directory_uri() . '/inc/images/layla.jpg',
                'description'   => __('Layla', 'layla' )
            )
        ) );

}
endif; // layla_setup
add_action( 'after_setup_theme', 'layla_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function layla_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'layla_content_width', 1170 );
}
add_action( 'after_setup_theme', 'layla_content_width', 0 );


/**
 * Implement the Custom Header feature.
 */

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load the theme functions
 */
require get_template_directory() . '/inc/layla/layla.php';

require get_template_directory() . '/inc/tgm.php';
