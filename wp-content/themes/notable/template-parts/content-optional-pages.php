<?php

/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notable
 */

?>
<div class="col-md-6">	
    <div class="featured-container">
       	<a href="<?php the_permalink();?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
		<?php if(has_post_thumbnail()){ ?>
            <div class="featured-image">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php } ?> 
        <div class="about-entry">
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink();?>" class="btn btn-lg read_more"><?php esc_html_e( 'Read More', 'notable' ); ?></a>
        </div>
        
    </div>
</div>