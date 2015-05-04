<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LMD Photography-Boudoir
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'lmd-photography-boudoir' ); ?></a>
	<div id="pre-header">
		<div class="row">
			<div class="medium-12 columns">
				<a href="/contact-me" class="social-button"><p class="titillium">Book Now</p></a>
				<a href="https://instagram.com/lmdphotographycom" target="blank"><img src="/wp-content/uploads/2015/03/social-icons_07.png" class="social-icon"/></a>
				<a href="https://www.pinterest.com/lmdphotography" target="blank"><img src="/wp-content/uploads/2015/03/social-icons_05.png" class="social-icon"/></a>
				<a href="https://www.facebook.com/lmdphotographyboudoir" target="blank"><img src="/wp-content/uploads/2015/03/social-icons_03.png" class="social-icon"/></a>
			</div>
		</div>
	</div>
	<div class="mobile-header">
		<div class="row">
			<div class="small-12 columns">
				<div class="mobile-logo"><a href="/"><img src="/wp-content/uploads/2015/03/mobile-logo_13.png" /></a></div>
			</div>
		</div>
		<div class="row">
			<p>Navigation</p>
			<div class="small-12 columns"
				<div id="mobile-menu"></div>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<div class="sticky-bg" style="position:fixed;width:100%;height:60px;background-color:#46263d;top:0"></div>
		<div class="row">
			<div id="sticky_navigation">
				<div class="columns medium-3">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/uploads/2015/03/lmd-main-logo_03.png"></a><div class="purp-triangle"></div></h1>
				</div>
				<div class="columns medium-9">
					<nav id="site-navigation" class="main-navigation titillium" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> 
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div style="height: 55px"></div>