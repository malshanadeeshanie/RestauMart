<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	
	<head>
		<meta charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

			<!-- BOOTSTRAP STYLES-->
		<link href="http://localhost/RestauMart/asserts/css/bootstrap.css" rel="stylesheet" />
		 <!-- FONTAWESOME STYLES-->
		<link href="http://localhost/RestauMart/asserts/css/font-awesome.css" rel="stylesheet" />
		 <!-- MORRIS CHART STYLES-->
		<link href="http://localhost/RestauMart/asserts/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
			<!-- CUSTOM STYLES-->
		<link href="http://localhost/RestauMart/asserts/css/custom.css" rel="stylesheet" />
		 <!-- GOOGLE FONTS-->
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<title>cuision Website Template | Home :: Register</title>
		<link href="http://localhost/RestauMart/asserts/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		 <script type="text/javascript" src="http://localhost/RestauMart/asserts/js/move-top.js"></script>
		<link href="http://localhost/RestauMart/asserts/css/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="http://localhost/RestauMart/asserts/js/jquery.easing.1.3.js"></script> 
		    <script type="text/javascript" src="http://localhost/RestauMart/asserts/js/camera.min.js"></script>
				<script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '500px',
					pagination: false,
				});
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	</head>
	
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<!----start--imageslider----->
		       <!--start-image-slider---->
								<div class="slider"  id="top">					     
										<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">									           
											      <div data-src="http://localhost/RestauMart/asserts/images/slider1.jpg">  </div> 
											      <div data-src="http://localhost/RestauMart/asserts/images/slider2.jpg">  </div>
											      <div data-src="http://localhost/RestauMart/asserts/images/slider3.jpg">  </div>
											      <div data-src="http://localhost/RestauMart/asserts/images/slider4.jpg">  </div>
											</div>
							   		   <div class="clear"> </div>					       
							 		</div>
		      			<!--End-image-slider---->
		        <div class="clear"> </div>
		
			
			<div class="wrap">
				<div class="container">
     		 <div class="top-header">
     		 	

				
				<?php if($this->session->userdata('userID')){ ?>

				<p><a type="button" class="btn btn-success pull-right" href="<?=base_url()?>user/logout">Logout</a></p>
				<?php } else { ?>
				<!--button type="button" class="btn btn-success pull-right">Log in</button-->
				<p><a type="button" class="btn btn-success pull-right" href="<?=base_url()?>user/login">Login</a></p>
				<p><a type="button" class="btn btn-success pull-right" href="<?=base_url()?>user/register">Register</a></p>
				<?php } ?>

     		 	<div class="clear"> </div>
     		 	<div class="main-header">
     		 		<div class="logo">
     		 			<h1><a href="home.php"><img src="http://localhost/RestauMart/asserts/images/restaumartlogo.jpg" title="logo" /></a></h1>
     		 		</div>
     		 		<div class="top-nav">
     		 			<ul>
     		 				<li class="active"><a href="home.php">Home</a></li>
     		 				<li><a href="about.php">About us</a></li>
     		 				<li><a href="tips.php">Cooking tips</a></li>
     		 				<li><a href="services.php">Services</a></li>
     		 				<li><a href="gallery.php">Gallery</a></li>
     		 				<li><a href="contact.php">Contact</a></li>
     		 				<div class="clear"> </div>
     		 			</ul>
     		 		</div>
     		 		<div class="clear"> </div>
     		 	</div>
     		 </div>
     	
			

			<!---End-content---->
		</div>
		<!---End-wrap---->
		</div>
	
		</div>
	</body>
</html>

