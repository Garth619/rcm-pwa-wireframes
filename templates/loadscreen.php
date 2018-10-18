<section id="loadscreen">
	
	
	<div class="loadscreen_inner">
		
	
		
			<?php echo file_get_contents("" . $path . "/images/logo-square.svg"); ?>
		
	
		
	</div><!-- loadscreen_inner -->
	
	
</section><!-- loadscreen -->





<!--
use jquery cookie on github


// Cookie that hides hides the zip code overlay because the user correctly entered a zip code withn san diego 
	 
	 
	 jQuery(function() {
 
 
		 if($.cookie('zipcodesuccess') == null) {
 
		 	jQuery(".single_add_to_cart_button").show();
 
		 	};
 
 
		 	if($.cookie('zipcodesuccess') == 'success') {
 
		 		jQuery(".single_add_to_cart_button").hide();
		 		jQuery(".zipcode_checker").hide();
 
 			};
 

 			jQuery(".remove_add_to_cart").click(function() {
 	
 				jQuery(".single_add_to_cart_button").hide();
 				jQuery('.zipcode_checker').fadeOut();
 	
 				$.cookie('zipcodesuccess', 'success', { expires: 7, path: '/' }); 
 	
 		});
-->