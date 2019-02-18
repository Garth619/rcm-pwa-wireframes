<?php //user profile
	
	include('functions.php');
	include('header.php');?>
	
	
	
	<div id="svg_header">
			
		<svg id="header_gradient" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" viewBox="0 0 510.61 234.5">
  <defs>
    <style>
      .header_gradient-cls-1 {
        fill: #c84696;
      }

      .header_gradient-cls-1, .header_gradient-cls-2 {
        opacity: 0.43;
      }

      .header_gradient-cls-2 {
        fill: #ab49b2;
      }

      .header_gradient-cls-3 {
        fill: url(#header-gradient);
      }
    </style>
    <linearGradient id="header-gradient" x1="90.09" y1="-90.17" x2="434.1" y2="253.84" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#c84696"/>
      <stop offset="1" stop-color="#ab49b2"/>
    </linearGradient>
  </defs>
  <title>mobile_header_shapes</title>
  <path class="header_gradient-cls-1" d="M-1,228.63s79,6.59,135.45-60-134.64-49-134.64-49Z"/>
  <path class="header_gradient-cls-2" d="M328.52,185.75s97.1-17.17,182.31,44.26V132.25S398.53,127.63,328.52,185.75Z"/>
  <path class="header_gradient-cls-3" d="M510.79.07H-.14v150s146,130,331,40c69.38-33.75,129.33-30.8,177.17-13.93l2.76,1Z"/>
</svg>

		
	</div><!-- svg_header -->

	
	<section id="user_profile">
		
		<div class="user_profile_inner">
		
			<div class="user_profile_wrapper">
			
				<img src="<?php echo $path;?>/images/g.jpg"/>
				
				<div class="camera_icon">
				
					<?php echo file_get_contents("" . $path . "/images/camera.svg"); ?>
				
				</div><!-- camera_icon -->
			
			</div><!-- user_profile_wrapper -->
			
			<h1 class="user_title">Garrett Cullen</h1><!-- user_title -->
			
			<div class="user_profile_name_wrapper">
				
				<div class="user_profile_single_input">
					
					<span class="user_profile_input_title">First Name</span><!-- user_profile_input_title -->
					
					<div class="user_edit_wrapper">
						
						<span>Edit</span>
						
						<?php echo file_get_contents("" . $path . "/images/edit.svg"); ?>
						
					</div><!-- user_edit_wrapper -->
					
					<input placeholder="Garrett" value="Garrett" type="text">
					
				</div><!-- user_profile_single_input -->
				
				<div class="user_profile_single_input">
					
					<span class="user_profile_input_title">Last Name</span><!-- user_profile_input_title -->
					
					<div class="user_edit_wrapper">
						
						<span>Edit</span>
						
						<?php echo file_get_contents("" . $path . "/images/edit.svg"); ?>
						
					</div><!-- user_edit_wrapper -->
					
					<input placeholder="Cullen" value="Cullen" type="text">
					
				</div><!-- user_profile_single_input -->
				
			</div><!-- user_profile_name_wrapper -->
		
		</div><!-- user_profile_inner -->
		
	</section><!-- user_profile -->


<?php include('footer.php');?>