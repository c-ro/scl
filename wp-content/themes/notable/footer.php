<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Notable
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="footer-widget-container">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4">                    
                        <?php dynamic_sidebar('footer-one-widget'); ?>
                    </div>
                    <div class="col-md-4">                    
                        <?php dynamic_sidebar('footer-two-widget'); ?>
                    </div>
                    <div class="col-md-4">                    
                        <?php dynamic_sidebar('footer-three-widget'); ?>
                    </div>
				</div>
			</div>
        </div>
        
		<div class="site-info">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-12">
                    	
                        <?php 
							wp_nav_menu(
								array(
									'theme_location'  => 'social',
									'container'       => 'div',
									'container_id'    => 'menu-social',
									'container_class' => 'menu',
									'menu_id'         => 'menu-social-items',
									'menu_class'      => 'menu-items',
									'depth'           => 1,
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>',
									'fallback_cb'     => '',
								)
							);
						?>
                        <div class="copy-right">
							<?php if(is_home() && !is_paged()){
                                $theme = wp_get_theme();
                                ?> 
                                <?php esc_html_e('Powered by ', 'notable'); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'notable' ) ); ?>" title="<?php esc_attr_e( 'WordPress' ,'notable' ); ?>"><?php _e('WordPress' ,'notable'); ?></a>
                                <?php esc_html_e(' and ', 'notable'); ?><a href="<?php echo $theme['Author URI'] ?>"><?php _e('Themesforbloggers.com', 'notable'); ?></a>
                            <?php } else{?>
                                <?php echo __('&copy; ', 'notable') . esc_attr( get_bloginfo('name') );  ?>
							<?php } ?>
                        </div>
                        
					</div>
                </div>
            </div>
        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
