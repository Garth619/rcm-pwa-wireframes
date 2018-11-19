// @codekit-prepend 'jquery.3.3.1.js'
// @codekit-prepend 'waypoints.min.js'
// @codekit-prepend 'sticky.min.js'


jQuery(document).ready(function($){


	// nav

	$('#menu_wrapper').on('click', function(e) {
	  
		$('nav').addClass('open');
	
	});
	
	
	
	// notification center
	
	$('#notifications_wrapper').on('click', function(e) {
	  
		$('#notifications').addClass('open');
	
	});
	
	// All Overlays
	
	$('.close_overlay').on('click', function(e) {
	  
	$('nav, #notifications').removeClass('open');
	
	});
	
	
	// Promo Slides
	
	
	$('.tap').on('click', function(e) {
	  
	  // something very simple like https://www.w3schools.com/howto/howto_js_slideshow.asp
	  
	});
	

	
	// load screen animation
	

	
	$('.progress_bar').addClass('load');
	
	
	$('#loadscreen').delay(2400).fadeOut(700);
	

	// events
	
	
	$('.single_event_details').on('click', function(e) {
		
		
		$(this).parent().addClass('open');
	  
	});
	
	$('.read_more_button').on('click', function(e) {
			
			
			$(this).parent().toggleClass('open');
		
			// $(this).parent().removeClass('open');
	  
	});
	

	
	$('.event_buttons span').on('click', function(e) {
		
		$(this).siblings().removeClass('clicked');
	  
		$(this).addClass('clicked');
	
	});
	
	
	// loyalty punchcard
	
	
	$('.punch_holes > div').on('click', function(e) {
	  
	
		$(this).toggleClass('redeemed');
		
	
	});
	
	
	// loyalty main feed tabs
	
	
	
	if($('.loyalty_tabs').length) {
		
		var sticky = new Waypoint.Sticky({
			element: $('.loyalty_tabs')[0],
			 offset: 70
		})
	
	}
	
	
	$('.loyalty_tabs span.tab').on('click', function(e) {
	  
	  $('.loyalty_tabs span.tab').removeClass('active');
	  
	  $(this).addClass('active');
	  
	});
	
	
	
	// loyalty single product stamp
	
	
	$('.stamp').on('click', function(e) {
	  
		$(this).toggleClass('clicked');
	
	});
	
	
	



}); // Document Ready

