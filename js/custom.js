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



}); // Document Ready

