<?php //loyalty main
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<span class="share"><?php echo file_get_contents("" . $path . "/images/share-01.svg"); ?></span><!-- share -->
			
			<h1 class="section_title">50% off any product</h1><!-- section_title -->
			
			<h2 class="sub_header">Redeem By 12.10.18</h2><!-- sub_header -->
			
			<div class="single_graph_wrapper">
				
				<?php echo file_get_contents("" . $path ."/images/graph.svg"); ?>
				
				<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
				
				<span class="more_to_go">2 More To Go!</span><!-- more_to_go -->
				
				<span class="count">3 / 5</span><!-- count -->
				
			</div><!-- single_graph_wrapper -->
			
			<div class="single_product_description">
				
				Product description: When it’s time to relax, reach for this cartridge. This extract is extracted from a dreamy
				
			</div><!-- single_product_description -->
							
			<a class="redeem_button">
				
				<span>Redeem</span>
				
				<span><?php echo file_get_contents("" . $path ."/images/corner-01.svg"); ?></span>
				
			</a><!-- redeem_button -->
			
			<?php include('loyalty-feed.php');?>
			
		</div><!-- inner_section -->
		
	</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>