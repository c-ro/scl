<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notable
 */

?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container single-post">
        
            <div class="row">
                <div class="col-md-12">
                    <?php if(has_post_thumbnail()){ ?>
                        <div class="img-container">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div> 
            
            <div class="row">
            
            	<div class="col-md-12">
                    <div class="inner-wrapper">
                        <div class="col-md-8">
                            
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                                <header class="entry-header">
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                        <div class="entry-meta ">
                                            <?php notable_posted_on(); ?>
                                        </div><!-- .entry-meta -->
                                        <?php
                                    endif; ?>
                        
                                    <?php
                                        if ( is_single() ) {
                                            the_title( '<h1 class="entry-title">', '</h1>' );
                                        } else {
                                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                        }
                                    ?>
                                </header><!-- .entry-header -->
                            
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                   
                                    <?php    
                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'notable' ),
                                            'after'  => '</div>',
                                        ) );
                                    ?>
                                </div><!-- .entry-content -->
                                
                            </article><!-- #post-## -->
                            
                            <?php
                                the_post_navigation();
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                            
                        </div>
                        <div class="col-md-4 sidebar-wrapper">
                            <?php get_sidebar(); ?>
                        </div><div class="clearfix"></div>	
                    </div><!-- inner-wrapper -->
                </div>
                
            </div>
            
        </div>
    </main><!-- #main -->
</div><!-- #primary -->