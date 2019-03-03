<?php
   
   $user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );
	 setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );
	
	 // sets loadscreen animation to just load once
	
?>
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

@import url('https://fonts.googleapis.com/css?family=Libre+Franklin|Muli:400,600,700,900|Oswald:300,400,600');

</style>

<script type="text/javascript" src="<?php echo $path;?>/js/custom-min.js"></script>

</head>
<body>
	
	<?php if( $user_is_first_timer ): ?>
	
		<section id="loadscreen">
	
			<div class="loadscreen_inner">
		
				<img src="<?php echo $path;?>/images/logo-final-01.png"/>
		
				<div class="progress_bar"></div><!-- progress_bar -->
		
			</div><!-- loadscreen_inner -->
	
		</section><!-- loadscreen -->

	<?php endif;?>

<header>
	
	<div class="header_left">
		
		<a class="logo" href="<?php echo $path;?>">
			
			<?php echo file_get_contents("" . $path . "/images/logo-final.svg"); ?>
			
		</a><!-- logo -->
		
	</div><!-- header_left -->
	
	<div class="header_right">
		
		<div class="contact_icon">
			
			<a href="<?php echo $path;?>/templates/contact.php">
				
				<?php echo file_get_contents("" . $path . "/images/icon-phone.svg"); ?>
				
			</a>
			
		</div><!-- contact_icon -->
		
		<div class="notifications_wrapper">
			
			<span class="profile_initial">g</span><!-- profile_initial -->
			
			<span class="notification_number">3</span><!-- notification_number -->
			
		</div><!-- notifications -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
		</div><!-- menu_wrapper -->
		
	</div><!-- header_right -->
	
</header>

<?php
		
		include('notifications.php');
		include('navigation.php');
	
	?>

