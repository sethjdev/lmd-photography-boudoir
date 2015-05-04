<?php
/**
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

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>

<?php get_footer(); ?>
