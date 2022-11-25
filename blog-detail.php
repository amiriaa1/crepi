<?php
include_once('header.php');
include_once('main.php');
$fee=new ManageFees();
$id=$_GET['GUID'];
$StudentList = $fee->Getblogdetid($id);
foreach($StudentList as $studentProp)
					{$pic=$studentProp['pic'];
					 $subject=$studentProp['subject'];
					 $body=$studentProp['body'];
					 }
echo'

  <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Blog</h2>
						<ul class="breadcrumbs">
							<li><a href="index">Home</a></li>
							<li>Blog</li>
						</ul>
					</div>
					<a href="contact-us" class="btn btn-primary get-in-touch" data-text="contact us"><i class="icon-telephone114"></i>contact us</a>
				</div>
			</section>
            
			
			
			
				<!-- NEWS CONTENT -->
            <section>
				<div class="container">
					<div class="row">
						<div class="col-md-8 animate fadeInLeft">
							<div class="p-right-30">
							<article class="blog-item">
								<div class="blog-thumbnail">
									<img alt="" src="images/news/large/'.$pic.'">
								</div>
								<div class="blog-content">
								<p dir="ltr" align="left">'.$subject.'</p>
									
									
									<br><br><br>
									
									'.$body.'
									
								
								</div>
							</article>
							
						
			
	</div>
							
						</div>
						
						
					
</div></div>
';


include_once('footer.php');
?>


