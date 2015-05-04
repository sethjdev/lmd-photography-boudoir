<?php
/**
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LMD Photography-Boudoir
 */
?>

<section class="no-results not-found">
	<div class="row">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Nothing Found', 'lmd-photography-boudoir' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'lmd-photography-boudoir' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lmd-photography-boudoir' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lmd-photography-boudoir' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->
