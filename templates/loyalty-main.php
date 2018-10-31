<?php //loyalty main
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<h1 class="section_title">VIP Rewards</h1><!-- section_title -->
			
			<h2 class="sub_header">Welcome Garrett!</h2><!-- sub_header -->
			
			<img id="rewards_profile_image" src="<?php echo $path;?>/images/g.jpg"/><!-- rewards_profile_image -->
			
			<div id="rewards_points_wrapper">
				
				<span id="points_total">18&nbsp;/&nbsp;25</span><!-- profile_points -->
				
				<span id="points_title">Points</span><!-- points_title -->
				
				
			</div><!-- rewards_points_wrapper -->
			
			<div class="loyalty_feed_wrapper">
				
				
				<div class="loyalty_tabs">
					
					<span class="active">Available</span>
					<span class="">History</span>
					<span class="">Milestones</span>
					
				</div><!-- loyalty_tabs -->
				
				<div class="loyalty_feed">
					
					<div class="loyalty_single_row">
						
						<a href="<?php echo $path;?>/templates/loyalty-single-deal.php">
						
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
						
						</a>
						
					</div><!-- loyalty_single_row -->
					
					<div class="loyalty_single_row">
						
						<a href="">
						
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
						
						</a>
						
					</div><!-- loyalty_single_row -->
					
					<div class="loyalty_single_row">
						
						<a href="">
						
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
						
						</a>
						
					</div><!-- loyalty_single_row -->

					<div class="loyalty_single_row">
						
						<a href="">
						
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
						
						</a>
						
					</div><!-- loyalty_single_row -->

					<div class="loyalty_single_row">
						
						<a href="">
						
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
						
						</a>
						
					</div><!-- loyalty_single_row -->
					
					
				</div><!-- loyalty_feed -->
				
			</div><!-- loyalty_feed_wrapper -->
			
		</div><!-- inner_section -->
		
	</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>