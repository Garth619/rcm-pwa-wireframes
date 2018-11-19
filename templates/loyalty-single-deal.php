<?php //loyalty main
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<span class="share"><?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?></span><!-- share -->
			
			<h1 class="section_title">Free Flower</h1><!-- section_title -->
			
			<h2 class="sub_header">Redeem By 12.10.18</h2><!-- sub_header -->

			<img class="single_product_image" src="<?php echo $path;?>/images/single-test.png"/>
			
			<div class="single_product_description">
				
				Product description: When it’s time to relax, reach for this cartridge. This extract is extracted from a dreamy
				
			</div><!-- single_product_description -->

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
			
			<?php include('loyalty-feed.php');?>
			
		</div><!-- inner_section -->
		
	</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>