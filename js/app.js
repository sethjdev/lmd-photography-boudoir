$(function() {

	// ********************************************
	// STICKY NAV
	// ********************************************

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = 1030;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('.purp-triangle').hide();
			$('.sticky-bg').slideDown(500).show();			
			$('.site-title').css({'background-color':'transparent'});
			$('#sticky_navigation').addClass('nav-bg').slideDown(500);
			$('#sticky_navigation img').addClass('img-sticky').slideDown(500);
			$('#site-navigation a').addClass('a-sticky').slideDown(500);
			$('.sidebar').addClass('sidebar-padding');
		} else {
			$('.purp-triangle').show();
			$('.sticky-bg').hide();
			$('.site-title').css({'background-color':'#46263d'});
			$('#sticky_navigation').removeClass('nav-bg').removeAttr("style");
			$('#sticky_navigation img').removeClass('img-sticky').removeAttr("style");
			$('#site-navigation a').removeClass('a-sticky').removeAttr("style");
			$('.sidebar').removeClass('sidebar-padding');
		}  
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
    });



	// ********************************************
	// SIDEBAR FULL HEIGHT
	// ********************************************

	var sidebar_height = $(document).height() - 400;
	$('.sidebarbg').css({'height':sidebar_height});


    // ********************************************
    // MOBILE MENU
    // ********************************************

	var $select = $("<select></select>");
	$("#mobile-menu").append($select);

	$("#site-navigation a").each(function() {
		var $anchor = $(this);
		var $option = $("<option></option>");

		if($anchor.parent().hasClass("current-menu-item")) {
			$option.prop("selected", true);
		};
		$option.val($anchor.attr("href"))
		$option.text($anchor.text());
		$select.append($option);
	});

	$select.change(function() {
		window.location = $select.val();
	});



    // ********************************************
    // INIT SUPERBOX
    // ********************************************
    $('.superbox').SuperBox();
	
});


	// ********************************************
	// STICKY SIDEBAR
	// ********************************************
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_sidebar = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > 200) 
		{ 
			$('#sidebar-id').addClass('sticky_bar');
		} 
		else 
		{
			$('#sidebar-id').removeClass('sticky_bar');	
		}  
	};
	
	// run our function on load
	sticky_sidebar();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_sidebar();
    });

    // ********************************************
	// Return Sidebar when at bottom of screen
	// ********************************************
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_sidebar_return = function(){
		var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scrollBottom < 280) 
		{ 
			$('.sidebar').addClass('sidebar-opacity');
		} 
		else 
		{
			$('.sidebar').removeClass('sidebar-opacity');
		}  
	};
	
	// run our function on load
	sticky_sidebar_return();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_sidebar_return();
    });