<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package world-blog
 */

?>

<?php get_template_part('inc/widgets/footer','widgets'); ?>


	<footer id="colophon" class="copyright text-center">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'world-blog' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'world-blog' ), 'WordPress' );
			?></a>
	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
