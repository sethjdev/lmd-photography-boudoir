<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package LMD Photography-Boudoir
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function lmd_photography_boudoir_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'lmd_photography_boudoir_jetpack_setup' );
