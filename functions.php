<?php
/**
 * LMD Photography-Boudoir functions and definitions
 *
 * @package LMD Photography-Boudoir
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'lmd_photography_boudoir_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lmd_photography_boudoir_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on LMD Photography-Boudoir, use a find and replace
	 * to change 'lmd-photography-boudoir' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'lmd-photography-boudoir', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'lmd-photography-boudoir' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lmd_photography_boudoir_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // lmd_photography_boudoir_setup
add_action( 'after_setup_theme', 'lmd_photography_boudoir_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function lmd_photography_boudoir_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'lmd-photography-boudoir' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'lmd_photography_boudoir_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lmd_photography_boudoir_scripts() {
	wp_enqueue_style( 'lmd-photography-boudoir-style', get_stylesheet_uri() );

	wp_enqueue_style( 'lmd-photography-boudoir-custom', get_template_directory_uri() . '/css/custom.css' );

	wp_enqueue_style( 'lmd-photography-boudoir-foundation', get_template_directory_uri() . '/css/foundation.css' );

	wp_enqueue_script( 'lmd-photography-boudoir-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'lmd-photography-boudoir-jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '20120207', true );

	wp_enqueue_script( 'lmd-photography-boudoir-app', get_template_directory_uri() . '/js/app.js', array(), '20120208', true );

	wp_enqueue_script( 'lmd-photography-boudoir-superbox', get_template_directory_uri() . '/js/superbox.js', array(), '20120209', true );

	wp_enqueue_script( 'lmd-photography-boudoir-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lmd_photography_boudoir_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
 * Enable Featured Image Blog
 */
add_theme_support( 'post-thumbnails' ); 
