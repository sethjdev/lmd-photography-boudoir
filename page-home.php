<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<!-- Facebook SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1513374995582161&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END Facebook SDK -->

<div class="row homepage-grid">

	<div class="medium-8 columns">
		<a href="/portfolio"><img src="/wp-content/uploads/2015/03/tile-pics_06.jpg" class="btm-margin"></a>
		<a href="/portfolio"><img src="/wp-content/uploads/2015/03/tile-pics_17.jpg" class="left no-mobile"></a>
		<a href="/portfolio"><img src="/wp-content/uploads/2015/03/tile-pics_15.jpg" class="right no-mobile cntr-pic"></a>
		<div class="tanbg more-portfolio left">
			<h3 class="abril h3">Want To See More?</h3>
			<a href="/portfolio"><p class="titillium button">View My Portfolio</p></a>
		</div>
	</div>

	<div class="medium-4 columns">
		<a href="/portfolio"><img src="/wp-content/uploads/2015/03/tile-pics_09.jpg" class="btm-margin no-mobile"></a>
		<a href="/portfolio"><img src="/wp-content/uploads/2015/03/tile-pics_12.jpg" class="btm-margin no-mobile"></a>
		<a href="/portfolio"><img src="/wp-content/uploads/2015/03/tile-pics_20.jpg" class="btm-margin no-mobile"></a>
	</div>

</div>

<div class="row">
	<div class="medium-12 columns"><h1 class="abril main-headline">Welcome To LMD Photography - Boudoir</h1></div>
</div>

<div class="row">
	<div class="medium-6 columns">
		<p class="titillium main-copy"><strong>LMD Photography- Boudoir &amp; Beauty Portraiture</strong> is located in the lovely town of Brighton, MI. Offering womens boudoir, beauty and fashion themed photography both in-studio or on location, resulting in beautiful, intimate woman’s fine art portraiture. If you have any questions or would like to book a session please give a call at <a href="tel:810-220-3354"><strong>810.220.3354</strong></a>.</p>
	</div>

	<div class="medium-6 columns">
		<div class="newsletter-signup tanbg">
			<h3 class="abril h3">Join Our Mailing List</h3>
			<p class="titillium">Get monthly articles, news, events, and <br>exclusive deals!</p>
			<form action="//LMD-Boudoir.us9.list-manage.com/subscribe/post?u=4a888204972603e236c152092&amp;id=0c64a70e87" method="post" name="mc-embedded-subscribe-form" target="_blank">
	            <input type="email" value="" name="EMAIL" placeholder="name@domain.com" class="display-inline titillium" id="email-input" required>
	            <input type="submit" value="Submit" name="subscribe" class="display-inline titillium" id="submit-button">
		        <!-- Bot Getter -->
	            <div style="display:none">
	                <input type="text" name="b_4a888204972603e236c152092_0c64a70e87"tabindex="-1" value="">
	            </div>
	        </form>
		</div>
	</div>
</div>

<div class="row">
	<div class="medium-12 columns"><h2 class="abril main-headline testim-headline">Customer Testimonials</h2></div>
</div>

<div class="testimonials titillium">
		<div class="row">
			<div class="medium-4 columns">
				<div class="testimonial">
					<img src="/wp-content/uploads/2015/03/home-testimonials_32.jpg" class="center"/>
					<p class="titillium">It was honestly one of the best days of my life. I felt beautiful, strong, sexy, and confident with many moments of looking... <a href="/testimonials"><strong>Read More</strong></a></p>
				</div>
			</div>
			<div class="medium-4 columns">
				<div class="testimonial">
					<img src="/wp-content/uploads/2015/04/SW-Testim.jpg" class="center"/>
					<p class="titillium">I'm a curvy girl that sometimes can be a little self conscious of how I'm viewed in photos, a wrinkle here, a dimple there, sorta... <a href="/testimonials"><strong>Read More</strong></a></p>
				</div>
			</div>
			<div class="medium-4 columns">
				<div class="testimonial">
					<img src="/wp-content/uploads/2015/04/JM-Testim.jpg" class="center"/>
					<p class="titillium">Linda is not only an amazing photographer but she makes the entire experience SO comfortable. Boudoir is... <a href="/testimonials"><strong>Read More</strong></a></p>
				</div>
			</div>
		</div>
</div>

<div class="more-testimonials tanbg">
	<div class="row">
		<div class="medium-6 columns">
			<h3 class="abril h3">Want To Read More?</h3>
		</div>
		<div class="medium-6 columns">
			<a href="/testimonials"><p class="titillium button">View My Testimonials</p></a>
		</div>
	</div>
</div>

<div class="blog-social">
	<div class="row">
		<div class="medium-6 columns">
			<h3 class="abril">Featured Blog</h3>
			<a href="/top-20-misconceptions-about-boudoir-photography">
				<img src="/wp-content/uploads/2015/03/blog-preview_47.jpg">
			</a>
		</div>
		<div class="medium-6 columns">
			<h3 class="abril">What's New on Facebook</h3>
			<div class="fb-like-box" data-href="https://www.facebook.com/lmdphotographyboudoir" data-width="470" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
		</div>
	</div>
</div>


<div class="row">
	<div class="medium-6 columns">
		<div class="closing-cta tanbg">
			<h3 class="abril h3">Book a Session Today!</h3>
			<a href="/contact"><p class="titillium button">Book a Session</p></a>
		</div>
	</div>

	<div class="medium-6 columns mobile-margin">
		<div class="closing-cta tanbg">
			<h3 class="abril h3">Learn More About Me</h3>
			<a href="/about-me"><p class="titillium button">About Me</p></a>
		</div>
	</div>
</div>

<?php get_footer(); ?>