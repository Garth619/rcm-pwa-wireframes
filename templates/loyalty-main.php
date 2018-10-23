<?php //loyalty main
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<h1 class="section_title">VIP Rewards</h1><!-- section_title -->
			
			<div class="loyalty_feed_wrapper">
				
				
				<div class="loyalty_tabs">
					
					<span class="active">Available</span>
					<span class="">History</span>
					<span class="">Milestone</span>
					
				</div><!-- loyalty_tabs -->
				
				<div class="loyalty_feed">
					
					<div class="loyalty_single_row">
						
						<div class="loyalty_single_left">
							
							<div class="loyalty_product_wrapper">
								
								<img src="<?php echo $path;?>/images/test.png"/>
								
								<div class="image_overlay">
									
									<span>3 / 5</span>
									
								</div><!-- image_overlay -->
								
							</div><!-- loyalty_product_wrapper -->
							
						</div><!-- loyalty_single_left -->
						
						<div class="loyalty_single_right">
							
							<?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?>
							
							<h2>Free Disposable Pen</h2>
							
							<span>Our disposable pens are great for when you are on the go. Quick and easy and extremely convenient.</span>
							
						</div><!-- loyalty_single_right -->
						
					</div><!-- loyalty_single_row -->
					
					<div class="loyalty_single_row">
						
						<div class="loyalty_single_left">
							
							<div class="loyalty_product_wrapper">
								
								<img src="<?php echo $path;?>/images/test.png"/>
								
								<div class="image_overlay">
									
									<span>3 / 5</span>
									
								</div><!-- image_overlay -->
								
							</div><!-- loyalty_product_wrapper -->
							
						</div><!-- loyalty_single_left -->
						
						<div class="loyalty_single_right">
							
							<?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?>
							
							<h2>Free Disposable Pen</h2>
							
							<span>Our disposable pens are great for when you are on the go. Quick and easy and extremely convenient.</span>
							
						</div><!-- loyalty_single_right -->
						
					</div><!-- loyalty_single_row -->
					
					<div class="loyalty_single_row">
						
						<div class="loyalty_single_left">
							
							<div class="loyalty_product_wrapper">
								
								<img src="<?php echo $path;?>/images/test.png"/>
								
								<div class="image_overlay">
									
									<span>3 / 5</span>
									
								</div><!-- image_overlay -->
								
							</div><!-- loyalty_product_wrapper -->
							
						</div><!-- loyalty_single_left -->
						
						<div class="loyalty_single_right">
							
							<?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?>
							
							<h2>Free Disposable Pen</h2>
							
							<span>Our disposable pens are great for when you are on the go. Quick and easy and extremely convenient.</span>
							
						</div><!-- loyalty_single_right -->
						
					</div><!-- loyalty_single_row -->
					
					<div class="loyalty_single_row">
						
						<div class="loyalty_single_left">
							
							<div class="loyalty_product_wrapper">
								
								<img src="<?php echo $path;?>/images/test.png"/>
								
								<div class="image_overlay">
									
									<span>3 / 5</span>
									
								</div><!-- image_overlay -->
								
							</div><!-- loyalty_product_wrapper -->
							
						</div><!-- loyalty_single_left -->
						
						<div class="loyalty_single_right">
							
							<?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?>
							
							<h2>Free Disposable Pen</h2>
							
							<span>Our disposable pens are great for when you are on the go. Quick and easy and extremely convenient.</span>
							
						</div><!-- loyalty_single_right -->
						
					</div><!-- loyalty_single_row -->
					
				</div><!-- loyalty_feed -->
				
			</div><!-- loyalty_feed_wrapper -->
			
		</div><!-- inner_section -->
		
	</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>