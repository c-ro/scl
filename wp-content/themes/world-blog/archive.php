<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package world-blog
 */

get_header(); ?>

<div class="top-header">
   <div class="container">
      <div class="row">
         <div class="col-md-4">

		<?php
		if ( have_posts() ) : ?>


				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>

                 </div>
            </div>
      </div>
 </div>
 
 
 <div class="content-excerpt">
      <div class="container">
           <div class="row">
               <div class="col-md-8">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
         </div>
          <?php get_sidebar(); ?>  
       </div>
    </div>
 </div>

<?php
get_footer(); 
