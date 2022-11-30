<?php
include_once('header.php');	
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
			
			
			
			
			
			
			';
			
      	include_once('footer.php');
            echo'
		
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