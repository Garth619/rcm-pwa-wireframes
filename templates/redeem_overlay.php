<section id="redeem">
	
	<div class="redeem_close"></div><!-- message_close -->
	
	<div class="redeem_inner">
		
		
		
		<div class="redeem_inner_content">
		
			<h1 class="section_title">Free Disposable Pen</h1><!-- section_title -->
			
			<span class="redeem_subtitle">Scan Our QR Code to Redeem!</span><!-- redeem_subtitle -->
			
			<a class="scan_button">
			
				<span class="scan_title">Scan</span>
			
				<div>
				
					<?php echo file_get_contents("" . $path . "/images/camera.svg"); ?> 
			
				</div>
			
			</a><!-- scan_button -->
		
		</div><!-- redeem_inner_content -->
		
		<div class="redeem_top"></div>
	
		<div class="redeem_left">
			
			<div class="top_left">
			
				<?php echo file_get_contents("" . $path . "/images/redeem_corner.svg"); ?>
			
			</div><!-- top_left -->
			
			<div class="bottom_left">
			
				<?php echo file_get_contents("" . $path . "/images/redeem_corner.svg"); ?>
			
			</div><!-- bottom_left -->
			
		</div><!-- redeem_left -->
	
		<div class="redeem_right">
			
			<div class="top_right">
			
				<?php echo file_get_contents("" . $path . "/images/redeem_corner.svg"); ?>
				
				<div class="qr_options">
					
					<div class="qr_option_button">
						
						<?php echo file_get_contents("" . $path . "/images/flash.svg"); ?>
						
					</div><!-- qr_option_button -->
					
					<div class="qr_option_button">
						
						<span>?</span>
						
					</div><!-- qr_option_button -->
					
				</div><!-- qr_options -->
			
			</div><!-- top_right -->
			
			<div class="bottom_right">
			
				<?php echo file_get_contents("" . $path . "/images/redeem_corner.svg"); ?>
			
			</div><!-- bottom_right -->
			
		</div><!-- redeem_right -->
	
		<div class="redeem_bottom"></div><!-- redeem_bottom -->
		
		

	</div><!-- redeem_inner -->
	
	<img class="camerashot" src="<?php echo $path; ?>/images/camerashot.jpg"/>
	
</section><!-- redeem -->