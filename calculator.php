<?php

if(isset($_POST['amount'])){
	$amountrr=$_POST['amount'];
			$percentage=4.8;
            $totalWidth=$amountrr;
            $amount = ($percentage / 100) * $totalWidth;
			}
			if(isset($_POST['referral'])){
	$referral=$_POST['referral'];
			$percentage=0.5;
            $totalWidth=$referral;
            $amount2 = ($percentage / 100) * $totalWidth;
			}
		
include_once('header.php');		
echo'<link rel="canonical" href="https://buynex.info/calculator" />';
echo'

    
            
            <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Calculator</h2>
						<ul class="breadcrumbs">
							<li><a href="index">Home</a></li>
							<li>Calculator</li>
						</ul>
					</div>
					<a href="#l" class="btn btn-primary get-in-touch" data-text="contact us"><i class="icon-telephone114"></i>contact us</a>
				</div>
			</section>
            
			  ';
			  
			  
			  
			//include('nesting.html');
			echo'
          

			
			<!-- CONTACT US -->
            <section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 animate fadeInLeft">
							<h3>Calculator</h3>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<form class="contact-form" name="contact_form" id="contact_form" method="post" action="#">
									<div class="height-20"></div>
								</div>
								
								<div class="height-20"></div>
						<input type="text" data-delay="300" placeholder="amount" name="amount" class="input"> intrest rate : % 4.8  <br>
						<button class="btn btn-primary" name="submit" type="submit" data-text="Calculate">Calculate</button>
							</form>
						<div class="height-50"></div><h3>referral bonus Calculator</h3>
						<form class="contact-form" name="contact_form" id="contact_form" method="post" action="#">
							<input type="text" data-delay="300" placeholder="referral" name="referral" class="input"> intrest rate : % 0.5  <br>
							<button class="btn btn-primary" name="submit" type="submit" data-text="Calculate">Calculate</button>
							</form>
							
							
							
						</div>
					<br>
						';
						
						if(isset($_POST['amount'])){
							$newamp2=number_format($amount);
							echo '<center>Your monthly profit according to the investment amount is : '.$newamp2.'';
						}
						
						if(isset($_POST['referral'])){
						$newamp=number_format($amount2);
							echo '<center>Your referral monthly profit according to the referral investment amount is : '.$newamp.'';
						}
echo'						
						
						<div class="col-md-6 col-sm-6 animate fadeInRight">
							
						
						</div>
					</div>
				</div>
			</section><!-- / COMPANY OVERVIEW -->
			
			
			
			
			
			
			
			
      		<footer id="footer">
				<div class="container">
					<div class="footer-top clearfix">
						
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="footer-logo animate fadeInLeft"><a href="index"><img src="images/11.jpg" alt=""></a></div>
							</div>
							<div class="col-md-9 col-sm-9">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into</p>
							</div>
						</div>
					
						<div class="height-50"></div>
						
						<div class="footer-left">
							<div class="footer-address-widget clearfix">
								<ul>
									<li><i class="icon-telephone114"></i>001156665<a href="mailto:info@info.com">info@info.com</a></li>
									<li><i class="icon-icons74"></i>lv23<span>cupertino</span></li>
								</ul>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="usefull-links-widget clearfix">
										<h4>Usefull Links</h4>
										<ul>
											<li><a href="index">Home</a></li>
											<li><a href="about-us">Home</a></li>

										</ul>
										<ul>
											<li><a href="services">Home</a></li>
											<li><a href="services">Home</a></li>

										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="twitter-widget clearfix">
										<h4>Twitter Feeds</h4>
										<div class="tweet">
											<i class="icon-twitter-1"></i>
											<p><a href="#">Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore. </a>
											<span>about a month ago</span>
											</p>
										</div>
										<div class="tweet">
											<i class="icon-twitter-1"></i>
											<p><a href="#">Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</a>
											<span>about a month ago</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer-right">
							<div class="newsletter-widget">
								<h4>Our Newsletter</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adi pisi cing elit, sed do eiusmod tempor exercitationemut labore.</p>
								<div class="form">
									<p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
									<p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
									<form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
										<input type="text" data-delay="300" placeholder="name" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
										<input type="text" data-delay="300" placeholder="email" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
										<button class="btn btn-primary" name="Subscribe" type="submit" data-text="submit" onClick="validateSubscription();">submit</button>
									</form>
								</div>
								<ul class="social">
									<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
									<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
									<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
									<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6"><p>Coyright © 2022 Amir. All rights reserved.</p></div>
							 
						</div>
					</div>
				</div>
				
			</footer>
			
			
			
            
		
		<script src="js/jquery-2.2.0.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/common.js"></script>
		<script src="js/scripts.js"></script>
		
		
		<script src="https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
		<script src="js/map.js"></script>
		
    </body>
</html>





';




?>