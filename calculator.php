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
			
echo'




<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <base href="" />

	
	 <meta charset="utf-8">
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>buynex - contact us</title>
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">

	 
	
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
     <meta name="format-detection" content="telephone=no">
	 
     

     <link rel="icon" type="image/png" href="images/favicon.png">
     
	 
     
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300,600,700" rel="stylesheet" type="text/css">
     
    
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="403477c5-f1d2-4a1c-8c74-5e971494a376";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

	
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- advisor -->
	<link rel="stylesheet" href="css/advisor.css">

	<!-- plugins -->
	<link rel="stylesheet" href="css/plugins.css">	

	<!-- advisor color -->
	<link rel="stylesheet" href="css/color-default.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<script src="js/modernizr.js"></script>
	
	
</head>
    <body class="fixed-header">
	    	
			
			
			
			
			<div id="loader" class="loader">
				<div class="spinner">
				  <div class="double-bounce1"></div>
				  <div class="double-bounce2"></div>
				</div>
			</div>
			
			
            
        
            <header id="header">
            	
				<div class="container">
						
					<!-- TOP BAR -->
					<div class="top-bar clearfix">
						<p>We have over 15 years of experience</p>
						<ul>
							<li><i class="icon-telephone114"></i> +1123456779</li>
							<li><i class="icon-icons74"></i>cupertino</li>
							<li><i class="icon-icons20"></i>6am-8pm</li>
						</ul>
					</div>
					<!-- / TOP BAR -->
					
					<!-- HEADER INNER -->
					<div class="header clearfix">
						
						<a href="index" class="logo"><img src="images/12.jpg" alt=""></a>
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
							<span class="sr-only">cahnge</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<div class="search-btn">
							<a href="javascript:void(0);" class="search-trigger"><i class="icon-icons185"></i></a>
						</div>
						
						<div class="search-container">
							<i class="fa fa-times header-search-close"></i>
							<div class="search-overlay"></div>
							<div class="search">
								<form>
									<label>search:</label>
									<input type="text" placeholder="">
									<button><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						
						<nav class="main-nav navbar-collapse collapse" id="primary-nav">
							<ul class="nav nav-pills">
								<li><a href="#">Home</a>
									
								</li>
								<li class="active"><a href="calculator">Calculator</a></li>
								<li><a href="contact-us">contact us</a></li>
								<li class="dropdown"><a href="blog">Blog</a>
									<li class="dropdown"><a href="http://my.buynex.info/register">sign up</a>
									<li class="dropdown"><a href="http://my.buynex.info">Login</a>
								</li>
								
								
							</ul>
						</nav>
						
					</div><!-- / HEADER INNER -->
					
                </div><!-- / CONTAINER -->
				
            </header><!-- / HERDER -->
            
            
            
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
								
						
						
							
							
						</div>
					
						';
						
						if(isset($_POST['amount'])){
							
							echo '<center>Your monthly profit according to the investment amount is : '.$amount.'$';
						}
						
						if(isset($_POST['referral'])){
							
							echo '<center>Your referral monthly profit according to the referral investment amount is : '.$amount2.'$';
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