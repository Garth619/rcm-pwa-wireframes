<?php //loyalty milestone
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_main" class="section_template">
		
		<div class="inner_section">
			
			<h1 class="section_title">Rewards Milestones</h1><!-- section_title -->
			
			<h2 class="sub_header">Keep Earning!</h2><!-- sub_header -->
			
<!-- 			<img id="rewards_profile_image" src="<?php echo $path;?>/images/g.jpg"/><!-- rewards_profile_image -->
			
			<div id="rewards_points_wrapper">
				
				total points: 18 / 25
				
				<span id="points_total">18&nbsp;/&nbsp;25</span><!-- profile_points -->
				
				<span id="points_title">Points</span><!-- points_title -->
				
			</div><!-- rewards_points_wrapper -->
			
			<div class="milestone_graph">
				
				<div class="graph_points">
					
					<span class="graph_point"></span><!-- graph_point -->
					<span class="graph_point"></span><!-- graph_point -->
					<span class="graph_point"></span><!-- graph_point -->
					<span class="graph_point"></span><!-- graph_point -->
					<span class="graph_point"></span><!-- graph_point -->
					
				</div><!-- graph_points -->
				
				<span class="graphline"></span><!-- graphline -->
				
				<?php echo file_get_contents("" . $path ."/images/graph_bg.svg"); ?>
				
				<div class="graph_numbers">
					
					<span class="graph_number">5 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number">10 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number">15 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number">20 <span class="points">PTS</span></span><!-- graph_number -->
					<span class="graph_number">25 <span class="points">PTS</span></span><!-- graph_number -->
					
				</div><!-- graph_numbers -->
				
			</div><!-- milestone_graph -->
			
			<?php include('loyalty-feed.php');?>
			
		</div><!-- inner_section -->
		
	</section><!-- loyalty_main -->
	
<?php
	
	include('footer.php');?>