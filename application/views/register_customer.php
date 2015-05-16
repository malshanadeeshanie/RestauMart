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
		<link href="css/bootstrap.css" rel="stylesheet" />
		 <!-- FONTAWESOME STYLES-->
		<link href="css/font-awesome.css" rel="stylesheet" />
		 <!-- MORRIS CHART STYLES-->
		<link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
			<!-- CUSTOM STYLES-->
		<link href="css/custom.css" rel="stylesheet" />
		 <!-- GOOGLE FONTS-->
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<title>cuision Website Template | Home :: Register</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		 <script type="text/javascript" src="js/move-top.js"></script>
		<link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
		  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		    <script type="text/javascript" src="js/camera.min.js"></script>
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
											      <div data-src="images/slider1.jpg">  </div> 
											      <div data-src="images/slider2.jpg">  </div>
											      <div data-src="images/slider3.jpg">  </div>
											      <div data-src="images/slider4.jpg">  </div>
											</div>
							   		   <div class="clear"> </div>					       
							 		</div>
		      			<!--End-image-slider---->
		        <div class="clear"> </div>
			<!----End--imageslider----->
			<!----start-top-header----->
			<div class="wrap">
				<div class="container">
     		 <div class="top-header">
				<button type="button" class="btn btn-success pull-right">Log in</button>
     		 	<div class="clear"> </div>
     		 	<div class="main-header">
     		 		<div class="logo">
     		 			<h1><a href="home.php"><img src="images/restaumartlogo.jpg" title="logo" /></a></h1>
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
     		  <!----End-top-header----->
			<!---End-header---->
			<!---start-content---->
			<div class="content">
				<div class="top-grids">
					<div class="top-grid-register">
						<h3>REGISTER</h3>
						<!-- Simple register - START -->
						<nav class="navbar-default navbar-side" role="navigation">
						<div class="sidebar-collapse">
							<ul class="nav" id="main-menu">
							<li class="text-center">
								<img src="images/find_user.png" class="user-image img-responsive"/>
								</li>
								<li  >
									<a class="active-menu"  href="form.html"><i class="fa fa-user fa-3x"></i> Customer </a>
								</li>																				  						 
								<li  >
									<a   href="blank.html"><i class="fa fa-home fa-3x"></i> Reataurant</a>
								</li>	
							</ul>
						   
						</div>
						
					</nav>  
					<!-- /. NAV SIDE  -->
					<div id="page-wrapper" >
					<div id="page-inner">
						<div class="row">
							<div class="col-md-12">
							 <h2>Registration</h2>   
								
							</div>
						</div>
						 <!-- /. ROW  -->
						 <hr />
					   <div class="row">
						<div class="col-md-12">
							<!-- Form Elements -->
							<div class="panel panel-default">
								<div class="panel-heading">
									Customer Registration
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-8">
											<h3>Basic Information</h3>
											<form role="form">
												<div class="form-group">
													<label>First Name</label>
													<input class="form-control" />
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input class="form-control" />
												</div>
												<div class="form-group">
													<label>Address</label>
													<input class="form-control" />
												</div>
												<div class="form-group">
													<label>Email</label>
													<input class="form-control" placeholder="abc@xyz.com" />
												</div>
												<div class="form-group">
													<label>Contact Number</label>
													<input class="form-control" placeholder="000-0000000" />
												</div>
												<div class="form-group">
													<label>Profile Picture</label>
													<input type="file" />
												</div>
												<div class="form-group">
													<label>How can we help you?</label>
													<textarea class="form-control" rows="3"></textarea>
												</div>
											</form>
											<h3>Login Information</h3>
											<form role="form">
												<div class="form-group">
													<label>Username</label>
													<input class="form-control" placeholder="Enter Username" />
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" placeholder="Enter Password" />
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" class="form-control" placeholder="Reenter Password" />
												</div>
												
												<button type="submit" class="btn btn-success">Register Me</button>
												<button type="reset" class="btn btn-primary">Reset Form</button>

											</form>
											

										 
			</div>
										
										
							
							</div>
							 <!-- End Form Elements -->
						</div>
					</div>
						<!-- /. ROW  -->
						
			</div>
					 <!-- /. PAGE INNER  -->
					</div>
				 <!-- /. PAGE WRAPPER  -->
								<div class="clear"> </div>
			</div>					
			</div>	
		<!---End-Topgrids---->	
				</div>
			<!---End-content---->
		</div>
		<!---End-wrap---->
		</div>
		<div class="footer">
				<div class="top-to-page">
						<a href="#top" class="scroll"> </a>
						<div class="clear"> </div>
					</div>
					<p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</body>
</html>

