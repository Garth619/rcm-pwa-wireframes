<?php //leave a review
	
	include('functions.php');
	include('header.php');?>
	
	<section id="leave_a_review" class="section_template">
		
		<div class="inner_leave_review">
		
			<span class="review_verbiage">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><!-- review_verbiage -->
			
			<div class="review_social_media">
				
				<a class="" href="" target="_blank" rel="noopener">
					
					<?php echo file_get_contents("" . $path . "/images/sm-03.svg"); ?>
					
					<span class="sm_title fb">Facebook</span>
					
				</a>
				
				<a class="" href="" target="_blank" rel="noopener">
					
					<?php echo file_get_contents("" . $path . "/images/sm-01.svg"); ?>
					
					<span class="sm_title google">Google+</span>
					
				</a>
				
				<a class="" href="" target="_blank" rel="noopener">
					
					<?php echo file_get_contents("" . $path . "/images/sm-02.svg"); ?>
					
					<span class="sm_title yelp">Yelp</span>
					
				</a>
				
			</div><!-- review_social_media -->
			
			
			<div class="feedback_wrapper">
				
				<h2 class="feedback_header">Do You Have Feedback?</h2>
				
				<span class="feedback_subheader">Contact Management</span><!-- feedback_subheader -->
				
				<div class="review_form">
					<form>
					<ul>
						<li>
							<label>First Name</label>
							<input type="text">
						</li>
						<li>
							<label>Last Name</label>
							<input type="text">
						</li>
						<li>
							<label>Email</label>
							<input type="text">
						</li>
						<li>
							<label>Phone</label>
							<input type="text">
						</li>
						<li>
							<label>Leave Us Feedback</label>
							<textarea type="text"></textarea>
						</li>
						<li>
							<input type="submit" value="Submit">
						</li>
					</ul>
					</form>
					
					
				</div><!-- review_form -->
				
			</div><!-- feedback_wrapper -->
		
		</div><!-- inner_leave_review -->
		
	</section><!-- leave_a_review -->

	
<?php include('footer.php');?>