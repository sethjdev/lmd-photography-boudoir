<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="row">
	<div class="medium-4 columns">
		<div class="contact-bg tanbg">
			<h3 class="abril h3">Phone</h3>
			<a href="tel:810-220-3354"><p class="sidebar-contact titillium">810.220.3354</h3></a>
			<h3 class="abril h3">Email</h3>
			<a href="mailto:lindamd@comcast.net"><p class="sidebar-contact titillium">lindamd@comcast.net</h3></a>
			<h3 class="abril h3">Social</h3>
			<div class="soc-icons center">
				<a href="https://www.facebook.com/lmdphotographyboudoir" target="blank"><img src="/wp-content/uploads/2015/03/social-icons-lg_03.png"></a>
				<a href="https://www.pinterest.com/lmdphotography" target="blank"><img src="/wp-content/uploads/2015/03/social-icons-lg_05.png" class="icon-margin"></a>
				<a href="https://instagram.com/lmdphotographycom" target="blank"><img src="/wp-content/uploads/2015/03/social-icons-lg_07.png"></a>
			</div>
		</div>
	</div>	
	<div class="medium-8 columns">
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
			<p class="titillium required-field"><strong>*</strong> Required Field</p>
	</div>	
</div>


<?php get_footer(); ?>