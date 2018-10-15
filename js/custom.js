// @codekit-prepend 'jquery.3.3.1.js'


jQuery(document).ready(function($){


	// nav

	$('.menu_wrapper').on('click', function(e) {
	  
		$('nav').addClass('open');
	
	});
	
	$('.close').on('click', function(e) {
	  
		$('nav').removeClass('open');
	
	});

	

}); // Document Ready

