<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notable
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta">
            <?php notable_posted_on(); ?>
        </div><!-- .entry-meta -->
    <?php
    endif; ?>
    
    <?php if(has_post_thumbnail()){ ?>
        <div class="img-container">
            <a href="<?php the_permalink('') ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
        </div>
    <?php } ?>
    
    <div class="archive-wrapper">
        <header class="entry-header">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header><!-- .entry-header -->
    
        <div class="entry-summary">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink('') ?>" class="read_more"><?php esc_html_e( 'Read More', 'notable' ); ?></a><div class="clearfix"></div>
        </div><!-- .entry-summary -->
	</div>
    
</article><!-- #post-## -->
