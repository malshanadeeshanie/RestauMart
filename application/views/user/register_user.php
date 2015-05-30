<?php echo validation_errors(); ?>
<div style="background:red;color:white;">

</div>

<?php echo form_open(base_url().'user/register'); ?>

<!DOCTYPE HTML>
<html>
	
	<head>
		<div class="wrap">


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
										<img src="http://localhost/RestauMart/asserts/images/find_user.png" class="user-image img-responsive"/>
										</li>
										<li  >
											<a class="active-menu"  href="<?=base_url()?>user/register"><i class="fa fa-user fa-3x"></i> Customer </a>
										</li>																				  						 
										<li  >
											<a   href="<?=base_url()?>user/RegRest"><i class="fa fa-home fa-3x"></i> Reataurant</a>
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
													<!--form role="form"-->
														<?php echo form_open(base_url().'user/register'); ?>
														<div class="form-group">
															<label>First Name</label>
															<input type="text" name="firstname" required data-validation-required-message="Please enter your first name." class="form-control" />
														</div>
														<div class="form-group">
															<label>Last Name</label>
															<input type="text" name="lastname" required data-validation-required-message="Please enter your last name." class="form-control" />
														</div>
														<div class="form-group">
															<label>Address</label>
															<input type="text" name="address" required data-validation-required-message="Please enter your address." class="form-control" />
														</div>
														<div class="form-group">
															<label>Email</label>
															<input type="text" name="email" value="<?php echo set_value('email'); ?>" required data-validation-required-message="Please enter your email." class="form-control" placeholder="abc@xyz.com" />
														</div>
														<div class="form-group">
															<label>Contact Number</label>
															<input type="text" name="contactnumber" required data-validation-required-message="Please enter your contact number."class="form-control" placeholder="000-0000000" />
														</div>
														<!--
														<div class="form-group">
															<label>Profile Picture</label>
															<input type="file" />
														</div>
														<div class="form-group">
															<label>How can we help you?</label>
															<textarea class="form-control" rows="3"></textarea>
														</div> -->
													<!--/form-->
													<h3>Login Information</h3>
													<!--form role="form"-->
														<div class="form-group">
															<label>Username</label>
															<input type="text" name="username" value="<?php echo set_value('username'); ?>" required data-validation-required-message="Please enter your username." class="form-control" placeholder="Enter Username" />
														</div>
														<div class="form-group">
															<label>Password</label>
															<input type="password" name="password" required data-validation-required-message="Please enter your password." class="form-control" placeholder="Enter Password" />
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control" placeholder="Re-enter Password" />
														</div>
														
														<button type="submit" value="Login" class="btn btn-success">Register Me</button>
														<button type="reset" class="btn btn-primary">Reset Form</button>
														
														<?php echo form_close(); ?>
													<!--/form-->
													

												 
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
				</div>
				<div class="footer">
						<div class="top-to-page">
								<a href="#top" class="scroll"> </a>
								<div class="clear"> </div>
							</div>

							<p>Restaurent Management System &#169; 2015 | All Rights Reserved </p>
					</div>
				
			</body>
		</html>



