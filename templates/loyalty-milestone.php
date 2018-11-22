<?php //loyalty milestone
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
	<div id="rewards_points_wrapper">
				
			<span class="milestone_points_total">18&nbsp;/&nbsp;25</span><!-- profile_points -->
				
			<span class="milestone_points_title">Points</span><!-- points_title -->
				
	</div><!-- rewards_points_wrapper -->
			
			<div class="milestone_graph">
				
				<div class="graph_points">
					
					<span class="graph_point one"></span><!-- graph_point -->
					<span class="graph_point two"></span><!-- graph_point -->
					<span class="graph_point three"></span><!-- graph_point -->
					<span class="graph_point four active"></span><!-- graph_point -->
					<span class="graph_point five"></span><!-- graph_point -->
					
				</div><!-- graph_points -->
				
				<span class="graphline"></span><!-- graphline -->
				
				<?php echo file_get_contents("" . $path ."/images/graph_bg.svg"); ?>
				
				<div class="graph_numbers">
					
					<span class="graph_number one">05 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number two">10 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number three">15 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number four active">20 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number five">25 <span class="points">PTS</span></span><!-- graph_number -->
					
				</div><!-- graph_numbers -->
				
			</div><!-- milestone_graph -->
			
			<div class="milestone_products_wrapper">
				
				<div class="milestone_left milestone_button">
					
					<?php echo file_get_contents("" . $path . "/images/arrow.svg"); ?>
					
				</div><!-- milsetone_button -->
				
				<div class="milestone_products_slider">
					
					<div class="milestone_single_slide">
						
						<span class="milestone_slide_title">Next Milestone:<br/> Free Edible</span><!-- milestone_slide_title -->
						
						<span class="milestone_slide_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</span><!-- milestone_slide_description -->
						
					</div><!-- milestone_single_slide -->
					
				</div><!-- milestone_products_slider -->
				
				<div class="milestone_right milestone_button">
					
					<?php echo file_get_contents("" . $path . "/images/arrow.svg"); ?>
					
				</div><!-- milsetone_button -->
				
			</div><!-- milestone_products_wrapper -->
			
			</div><!-- inner_section -->
			
		</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>