<?php
/**
 * Notable functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Notable
 */

if ( ! function_exists( 'notable_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function notable_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Notable, use a find and replace
	 * to change 'notable' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'notable', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_editor_style();
	add_image_size( 'notabl-widget-post-thumb',  70, 70, true );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'notable' ),
		'social'	=> esc_html__( 'Social', 'notable' ),
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
	add_theme_support( 'custom-background', apply_filters( 'notable_custom_background_args', array(
		'default-color' => 'f4f4f4',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'notable_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function notable_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'notable_content_width', 640 );
}
add_action( 'after_setup_theme', 'notable_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function notable_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'notable' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Default sidebar', 'notable' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer One', 'notable' ),
		'id' => 'footer-one-widget',
		'before_widget' => '<div id="footer-one" class="widget footer-widget">',
		'after_widget' => "</div>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Two', 'notable' ),
		'id' => 'footer-two-widget',
		'before_widget' => '<div id="footer-two" class="widget footer-widget">',
		'after_widget' => "</div>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Three', 'notable' ),
		'id' => 'footer-three-widget',
		'before_widget' => '<div id="footer-three" class="widget footer-widget">',
		'after_widget' => "</div>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'notable_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function notable_scripts() {
	global $wp_scripts;
	global $wp_styles;
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), false ,'screen' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'notable-prettyPhoto', get_template_directory_uri() .'/assets/css/prettyPhoto.css' );
	wp_enqueue_style('notable-googleFonts', '//fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,700,700i,800,900');
	wp_enqueue_style( 'notable-ie-style', get_stylesheet_directory_uri() . "/assets/css/ie.css", array()  );
    $wp_styles->add_data( 'notable-ie-style', 'conditional', 'IE' );
	wp_enqueue_style( 'notable-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'notable-prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.min.js', array('jquery'));
	wp_enqueue_script( 'notable-custom-js', get_template_directory_uri() . '/js/custom.js', array() );
	wp_enqueue_script( 'notable-ie-responsive-js', get_template_directory_uri() . '/js/ie-responsive.min.js', array() );
	$wp_scripts->add_data( 'notable-ie-responsive-js', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'notable-ie-shiv', get_template_directory_uri() . "/js/html5shiv.min.js");
	$wp_scripts->add_data( 'notable-ie-shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'notable-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'notable-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'notable_scripts' );

function notable_custom_title($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo esc_html($title);
		else
			return $title;
	}
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

 /**
 * Custom template tags for this theme.
 */
 require get_template_directory() . '/inc/widget.php';
 
 /**
 * pagination.
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

