<section id="home_slides_wrapper">
	
	<div id="home_slider">
		
		<div class="slide_controls">
			
			<div class="slide_controls_inner">
			
				<span></span>
				<span></span>
				<span></span>
			
			</div><!-- slide_controls_inner -->
			
		</div><!-- slide_controls -->
		
		<div class="slide_buttons_wrapper">
		
			<div class="slide_left slide_button">
			
				<?php echo file_get_contents("" . $path . "/images/arrow.svg"); ?>
			
			</div><!-- slide_left -->
		
			<div class="slide_right slide_button">
			
				<?php echo file_get_contents("" . $path . "/images/arrow.svg"); ?>
			
			</div><!-- slide_right -->
		
		</div><!-- slide_buttons_wrapper -->
		
		<div class="home_single_slide">
			
			<div class="client_text_area">
				
				<div class="slide_one_text_wrapper">
					
					<span class="first_letters">Fr</span><!-- first_letters -->
					<span class="middle_letters">E</span><!-- middle_letters -->
					<span class="last_letters">sh</span><!-- last_letters -->
					
				</div><!-- slide_one_text -->
				
				<img class="slide_image_one" src="<?php echo $path;?>/images/slide-one.png"/>
				
			</div><!-- client_text_area -->
			
		</div><!-- home_single_slide -->
		
	</div><!-- home_slider -->
	
	<div class="swipe_wrapper">
		
		<span class="circle_button"></span><!-- circle_button -->
		
		<span class="swipe_verbiage">swipe up to<br/> see our loyalty program</span><!-- swipe_verbiage -->
		
	</div><!-- swipe_wrapper -->
	
</section><!-- home_slides_wrapper -->





<script type="text/javascript">

jQuery(document).ready(function($){

	$('header').addClass('white_header');

}); // Document Ready

</script>