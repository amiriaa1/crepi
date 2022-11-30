<?php

include_once('header.php');	

echo'
          
            
            <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>contact us</h2>
						<ul class="breadcrumbs">
							<li><a href="index">Home</a></li>
							<li>contact us</li>
						</ul>
					</div>
					<a href="#l" class="btn btn-primary get-in-touch" data-text="contact us"><i class="icon-telephone114"></i>contact us</a>
				</div>
			</section>
            
			
            
			
			<!-- CONTACT US -->
            <section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 animate fadeInLeft">
							<h3>Sales inquiries</h3>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<img src="images/sales-quries-img.jpg" class="quries-img" alt="">
									<div class="height-20"></div>
								</div>
								<div class="col-md-8 col-sm-8">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into</p>
								</div>
							</div>
							<div class="height-20"></div>
							<h3>follow us</h3>
							<ul class="social">
								<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
								<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
								<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
								<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
							</ul>
							<div class="height-50"></div>
						</div>
						<div class="col-md-6 col-sm-6 animate fadeInRight">
							<p class="success" id="success" style="display:none;"></p>
							<p class="error" id="error" style="display:none;"></p>
						
							<form class="contact-form" name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="name" name="contact_name" id="contact_name" class="input">
									</div>
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="email" name="contact_email" id="contact_email" class="input">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="mobile" name="contact_phone" id="contact_phone" class="input">
									</div>
								</div>
								<textarea data-delay="500" class="required valid" placeholder="body" name="message" id="message"></textarea>
								<button class="btn btn-primary" name="" type="submit" data-text="send" onClick="validateContact();">send</button>
							</form>
						</div>
					</div>
				</div>
			</section><!-- / COMPANY OVERVIEW -->
			
			
			
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19870.359700059515!2d-0.143242!3d51.49863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bfb71c5077df277!2zNTHCsDI5JzU1LjEiTiAwwrAwOCczNS43Ilc!5e0!3m2!1sen!2sus!4v1669104741962!5m2!1sen!2sus" width="1900" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			
			
			';
			
      	include_once('footer.php');
            echo'
		
            
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script src="js/jquery-2.2.0.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/common.js"></script>
		<script src="js/scripts.js"></script>
		
		<!-- Map (include map api only once)
		============================================= -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
		<script src="js/map.js"></script>
		
    </body>
</html>
';
?>