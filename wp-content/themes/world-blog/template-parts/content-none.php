<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package world-blog
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'world-blog' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Are you ready to do your first share? <a href="%1$s"> Start here</a>.', 'world-blog' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords', 'world-blog' ); ?></p>
			<?php

		else : ?>

			<p><?php esc_html_e( 'Looks like we can not find what youre looking for. Maybe the search can help.', 'world-blog' ); ?></p>
			<?php

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
