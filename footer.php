<?php


include_once('main.php');
$fee=new ManageFees();


$query='ORDER BY aid DESC LIMIT 3';
$StudentList = $fee->GetStudentList3($query);

echo'

<footer id="footer">
				<div class="container">
					<div class="footer-top clearfix">
						
						<div class="row">
							<div class="col-md-3 col-sm-3">
						
		<div class="footer-logo animate fadeInLeft"><a href="index"><img src="images/logo2.png" alt=""   style="width:170px;height:100px;"></a></div>
							</div>
							<div class="col-md-9 col-sm-9">
								<p  dir="ltr" align="left">Hasn t the time come to save the investment industry, this cradle of kindness from the clutches of scam and fraud sites??
What is wrong with working honestly that others avoid?
Let s benefit each other, let s make each other happy.
Buynex will not bring you fabulous wealth, but it will help you to not disturb your peace and live a better life</p>
							</div>
						</div>
					
						<div class="height-50"></div>
						
						<div class="footer-left">
							<div class="footer-address-widget clearfix">
								<ul>
									<li><i class="icon-telephone114"></i>44-7700-312098+<a href="mailto:support@buynex.info">support@buynex.info</a></li>
									<li><i class="icon-icons74"></i>lv23<span>London</span></li>
								</ul>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="usefull-links-widget clearfix">
										<h4>Blog last posts</h4>
										<ul>
										';
										foreach($StudentList as $studentProp)
					{
										echo'
											<li   dir="ltr" align="left"><a href="blog-detail?GUID='.$studentProp['aid'].'">'.$studentProp['subject'].'</a></li>
											
';
					}
echo'
										</ul>
										
									</div>
								</div>
								
								
								
								
							</div>
						</div>
						<div class="footer-right">
							
							<ul class="social">
									<li class="animate bounceIn"><a href="https://www.facebook.com/profile.php?id=100086983247392&mibextid=ZbWKwL" class="facebook"><i class="icon-facebook-1"></i></a></li>
									<li class="animate bounceIn" data-delay="100"><a href="https://twitter.com/buynex1?s=09" class="twitter"><i class="icon-twitter-1"></i></a></li>
									<li class="animate bounceIn" data-delay="200"><a href="https://instagram.com/buynex.official" class="google-plus"><i class="icon-instagram"></i></a></li>
									<li class="animate bounceIn" data-delay="300"><a href="https://www.reddit.com/u/buynex?utm_medium=android_app&utm_source=share" class="linkedin"><i class="icon-reddit"></i></a></li>

									<li class="animate bounceIn" data-delay="300"><a href="https://www.youtube.com/@buynexofficial" class="linkedin"><i class="icon-youtube"></i></a></li>
								</ul>
								
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6"><p>Coyright © 2022 BuyNex. All rights reserved.</p></div>
							 
						</div>
					</div>
				</div>
				
			</footer>
			
			
			
            
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script src="js/jquery-2.2.0.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/common.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/hero-slider.js"></script>
		
    </body>
</html>


';


?>