<?php
/**
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package LMD Photography-Boudoir
 */

get_header(); ?>

<div class="row">
	<div class="medium-3 columns">
		<?php get_sidebar(); ?>
	</div>
	<div class="medium-9 columns">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="h1 abril text-center">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description titillium text-center">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php get_footer(); ?>
