<?php //contacts
	
	include('functions.php');
	include('header.php');?>
	
	
<section id="contact" class="section_template">
	
	<div class="contact_inner">
		
		<h1 class="section_title">Contact Us</h1>
		
		<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', '6199253611'); ?>">619.925.3611</a>
		
		<span class="contact_address">235 South Highway 101 Solana Beach CA 92075</span><!-- contact_address -->
		
		<a class="get_directions" href="https://www.google.com/maps/place/235+Hwy+101,+Solana+Beach,+CA+92075/@32.9891664,-117.2736817,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0ed24c3ab405:0x2f0678701dd67a83!8m2!3d32.9891664!4d-117.271493" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
		
		<div class="hours_wrapper">
			
			<h2>Hours</h2>
			
			<div class="hours_inner_wrapper">
				
				<div class="hours_row">
					
					<span class="days">Mon - Fri</span><!-- days -->
					
					<span class="hours">9am - 9pm</span><!-- hours -->
					
				</div><!-- hours_row -->
				
				<div class="hours_row">
					
					<span class="days">Sat - Sun</span><!-- days -->
					
					<span class="hours">9am - 10pm</span><!-- hours -->
					
				</div><!-- hours_row -->
				
			</div><!-- hours_inner_wrapper -->
			
		</div><!-- hours_wrapper -->
		
		<div class="contact_social_media">
			
			<a class="" href="">
				
				<?php echo file_get_contents("" . $path . "/images/sm-03.svg"); ?>
				
			</a>
			
			<a class="" href="">
				
				<?php echo file_get_contents("" . $path . "/images/sm-01.svg"); ?>
				
			</a>
			
			<a class="" href="">
				
				<?php echo file_get_contents("" . $path . "/images/sm-02.svg"); ?>
				
			</a>
			
			<a class="" href="">
				
				<?php echo file_get_contents("" . $path . "/images/sm-04.svg"); ?>
				
			</a>
			
		</div><!-- contact_social_media -->
		
	</div><!-- contact_inner -->
	
	<div class="iframe_map">
		
		<iframe src="https://snazzymaps.com/embed/137987" width="100%" height="600px" style="border:none;"></iframe>
		
	</div><!-- iframe_map -->
	
</section><!-- contact -->
	
<?php include('messages.php');?>

<?php include('footer.php');?>