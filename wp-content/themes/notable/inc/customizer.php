<?php
/**
 * Notable Theme Customizer.
 *
 * @package Notable
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function notable_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	/* color option */
	$wp_customize->add_setting( 'primary_color_setting', array (
		'default'     => '#1bbc9b',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
			'label'    => __( 'Theme Primary Color', 'notable' ),
			'section'  => 'colors',
			'settings' => 'primary_color_setting',
	) ) );
	
}
add_action( 'customize_register', 'notable_customize_register' );

function notable_active_callback() {
	if ( get_theme_mod( 'display_optional_pages_setting', 0 ) ) {
		return true;
	}
	return false;
}

function notable_sanitize_text_field( $str ) {
	return sanitize_text_field( $str );
}

/**
 * Sanitize integer input
 */
if ( ! function_exists( 'notable_sanitize_integer' ) ) :
	function notable_sanitize_integer( $input ) {		
		return absint($input);
	}
endif;

/**
 * Sanitize checkbox
 */

if (!function_exists( 'notable_sanitize_checkbox' ) ) :
	function notable_sanitize_checkbox( $input ) {
		if ( $input != 1 ) {
			return 0;
		} else {
			return 1;
		}
	}
endif;

if ( ! function_exists( 'notable_sanitize_category' ) ){
	function notable_sanitize_category( $input ) {
		$categories = get_categories();
		$cats = array();
		$i = 0;
		foreach($categories as $category){
			if($i==0){
				$default = $category->slug;
				$i++;
			}
			$cats[$category->slug] = $category->name;
		}
		$valid = $cats;

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';

		}
	}
}
	
/**
* Apply Color Scheme
*/
if ( ! function_exists( 'notable_apply_color' ) ) :
  function notable_apply_color() {
	?>
	<style id="color-settings">
	<?php if (get_theme_mod('primary_color_setting') ) { ?>
		a:hover, a:focus, a:active, .entry-meta a:hover, .entry-title a:hover, .site-info a, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, .main-navigation .current-menu-ancestor > a, .main-navigation a:hover, .site-footer a:hover, .social-icons li a:hover .fa, .sidebar-wrapper a:hover, .pagination, .site-title a:hover, .featured-container h2:hover{color:<?php echo esc_attr(get_theme_mod('primary_color_setting')); ?>}
		.read_more, .entry-meta .fa-user, #menu-social ul li:hover, button, html input[type="button"], input[type="reset"], input[type="submit"], .gallery-item:hover .gallery-icon a:before, .desc-container, .fa-chevron-right, .fa-chevron-left, .img-container a:hover:before{background:<?php echo esc_attr(get_theme_mod('primary_color_setting')); ?>;}
	<?php } ?>
	
	</style>
	<?php	  
  }
endif;
add_action( 'wp_head', 'notable_apply_color' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function notable_customize_preview_js() {
	wp_enqueue_script( 'notable_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'notable_customize_preview_js' );
