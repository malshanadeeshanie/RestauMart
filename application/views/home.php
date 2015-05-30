<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
								<h3>Welcome</h3>
								<img src="http://localhost/RestauMart/asserts/images/slider1.jpg" title="image-name" />
								<a href="#">Read more</a>
							</div>
							<div class="top-grid">
								<h3>Our history</h3>
								<img src="http://localhost/RestauMart/asserts/images/slider2.jpg" title="image-name" />
								<a href="#">Read more</a>
							</div>
							<div class="top-grid" id="last-grid">
								<h3>Our Events</h3>
								<img src="http://localhost/RestauMart/asserts/images/slider3.jpg" title="image-name" />
								<a href="#">Read more</a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
						<div class="mid-grids">
							<div class="mid-grid">
								<h3>About us</h3>
								<span>Curabitur condimentum erat non ultricies covlis augue turpis varius orci sed.Sed ultrices posere mauris nec volutpat.</span>
								<p>Proin lobortis erat sed metus interdum vel is all si aliquetsil purus cursus. Sed lacus erat bibnioum in rutrumriCurabitur condimentum erat non i sed.Sed ultrices posere mauris nec volutpat. ve asl luctus id libero.Suspendis alelri interdum poatill aliquet. Nunc molestie felis quis turis fringilla alryjhl tincunt. Nulla facilisi. Sed ac imperdiet sem.</p>
								<p>Curabitur condimentum erat non ultricies covlis augue turpis varius orci sed.Sed ultrices posere mauris nec volutpat.</p>
								<a class="button" href="#">Read more</a>
							</div>
							<div class="mid-grid">
								<h3>Services</h3>
								<p>Curabitur condimentum erat non ultricies covlis augue turpis varius orci sed.Sed ultrices posere mauris nec volutpat.</p>
								<ul>
									<li><a href="#">Phasellus in urna</a></li>
									<li><a href="#">Vestibulum vitae lorem</a></li>
									<li><a href="#">augue turpis varius orci</a></li>
									<li><a href="#">sed.Sed ultrices posere</a></li>
									<li><a href="#">Phasellus in urna</a></li>
									<li><a href="#">Vestibulum vitae lorem</a></li>
								</ul>
								<a class="button" href="#">Read more</a>
							</div>
							<div class="mid-grid" id="last-grid1">
								<h3>Latest-News</h3>
								<p>Curabitur condimentum erat non ultricies covlis augue turpis varius orci sed.Sed ultrices posere mauris nec volutpat.</p>
								<div class="latest-news-grid">
									<div class="latest-news-pic">
										<img src="http://localhost/RestauMart/asserts/images/n1.jpg" title="imag-name" />
									</div>
									<div class="latest-news-info">
										<a href="#">jan 21.01.2013</a>
										<p>Interdum vel is all si aliquetsil purus cursus. Sed lacus erat bibnioum in rutrumri ve asl luctus id libero</p>
									</div>
									<div class="clear"> </div>
								</div>
								<div class="latest-news-grid">
									<div class="latest-news-pic">
										<img src="http://localhost/RestauMart/asserts/images/n2.jpg" title="imag-name" />
									</div>
									<div class="latest-news-info">
										<a href="#">jan 21.01.2013</a>
										<p>Interdum vel is all si aliquetsil purus cursus. Sed lacus erat bibnioum in rutrumri ve asl luctus id libero</p>
									</div>
									<div class="clear"> </div>
								</div>
								<a class="button" href="#">Read more</a>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="bottom-grids">
							<div class="bottom-grid-videos">
								<h3>Watch the Video</h3>
								<div class="video-grid">
									<img src="http://localhost/RestauMart/asserts/images/v1.jpg" title="video-name" />
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at accumsan justo. Vivamus eget volpat lacus nec tristique leoestibulum.</p>
								</div>
								<div class="video-grid">
									<img src="http://localhost/RestauMart/asserts/images/v2.jpg" title="video-name" />
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at accumsan justo. Vivamus eget volpat lacus nec tristique leoestibulum.</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="tips">
								<h3>Cooking Tips</h3>
								<div class="menu_container">
									<p class="menu_head">Cooking Tip1<span class="plusminus">+</span></p>
										<div class="menu_body" style="display: none;">
										<p>containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										</div>
									<p class="menu_head">Cooking Tip2<span class="plusminus">+</span></p>
										<div class="menu_body" style="display: none;">
										<p>theonlytutorials.com is providing a great varitey of tutorials and scripts to use it immediate on any project!</p>
										</div>
								</div>
							</div>
						<script type="text/javascript">
							$(document).ready(function(){
								$(".menu_body").hide();
								//toggle the componenet with class menu_body
								$(".menu_head").click(function(){
									$(this).next(".menu_body").slideToggle(600); 
									var plusmin;
									plusmin = $(this).children(".plusminus").text();
									
									if( plusmin == '+')
									$(this).children(".plusminus").text('-');
									else
									$(this).children(".plusminus").text('+');
								});
							});
						</script>
							<div class="clear"> </div>
						</div>
				</div>
			<!---End-content---->
		</div>
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

