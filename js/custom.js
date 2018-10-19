// @codekit-prepend 'jquery.3.3.1.js'


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
	
	



}); // Document Ready

