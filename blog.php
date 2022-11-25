<?php
include_once('header.php');
include_once('main.php');
$fee=new ManageFees();

$setting = array(
'paged_item' => 2
);

$page = $_GET['page'];
if(empty($page)){$page = 1;} 
$start = ($page - 1) * $setting['paged_item'];
$qstart=$start;

$page_limit=$setting['paged_item'];
$query='ORDER BY aid ASC';
$StudentList = $fee->GetStudentList2($query,$qstart,$page_limit);
$count = count($fee->GetStudentList2($query,NULL,NULL));


			
echo'

            
            
            
            <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Blog</h2>
						<ul class="breadcrumbs">
							<li><a href="#.">Home</a></li>
							<li>Blog</li>
						</ul>
					</div>
					<a href="contact-us" class="btn btn-primary get-in-touch" data-text="contact us"><i class="icon-telephone114"></i>contact us</a>
				</div>
			</section>
            
            
			
			<!-- NEWS CONTENT -->
            <section>
				<div class="container">
				
				';
				
					foreach($StudentList as $studentProp)
					{
				echo'
				
					<article class="blog-item-classic">
						<div class="row">
							<div class="col-md-6 col-sm-6 animate fadeInLeft">
								<div class="blog-thumbnail">
									<a href="news-detail.html"><img alt="" src="images/news/small/'.$studentProp['pic'].'"></a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 animate fadeInRight">
								<div class="blog-content">
									<div class="blog-date">'.$studentProp['atimestamp'].'</div>
									<h3><a href="blog-detail?GUID='.$studentProp['aid'].'">'.$studentProp['subject'].'</a></h3>
									
									<a href="blog-detail?GUID='.$studentProp['aid'].'" class="btn-link">read more</a>
								</div>
							</div>
						</div>
					</article>
					
					
				
			';
			}
			
				if($count - $setting['paged_item'] > 0){
					
					 //count page
    $paged_total = ceil($count / $setting['paged_item']);
    //end page
    $paged_last = $paged_total;
    //mid page
    $paged_middle = $page + 4;
    //starting rating page
    $paged_start = $paged_middle - 4;
    echo'
				
				
                <nav aria-label="navigation">
                    <ul class="pagination my-3 justify-content-center">
					
				
								';
								
								if($page > 1){
								$paged_result = '<li class="page-item"><a class="page-link" href="?page=1">first</a></li>'."\n"; 	
								 
								}
								else{
        $paged_result = '<li class="page-item"><a class="page-link" >first</a></li>'."\n";                                    
    }
	
	//generate last page link
    if($page > 1){
        //calculate last page link     
        $paged_perv = $page - 1;
        //generate last page link
        $paged_result .= '<li class="page-item"><a class="page-link" href="?page='.$paged_perv.'">last page</a></li>'."\n";
    }
    //deactive last page link if last page is first page
    else{
        $paged_result .= '<li class="page-item"><a class="page-link">last page</a></li>'."\n";
    }
	
	
	//generate mid page starting from last 2 page
    for ($i=$paged_start-2; $i<=$paged_middle; $i++){
        //generate link if 0 of <0 dont
        if ($i > 0 && $i <= $paged_last){
            //در حالت انتخاب شده
            if($i == $page){
                $paged_result .= '<li class="page-item active"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>'."\n";
            }
            //normal format
            else{
                $paged_result .= '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>'."\n";
            }
        }
    }
	
	
	//show next page link
    if($page <= $paged_last - 1){
        //calculating next page link
        $paged_next = $page + 1;
        //next page link generate         
        $paged_result .= '<li class="page-item"><a class="page-link" href="?page='.$paged_next.'">next</a></li>'."\n";
    }
    //deactive next page btn if this page is last 
    else{
        $paged_result .= '<li class="page-item"><a class="page-link" ">next</a></li>'."\n";
    }
    
	
	//last page link
    if($page <= $paged_last - 1){ 
        $paged_result .= '<li class="page-item"><a class="page-link" href="?page='.$paged_last.'">end page</a></li>'."\n";
    }
    //if page is last deactive the last BTn
    else{
        $paged_result .= '<li class="page-item"><a class="page-link">end page</a></li>'."\n";
    }
	
	
	
	                      /*
	
								echo'
								<li class="page-item next"><a class="page-link" href="?page='.$paged_perv.'"><i
                                class="fa-duotone fa-angle-double-right"></i></a></li>
                        <li class="page-item prev"><a class="page-link" href="#">
                        
						
						<i
                                class="fa-duotone fa-angle-double-left"></i></a></li>
								';
								
								*/
								echo $paged_result;
								
								echo'
                    </ul>
                </nav>
				';
				}
				else{
    echo 'No page found!'."\n";
}
			
			
			echo'
				
					
					
				</div>
			</section>
			
			
			
			
			
			
			
			<!-- / NEWS CONTENT -->
			
			
			
      		

';
include_once('footer.php');
?>