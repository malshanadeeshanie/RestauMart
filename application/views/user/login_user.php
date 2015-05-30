<!DOCTYPE HTML>
<html>
	
	<head>
		<div class="wrap">
			<div class="content">
						<div class="top-grids">
							<div class="top-grid-login">
								<h3>LOG IN</h3>
								<!-- Simple Login - START -->
								<?php if($error==1)
        						{
           					echo '<p>username / password did not match</p>';
        						}
								?>
								<form action ="<?php base_url()?>login" method="post" class="col-md-12">
									<div class="form-group">
										<input type="text" name="username" placeholder="Username" required data-validation-required-message="Please enter your username." class="form-control input-lg" placeholder="Username">
									</div>
									<div class="form-group">
										<input type="password" name="password" placeholder="Password" required data-validation-required-message="Please enter your password." class="form-control input-lg" placeholder="Password">
									</div>
									
									<div class="form-group">
										<button  type="submit" value="Login" class="btn btn-primary btn-lg btn-block">Log In</button>
										
									</div>
								</form>
								<!-- Simple Login - END -->
								
							</div>
							
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						
						
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
					<p>Restaurent Management System &#169; 2015 | All Rights Reserved </p>
			</div>
		</div>
	</body>
</html>

