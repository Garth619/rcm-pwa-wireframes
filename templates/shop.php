<?php //shop
	
	include('functions.php');
	include('header.php');?>
	
	
	
	<div id="svg_header">
			
		<svg id="header_gradient" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" viewBox="0 0 510.61 234.5">
  <defs>
    <style>
      .header_gradient-cls-1 {
        fill: #04aac5;
      }

      .header_gradient-cls-1, .header_gradient-cls-2 {
        opacity: 0.43;
      }

      .header_gradient-cls-2 {
        fill: #377cbf;
      }

      .header_gradient-cls-3 {
        fill: url(#header-gradient);
      }
    </style>
    <linearGradient id="header-gradient" x1="90.09" y1="-90.17" x2="434.1" y2="253.84" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#09a5c3"/>
      <stop offset="1" stop-color="#3e77be"/>
    </linearGradient>
  </defs>
  <title>mobile_header_shapes</title>
  <path class="header_gradient-cls-1" d="M-1,228.63s79,6.59,135.45-60-134.64-49-134.64-49Z"/>
  <path class="header_gradient-cls-2" d="M328.52,185.75s97.1-17.17,182.31,44.26V132.25S398.53,127.63,328.52,185.75Z"/>
  <path class="header_gradient-cls-3" d="M510.79.07H-.14v150s146,130,331,40c69.38-33.75,129.33-30.8,177.17-13.93l2.76,1Z"/>
</svg>

		
	</div><!-- svg_header -->
	
	<section id="shop">
		
			<h1 class="section_title">Shop</h1><!-- section_title -->
			
			<div class="shop_input_wrapper">
				
				<form>
				
					<input name="search" type="text" placeholder="Search">
				
				</form>
				
				<div class="search_settings">
					
					<?php echo file_get_contents("" . $path . "/images/settings.svg"); ?>
					
				</div><!-- search_settings -->
				
			</div><!-- shop_input_wrapper -->
			
			<div class="product_feed">
					
					<div class="product_row">
						
						<div class="product_category_wrapper">
						
							<span class="product_category">Flowers</span><!-- product_category -->
						
							<span class="see_all">See All 16</span><!-- see_all -->
						
						</div><!-- product_category_wrapper -->
						
						<div class="product_inner_row">
							
							<div class="single_product">
								
								<a class="" href="<?php echo $path;?>/templates/single_product.php">
								
									<div class="product_img_wrapper">
									
										<div class="see_more_icon"></div><!-- see_more_icon -->
									
										<img src="<?php echo $path;?>/images/flower.jpg"/>
									
										</div><!-- product_img_wrapper -->
								
										<span class="product_price">$25</span><!-- product_price -->
								
										<span class="product_name">Product Name</span><!-- product_name -->
								
										<span class="company_name">Company Name</span><!-- company_name -->
								
								</a>
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/flower.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
						</div><!-- product_inner_row -->
						
					</div><!-- product_row -->
					
					
					<div class="product_row">
						
						<div class="product_category_wrapper">
						
							<span class="product_category">Edibles</span><!-- product_category -->
						
							<span class="see_all">See All 10</span><!-- see_all -->
						
						</div><!-- product_category_wrapper -->
						
						<div class="product_inner_row">
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/edible.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
						</div><!-- product_inner_row -->
						
					</div><!-- product_row -->
					
					
					
					<div class="product_row">
						
						<div class="product_category_wrapper">
						
							<span class="product_category">Vaporizers</span><!-- product_category -->
						
							<span class="see_all">See All 5</span><!-- see_all -->
						
						</div><!-- product_category_wrapper -->
						
						<div class="product_inner_row">
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
							<div class="single_product">
								
								<div class="product_img_wrapper">
									
									<div class="see_more_icon"></div><!-- see_more_icon -->
									
									<img src="<?php echo $path;?>/images/vaporizer.jpg"/>
									
								</div><!-- product_img_wrapper -->
								
								<span class="product_price">$25</span><!-- product_price -->
								
								<span class="product_name">Product Name</span><!-- product_name -->
								
								<span class="company_name">Company Name</span><!-- company_name -->
								
							</div><!-- single_product -->
							
						</div><!-- product_inner_row -->
						
					</div><!-- product_row -->
					
					
					
				</div><!-- product_feed -->
			
	</section><!-- shop -->
	
<?php include('footer.php');?>