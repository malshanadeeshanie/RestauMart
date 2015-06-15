
<!DOCTYPE HTML>
<html>
	
	<head>
		<div class="wrap">
     		  <!----End-top-header----->
			<!---End-header---->
			<!---start-content---->
			<div class="content">
						<div class="top-grids">
							
							
							
							<div class="top-grid">
							<?php 
								 foreach ($restaurants->result() as $row)  
								{  
													
									echo $row->firstname;
									echo $row->firstname;  
									echo $row->lastname;
									echo $row->address;
								}  
							?>
								<a href="#">Read more</a>
							</div>
							
							<div class="clear"> </div>
						</div>
												
												

										 
			
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



<!--<html>  
    
   <table border="1">  
        
          
         
       
   </table>  
  

</html> -->