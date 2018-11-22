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
	
	
	// loyalty main welcome page buttons

	
	
	$('a.loyalty').on('click', function(e) {
	  
		$('.tab_close').addClass('open');
	
	});

	
	$('a.loyalty.rewards').on('click', function(e) {
	  
		$('.loyalty_tabs, .loyalty_feed_wrapper').addClass('open');
		
		$('.loyalty_feed.rewards').addClass('open');
		
		$('.tab_close').addClass('rewards').removeClass('milestone');
		
	
	});
	
	
	$('a.loyalty.milestone').on('click', function(e) {
	  
		$('.loyalty_tabs, .loyalty_feed_wrapper').addClass('open');
		
		$('.loyalty_feed.milestone').addClass('open');
		
		$('.tab_close').addClass('milestone').removeClass('rewards');
	
	});
	

	
	// loyalty main feed tabs
	

	$('.loyalty_tabs a.tab').on('click', function(e) {
	  
	  $('.loyalty_tabs a.tab').removeClass('active');
	  
	  $(this).addClass('active');
	  
	  $('.loyalty_feed.rewards, .loyalty_feed.milestone').toggleClass('open');
	  
	});
	
	
	$('.loyalty_tabs a.rewards.tab').on('click', function(e) {
	  
	  $('.tab_close').addClass('rewards').removeClass('milestone');
	  
	});
	
	
	$('.loyalty_tabs a.milestone.tab').on('click', function(e) {
	  
	  $('.tab_close').addClass('milestone').removeClass('rewards');
	  
	  
	  
	});
	
	
	// loyalty overlay arrow close
	
	$('.tab_close').on('click', function(e) {
	  
		$('.tab_close, .loyalty_tabs, .loyalty_feed_wrapper, .loyalty_feed').removeClass('open');
	
	});
	

	
	// loyalty single product stamp
	
	
	$('.stamp').on('click', function(e) {
	  
		$(this).toggleClass('clicked');
	
	});
	
	
	// loyalty milestone graph points
	
	$('span.graph_point').on('click', function(e) {
	  
	  $('span.graph_point').removeClass('active');
	  
	  $(this).addClass('active');
	  
	  // hacky hardcode just for visuals
	  
	  $('span.graph_number').removeClass('active');
	  
	  if($(this).hasClass('one')) {
		  
		  $('span.graph_number.one').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('two')) {
		  
		  $('span.graph_number.two').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('three')) {
		  
		  $('span.graph_number.three').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('four')) {
		  
		  $('span.graph_number.four').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('five')) {
		  
		  $('span.graph_number.five').addClass('active');
		  
	  }
	  
	});
	
	
	
	// more hacky milestone number clicks
	
	
	
	$('span.graph_number').on('click', function(e) {
	  
	  $('span.graph_number').removeClass('active');
	  
	  $(this).addClass('active');
	  
	  // hacky hardcode just for visuals
	  
	  $('span.graph_point').removeClass('active');
	  
	  if($(this).hasClass('one')) {
		  
		  $('span.graph_point.one').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('two')) {
		  
		  $('span.graph_point.two').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('three')) {
		  
		  $('span.graph_point.three').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('four')) {
		  
		  $('span.graph_point.four').addClass('active');
		  
	  }
	  
	  if($(this).hasClass('five')) {
		  
		  $('span.graph_point.five').addClass('active');
		  
	  }
	  
	});
	
	
	
	
	



}); // Document Ready

