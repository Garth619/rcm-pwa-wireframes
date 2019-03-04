<?php //loyalty punchcard
	
	include('functions.php');
	include('header.php');?>
	
	
	<section id="loyalty_punchcard" class="section_template">
		
		<div id="inner_loyalty">
			
			<h1 class="section_title">Free Disposable Pen</h1><!-- section_title -->
			
			<h2 class="loyalty punchcard">Redeem 9 Items And Get The 10th One Free</h2><!-- loyalty -->
			
			<div class="punchcard_wrapper">
				
				<?php echo file_get_contents("" . $path . "/images/punchcard_pattern-01.svg"); ?>
				
				<div class="punch_holes">
					
					<div><span>1</span></div>
					<div><span>2</span></div>
					<div><span>3</span></div>
					<div><span>4</span></div>
					<div><span>5</span></div>
					<div><span>6</span></div>
					<div><span>7</span></div>
					<div><span>8</span></div>
					<div><span>9</span></div>
					<div><span>free</span></div>
						
					
				</div><!-- punch_holes -->
				
			</div><!-- punchcard_wrapper -->
			
			<a class="redeem_button redeem_trigger">
				
				<span>Redeem</span>
				
				<span><?php echo file_get_contents("" . $path ."/images/corner-01.svg"); ?></span>
				
			</a><!-- redeem_button -->
			
		</div><!-- inner_loyalty -->
		
	<span class="pc_bg_wrapper"><?php echo file_get_contents("" . $path . "/images/pc_bg-01.svg"); ?></span><!-- pc_bg_wrapper -->
		
	</section><!-- loyalty_punchcard -->
	
<?php include('redeem_overlay.php');?>
	
<?php include('footer.php');?>