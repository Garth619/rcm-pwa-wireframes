// @codekit-prepend 'jquery.3.3.1.js'
// @codekit-prepend 'waypoints.js'





jQuery(document).ready(function($){
	
	
	// notification center
	
	$('.notifications_wrapper').on('click', function(e) {
	  
		$('#notifications').addClass('open');
	
	});
	
	// All Overlays
	
	$('.close_overlay').on('click', function(e) {
	  
		$('nav, #notifications').removeClass('open');
	
	});
	
	
	// nav

	$('.menu_wrapper').on('click', function(e) {
	  
		$('nav').addClass('open');
	
	});
	
	
	
	/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if($('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              $(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                $(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
         
        });
      }
    }
    
    
  // white header/sticky header combo
  
  
  
  	if ($("#svg_header")[0]){
   	
   		$('header').addClass('white_header');
   		
   		$('header.white_header').clone(true).prependTo('body').addClass('sticky_header');
   
	 		// super hacky way of removing the white header class after the clone above, fires just once on scroll, need a better event listener instead that doesn't involve scroll
   
	 		$(document).one('scroll', function(e) {
   	  
   			$('.sticky_header').removeClass('white_header');
   	      		
	 		});
  
	 		createWaypoint('svg_header', '.sticky_header', 'visible', -180, null, true);
  	
  	}
  
	
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
		
		$('.loyalty_tabs a.rewards.tab').addClass('active');
	  
		$('.loyalty_tabs, .loyalty_feed_wrapper').addClass('open');
		
		$('.loyalty_feed.rewards').addClass('open');
		
		$('.tab_close').addClass('rewards').removeClass('milestone');
		
	
	});
	
	
	$('a.loyalty.milestone').on('click', function(e) {
		
		$('.loyalty_tabs a.milestone.tab').addClass('active');
	  
		$('.loyalty_tabs, .loyalty_feed_wrapper, #graph_list_view_wrapper, .milestone_inner_feed.list_feed').addClass('open');
		
		$('.loyalty_feed.milestone').addClass('open');
		
		$('.tab_close').addClass('milestone').removeClass('rewards');
		
		$('.list').addClass('active');
	
	});
	

	
	// loyalty main feed tabs
	

	$('.loyalty_tabs a.tab').on('click', function(e) {
	  
	  $('.loyalty_tabs a.tab').removeClass('active');
	  
	  $(this).addClass('active');
	  
	  //$('.loyalty_feed.rewards, .loyalty_feed.milestone').toggleClass('open');// remove toggleclass bc of two click error
	  
	});
	
	
	$('.loyalty_tabs a.rewards.tab').on('click', function(e) {
	  
	  $('.tab_close').addClass('rewards').removeClass('milestone');
	  
	  $('#graph_list_view_wrapper').removeClass('open');
	   
	  $('.loyalty_feed.rewards').addClass('open');
	  
	  $('.loyalty_feed.milestone, .milestone_inner_feed.list_feed, .milestone_inner_feed.graph_feed').removeClass('open');
	  
	  $('.graph').removeClass('active');
	  
	});
	
	
	$('.loyalty_tabs a.milestone.tab').on('click', function(e) {
	  
	  $('.tab_close').addClass('milestone').removeClass('rewards');
	  
	  $('#graph_list_view_wrapper').addClass('open');
	  
	  $('.loyalty_feed.milestone, .milestone_inner_feed.list_feed').addClass('open');
	  
	  $('.loyalty_feed.rewards').removeClass('open');
	  
	   
	  $('.list').addClass('active');
	  
	  
	  
	});
	
	
	// loyalty overlay arrow close
	
	$('.tab_close').on('click', function(e) {
	  
		$('.tab_close, .loyalty_tabs, .loyalty_feed_wrapper, .loyalty_feed, #graph_list_view_wrapper, .milestone_inner_feed.graph_feed, .graph').removeClass('open');
		
		$('.loyalty_tabs a.tab').removeClass('active');
		
		 $('.list, .graph').removeClass('active');
	
	});
	

	
	// loyalty single product stamp
	
	
	$('.stamp').on('click', function(e) {
	  
		$(this).toggleClass('clicked');
	
	});
	
	// loyalty graph/list views
	
	
	$('#graph_list_view_wrapper .single_view').on('click', function(e) {
	  
		$('.single_view').removeClass('active');
		
		$(this).addClass('active');
	
	});
	
	$('#graph_list_view_wrapper .single_view.graph').on('click', function(e) {
		
		$('.milestone_inner_feed.list_feed').removeClass('open');
		
		$('.milestone_inner_feed.graph_feed').addClass('open');
	  
	});
	
	$('#graph_list_view_wrapper .single_view.list').on('click', function(e) {
		
		$('.milestone_inner_feed.graph_feed').removeClass('open');
		
		$('.milestone_inner_feed.list_feed').addClass('open');
	  
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
	
	
	// loyalty version one
	
	
	$('.loyalty_v_one').on('click', function(e) {
	  
	  $('.version_one, .product_close').addClass('open');
	
	});
	
	
	// loyalty version two
	
	$('.loyalty_v_two').on('click', function(e) {
	  
	  $('.version_two, .product_close').addClass('open');
	
	});
	
	
	// loyalty product close
	
	
	$('.product_close').on('click', function(e) {
	  
	  $('.version_one, .version_two, .product_close').removeClass('open');
	
	});
	
	
	// gallery
	
	
	$('.single_gallery').on('click', function(e) {
	  
		$('.gallery_overlay').addClass('open');
	
	});
	
	$('.gallery_overlay').on('click', function(e) {
	  
		$(this).removeClass('open');
	
	});
	
	
	// add to cart
	
	$('.add_to_cart_wrapper').on('click', function(e) {
	  
	 	$('span.add_to_cart_title').fadeOut(300);
	  
	  $('span.added').delay(350).fadeIn(300).delay(1000).fadeOut(300);
	  
	  $('span.checkout').delay(1950).fadeIn(300);
	  
	  $('.checkout_amount').addClass('added');
	  
	});
	
	
	// chat
	
	$('.chat_wrapper').on('click', function(e) {
		
		$(this).addClass('open');
	  
		$('.message_wrapper').addClass('open');
	
	});
	
	
	$('.message_close').on('click', function(e) {
	  
		$('.message_wrapper, .chat_wrapper').removeClass('open');
	
	});
	
	
	// home login prompt 
	
	
	$('#login').addClass('ready');
	
	
	$('.login_close_wrapper').on('click', function(e) {
	  
		$('#login').removeClass('ready');
	
	});
	
	
	// redeem overlay
	
	$('a.redeem_trigger').on('click', function(e) {
	  
		$('#redeem').addClass('open');
	
	});
	
	
	$('.redeem_close').on('click', function(e) {
		
		$('#redeem').removeClass('open');
	  
	});
	


}); // Document Ready

