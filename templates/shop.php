<?php //shop
	
	include('functions.php');
	include('header.php');?>
	
	<div class="svg_header">
			
		<?php echo file_get_contents("" . $path . "/images/mobile_header_shapes.svg"); ?>
		
	</div><!-- svg_header -->
	
	<section id="shop" class="section_template">
		
		<div class="inner_section">
			
			<h1 class="section_title">Shop</h1><!-- section_title -->
			
			<div class="shop_input_wrapper">
				
				<form>
				
					<input name="search" type="text" placeholder="Search">
				
				</form>
				
				<div class="search_settings">
					
					<?php echo file_get_contents("" . $path . "/images/settings.svg"); ?>
					
				</div><!-- search_settings -->
				
			</div><!-- input_wrapper -->
			
			<div class="product_feed">
					
					<div class="product_row">
						
						<div class="product_category_wrapper">
						
							<span class="product_category">Flowers</span><!-- product_category -->
						
							<span class="see_all">See All 16</span><!-- see_all -->
						
						</div><!-- product_category_wrapper -->
						
						<div class="product_inner_row">
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
						</div><!-- product_inner_row -->
						
					</div><!-- product_row -->
					
				</div><!-- product_feed -->
			
		</div><!-- inner_section -->
		
	</section><!-- shop -->
	
<script type="text/javascript">

jQuery(document).ready(function($){

	$('header').addClass('white_header');

}); // Document Ready

</script>
	
<?php include('footer.php');?>