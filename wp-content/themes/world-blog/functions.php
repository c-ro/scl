<?php
/**
 * Word blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package world-blog
 */

if ( ! function_exists( 'world_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function world_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on world-blog, use a find and replace
		 * to change 'world-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'world-blog', get_template_directory() . '/languages' );

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

         // Add menus.
         register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'world-blog' ),

         ) );
	

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'world_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'world_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function world_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'world_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'world_blog_content_width', 0 );



 function world_blog_widgets_init() {

    /*
     * Widgetler
     */


    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'world-blog' ),
        'id' => 'right_sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'world-blog' ),
        'id' => 'footer_widget_1',
        'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="footer-widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'world-blog' ),
        'id' => 'footer_widget_2',
        'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="footer-widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'world-blog' ),
        'id' => 'footer_widget_3',
        'before_widget' => '<li id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="footer-widgettitle">',
        'after_title' => '</h3>'
    ) );

   
}
add_action( 'widgets_init', 'world_blog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 
function world_blog_scripts() {
	
	/* Js */
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '20151215', true );

    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'world-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'world-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
   
   

   
    /* Styles */

	
	wp_enqueue_style( 'world-blog-style', get_stylesheet_uri() );
		
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'world_blog_scripts' );

/**
 * Custom hedar
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Template tags
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Template Functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Navwalker
 */
require get_template_directory() . '/inc/bootstrap/wp_bootstrap_navwalker.php';
