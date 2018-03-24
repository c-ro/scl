<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Notable
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
            	<div class="row">
                    <section class="error-404 not-found">
                    
                    	<div class="inner-wrapper">
                            <div class="col-md-9">
                            
                                <header class="page-header">
                                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'notable' ); ?></h1>
                                </header><!-- .page-header -->
                                
                                <div class="page-content">
                                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'notable' ); ?></p>
                                    <?php 
                                        /* translators: %1$s: smiley */
                                        $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'notable' ), convert_smilies( ':)' ) ) . '</p>';
                                        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                                        the_widget( 'WP_Widget_Tag_Cloud' ); 
                                    ?>
                                </div><!-- .page-content -->
                                
                            </div>
            
                             <div class="col-md-3 sidebar-wrapper"><br /><br />
                                    <?php
                                        get_search_form();
                
                                        the_widget( 'WP_Widget_Recent_Posts', array(), 'before_title=<h2 class="widget-title">&after_title=</h2>' );
                
                                        // Only show the widget if site has multiple categories.
                                        if ( notable_categorized_blog() ) :
                                    ?>
                
                                    <div class="widget widget_categories">
                                        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'notable' ); ?></h2>
                                        <ul>
                                        <?php
                                            wp_list_categories( array(
                                                'orderby'    => 'count',
                                                'order'      => 'DESC',
                                                'show_count' => 1,
                                                'title_li'   => '',
                                                'number'     => 10,
                                            ) );
                                        ?>
                                        </ul>
                                    </div><!-- .widget -->
                                    <?php
                                        endif;
                                    ?>
                                </div><div class="clearfix"></div>	
                            </div>

                    </section><!-- .error-404 -->
				</div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
