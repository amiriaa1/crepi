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

    <link rel="stylesheet" href="app.css">
            
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
			  
			  
			include_once('demo.php');	
					
			
			
			
			
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