<?php //loyalty main
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<span class="share"><?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?></span><!-- share -->
			
			<h1 class="section_title">Free Flower</h1><!-- section_title -->
			
			<h2 class="sub_header">Redeem By 12.10.18</h2><!-- sub_header -->

				<img class="single_product_image" src="<?php echo $path;?>/images/single-test.png"/>

			<span class="redeemed_status">3 / 5 Stamps Redeemed</span><!-- redeemed_status -->
			
			<div class="stamps_wrapper">
				
				<div class="stamp clicked"></div><!-- stamp -->
				<div class="stamp clicked"></div><!-- stamp -->
				<div class="stamp"></div><!-- stamp -->
				<div class="stamp"></div><!-- stamp -->
				<div class="stamp"></div><!-- stamp -->
				
			</div><!-- stamps_wrapper -->
			
			<a class="redeem_button">
				
				<span>Redeem</span>
				
				<span><?php echo file_get_contents("" . $path ."/images/corner-01.svg"); ?></span>
				
			</a><!-- redeem_button -->
			
			<div class="loyalty_feed_wrapper">
				
				
				<div class="loyalty_tabs">
					
					<span class="active">Available</span>
					<span class="">History</span>
					<span class="">Milestones</span>
					
				</div><!-- loyalty_tabs -->
				
				<div class="loyalty_feed">
					
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