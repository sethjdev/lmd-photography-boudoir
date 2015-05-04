<?php
/**
 * @package LMD Photography-Boudoir
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="abril h3 blog-title">', '</h1>' ); ?>

		<div class="entry-meta titillium">
			<img src="/wp-content/uploads/2015/03/linda-pic_03.jpg" /><?php lmd_photography_boudoir_posted_on(); ?>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
