<?php //shop
	
	include('functions.php');
	include('header.php');?>
	
	
	
	<div id="svg_header">
			
		<?php echo file_get_contents("" . $path . "/images/mobile_header_shapes.svg"); ?>
		
	</div><!-- svg_header -->

<section id="single_product" class="section_template">
	
	<div class="inner_section">
			
		<div class="back_to_shop_wrapper">
			
			<a class="" href="<?php echo $path;?>/templates/shop.php"">
			
				<span class="circle_button back_to_shop">
		
					<?php echo file_get_contents("" . $path . "/images/up-arrow.svg"); ?>
		
					</span><!-- circle_button -->
			
					<span class="back_to_shop_title">Back to Shop</span><!-- back_to_shop_title -->
			
			</a>
			
		</div><!-- back_to_shop_wrapper -->
		
		<div class="single_product_wrapper">
			
			<div class="single_product_image">
				
				<img src="<?php echo $path;?>/images/flower.jpg"/>
				
			</div><!-- single_product_image -->
			
			<div class="single_product_info">
				
				<div class="single_product_meta">
				
					<h1>Product Title</h1>
				
					<span class="single_product_price">$25</span><!-- single_product_price -->
				
					<span class="single_product_company_name">Company Name</span><!-- single_product_company_name -->
				
				</div><!-- single_product_meta -->
				
				<div class="single_product_content">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
					
					<h2>Indica</h2>
					
					<p>Lorem ipsum dolor sit amet</p>
					
					<h2>THC</h2>
					
					<p>59%</p>
					
					<h2>Customer Ratings</h2>
					
					<div class="ratings">
						
						<ul>
							<li>Relaxed</li>
							<li>Happy</li>
							<li>Sleep</li>
							<li>Pain Relief</li>
						</ul>
						
					</div><!-- ratings -->
				
				</div><!-- single_product_content -->
				
				
				
			</div><!-- single_product_info -->
			
		</div><!-- single_product_wrapper -->
	
	</div><!-- inner_section -->
	
</section><!-- single_product -->

<?php include('footer.php');?>