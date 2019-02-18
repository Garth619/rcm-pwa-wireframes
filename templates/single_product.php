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

<section id="single_product" class="section_template">
	
	
			
		<div class="back_to_shop_wrapper">
			
			<a class="" href="<?php echo $path;?>/templates/shop.php">
			
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
					
					<h2>Customer Reviews</h2>
					
					<div class="single_product_review_wrapper">
						
						<div class="single_product_review">
							
							<span class="single_product_review_name">Garrett Cullen</span><!-- single_product_review_name -->
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
							<div class="rating_icons">
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->						
								
								<div class="">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
							</div><!-- rating_icons -->
							
						</div><!-- single_product_review -->
						
						<div class="single_product_review">
							
							<span class="single_product_review_name">Jason Monsef</span><!-- single_product_review_name -->
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
							<div class="rating_icons">
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->						
								
								<div class="">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
							</div><!-- rating_icons -->
							
						</div><!-- single_product_review -->
						
						<div class="single_product_review">
							
							<span class="single_product_review_name">Rosa Romaine</span><!-- single_product_review_name -->
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
							<div class="rating_icons">
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="rating_active">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
								<div class="">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->						
								
								<div class="">
								
									<?php echo file_get_contents("" . $path ."/images/weed-icon.svg"); ?>
								
								</div><!-- rating_active -->
								
							</div><!-- rating_icons -->
							
						</div><!-- single_product_review -->
						
						<span class="see_all_reviews">See All Reviews...</span><!-- see_all_reviews -->
						
					</div><!-- single_product_review_wrapper -->
				
				</div><!-- single_product_content -->
				
			</div><!-- single_product_info -->
			
		</div><!-- single_product_wrapper -->
		
		<div class="related_products">
			
			<div class="related_products_inner">
				
				<span class="shop_title">Shop</span><!-- section_title -->
			
				<div class="shop_input_wrapper">
				
					<form>
				
						<input name="search" type="text" placeholder="Search">
				
					</form>
				
					<div class="search_settings">
					
						<?php echo file_get_contents("" . $path . "/images/settings.svg"); ?>
					
					</div><!-- search_settings -->
				
				</div><!-- shop_input_wrapper -->
				
				
				<?php include('related_products.php');?>
					
			</div><!-- related_products_inner -->
				
		</div><!-- related_products -->
	
	</section><!-- single_product -->
	
	<div class="add_to_cart_wrapper">
		
		<div class="add_to_cart_inner">
		
			<span class="add_to_cart_title">Add To Cart</span><!-- add_to_cart_title -->
		
			<span class="added">Added!</span><!-- added -->
		
			<span class="checkout">Checkout</span><!-- checkout -->
		
			<div class="checkout_amount">
			
					<div>$25</div>
			
			</div><!-- checkout_amount -->
		
		</div><!-- add_to_cart_inner -->
		
	</div><!-- add_to_cart_wrapper -->

<?php include('footer.php');?>