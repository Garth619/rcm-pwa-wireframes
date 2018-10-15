<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title></title>
	<meta http-equiv="content-type"
    	content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="<?php echo $path;?>/css/styles.css" type="text/css" media="screen" charset="utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Muli:400,600,700|Oswald:600');

</style>

</head>
<body>

<header>
	
	<div id="header_left">
		
		<a id="logo" href="<?php echo $path;?>">
			
			<?php echo file_get_contents("images/logo-final.svg"); ?>
			
		</a><!-- logo -->
		
	</div><!-- header_left -->
	
	<div id="header_right">
		
		<div id="contact_icon">
			
			<a href="">
				
				<?php echo file_get_contents("images/icon-phone.svg"); ?>
				
			</a>
			
		</div><!-- contact_icon -->
		
		<div id="notifications_wrapper">
			
			<span class="profile_initial">g</span><!-- profile_initial -->
			
			<span class="notification_number">3</span><!-- notification_number -->
			
		</div><!-- notifications -->
		
		<div id="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
		</div><!-- menu_wrapper -->
		
	</div><!-- header_right -->
	
	
	<?php
		
		include('templates/notifications.php');
		include('templates/notifications.php');
	
	?>
	
</header>

