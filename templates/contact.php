<?php //contacts
	
	include('functions.php');
	include('header.php');?>
	
	
<section id="contact" class="section_template">
	
	<div class="contact_inner">
		
		<h1 class="section_title">Contact Us</h1>
		
		<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', '6199253611'); ?>">619.925.3611</a>
		
	</div><!-- contact_inner -->
	
</section><!-- contact -->
	
<?php include('messages.php');?>

<?php include('footer.php');?>