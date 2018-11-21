<?php //loyalty main
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<h1 class="section_title">VIP Rewards</h1><!-- section_title -->
			
			<h2 class="sub_header">Welcome Garrett!</h2><!-- sub_header -->
			
			<img id="rewards_profile_image" src="<?php echo $path;?>/images/g.jpg"/><!-- rewards_profile_image -->
			
			<div id="rewards_points_wrapper">
				
<!-- 				<span id="points_total">18&nbsp;/&nbsp;25</span> --><!-- profile_points -->
				
<!-- 				<span id="points_title">Points</span> --><!-- points_title -->
				
				
				<div class="loyalty_welcome_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</div><!-- loyalty_welcome_description -->
				
			</div><!-- rewards_points_wrapper -->
			
			<a class="redeem_button">Rewards</a>
			
			<a class="redeem_button">Milestones</a>
			
			</div><!-- inner_section -->
			
			<?php include('loyalty-feed.php');?>
			
		
		
	</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>