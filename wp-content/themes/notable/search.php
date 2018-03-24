<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Notable
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
            	<div class="row">
                
                	<div class="col-md-12">
                    	
						<?php
                        if ( have_posts() ) : ?>
                
                            <header class="page-heading">
                                <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'notable' ), '<span>' . esc_html(get_search_query()) . '</span>' ); ?></h1>
                            </header><!-- .page-header -->
                
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                
                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', 'search' );
                
                            endwhile;
                
                        else :
                
                            get_template_part( 'template-parts/content', 'none' );
                
                        endif; ?>
                        <?php
							the_posts_pagination( array(
								'mid_size' => 2,
								'prev_text' => '<span class="fa fa-chevron-left"></span>',
								'next_text' => '<span class="fa fa-chevron-right"></span>'
							) ); 
						?>
        			</div>	
					
            	</div>
            </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
