<!DOCTYPE html>
<html lang="en"><head>
	<title> News </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>


 	<script type="text/javascript" src="<?= base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>

	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>1.css">
 </head>
<body >

<?php
foreach ($headerArr as $key=>$value) {
	if($key == 'social'){
		$social = $value;
	}elseif ($key == 'hotLineNumber'){
		$hotLineNumber = $value;
	}elseif ($key == 'openTime'){
		$openTime = $value;
	}else{
		$logo = $value;
	}
}
?>

 	<div class="topheader">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-6 wow jello">
 					<div class="mangxh float-sm-left text-xs-center text-sm-left">
						<a href="<?=$social['linkFacebook']?>"><i class="fa fa-facebook"></i></a>
						<a href="<?=$social['linkTwitter']?>"><i class="fa fa-twitter"></i></a>
						<a href="<?=$social['linkPinterest']?>"><i class="fa fa-pinterest"></i></a>
						<a href="<?=$social['linkGooglePlus']?>"><i class="fa fa-google-plus"></i></a>
 					 </div>
 					<div class="datban">
 						<?=$hotLineNumber['hotlineText']?> : <?=$hotLineNumber['hotlineNumber']?>
 					 </div>
 				</div>
 				<div class="col-sm-6 ">
 					<div class="datban openingtop float-sm-right text-sm-left text-xs-center">
						<?=$openTime['openText']?> : <?=$openTime['openTime']?>
 					</div>
 				</div>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het topheader  -->
 	 	<div class="logovamenu">
	    <nav class="navbar navbar-light  fontroboto">
	    	<div class="container">
			      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">

			      </button>
			      <div class="collapse navbar-toggleable-xs" id="mtren">
			        <a class="navbar-brand text-xs-center text-sm-left" href="#"><img src="<?=$logo?>" alt=""></a>

			        <ul class="nav navbar-nav float-sm-right">
			          <li class="nav-item">
			            <a class="nav-link" href="index.html">Home  </a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="about.html">About</a>
			          </li>
			          <li class="nav-item active">
			            <a class="nav-link" href="news.html">News</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="thucdon.html">Menu</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="contact.html">Contact</a>
			          </li>
			         <li class="nav-item datbanmenu">
			            <a class="nav-link btn btn-warning wow bounce" data-wow-iteration="3" href="#" >Reservation</a>
			          </li>
			        </ul>
			      </div>
	      </div> <!-- het container -->
	    </nav>
 	</div> <!-- het logo va menu -->

	<div class="tieudenews">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center wow  flipInY" data-wow-delay="0s">
							<div class="tdtintuchome">
								<span class="fontdancing">
									Tips For New Dishes
									<?php
									//lay uri
									 $uri = $_SERVER['REQUEST_URI'];
									 $uri = explode('/',$uri);
									 $currentPage = end($uri);
									 if(is_numeric( $currentPage)) {

									 }else{
									 	$currentPage = 1;
									 }
									?>
								</span>
								<h2 class="fontroboto">Latest News</h2>
							</div>
						
				</div>
			</div>
		</div>
 	</div>   <!-- HET TIEDE DE NEWS -->

	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<?php foreach ($newsList as $value){?>
					<div class="mottinchuan mb-3  wow  fadeInUp">

						<a href="<?=base_url() ?>main/newsDetail/<?=$value['id']?>"><img src="<?=$value['image']?>" alt=""></a>
						<a href="<?=base_url() ?>main/newsDetail/<?=$value['id']?>" class="tieudetin1 fontoswarld"><?=$value['title']?></a>
						<div class="ngaythang1"><?=date('d/m/Y - G:i - A',$value['created_at']) ?>  In <span class="vang"><?=$value['category_name'] ?></span></div>
						<p class="fontroboto"><?=$value['quote'] ?></p>

						<div class="docthem mb-2">
<!--							<div class="like float-xs-right fontroboto">10 like</div>-->
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>
					<?php } ?>

					
					<nav class="phantrang mb-3  wow  fadeInUp">
						<ul class="pagination">
							<?php if($currentPage-1 > 0) {?>
							<li class="pre">
								<a href="<?=base_url(); ?>Main/page/<?=$currentPage-1; ?>" aria-label="Previous">
									<span aria-hidden="true">&laquo; Previous</span>
 								</a>
							</li>
							<?php } ?>
							<?php for($i = 1; $i <= $totalPage; $i++) {
								if ($i == $currentPage) { ?>
									<li class="current"><?=$i; ?></li>
								<?php }else{ ?>
									<li><a href="<?=base_url(); ?>Main/page/<?=$i; ?>"><?=$i; ?></a></li>
							<?php } } ?>
							<?php if($currentPage < $totalPage) { ?>
							<li class="next">
								<a href="<?=base_url(); ?>Main/page/<?=$currentPage+1; ?>" aria-label="Previous">
									<span aria-hidden="true">Next &raquo; </span>
 								</a>
							</li>
							<?php } ?>



						</ul>
					</nav>

				</div> <!-- HET COT 9 -->
				<div class="col-sm-3">
					<div class="phansearch  wow  fadeInUp">
							 <input type="text" class="form-control phansearchct"  placeholder="Search">
							 
							<button type="submit" class="iconsearch"><i class="fa fa-search"></i></button>
						
					</div>

					<div class="khoilistlink my-2  wow  fadeInUp">
						<h3 class="fontoswarld">Category </h3>
						<ul class="fontroboto">
							<?php foreach ($categoryList as $category) { ?>
								<li><a href="<?= base_url() ?>main/category/<?= $category['id'] ?>"><?= $category['category_name'] ?></a></li>
							<?php } ?>
						</ul>
					</div><!--  	het listlink  -->


			</div>
		</div>		

	</section><!--  het noidung tin -->









	<div class="footertop">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 cotf1 mb-2 wow fadeInUp" data-wow-delay="0s">
					<a href=""><img src="<?=base_url()?>images/logofoot.png" alt="" class="logof"></a>
					<p>Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont tiramisu croissant cake.</p>
					<div class="motdong">
						<i class="fa fa-paper-plane-o"></i>
						<span class="textmd">Address : 44 New Design Street,<br>
						Melbourne 005</span>
					</div>
					<div class="motdong">
						<i class="fa fa-phone"></i>
						<span class="textmd">Phone : (01) 800 433 633</span>
					</div>
					<div class="motdong">
						<i class="fa fa-envelope-o"></i>
						<span class="textmd">Email : info@Example.com</span>
					</div>
					

				</div>  <!-- HET COTF1 -->
				<div class="col-sm-2 push-sm-1 cotf2 mb-2  wow fadeInUp" data-wow-delay="0.1s">
					<h2 class="tdft">Userfull Link </h2>
					<ul>
						<li><a href="">About company </a></li>
						<li><a href="">Reservation  </a></li>
						<li><a href="">Help center  </a></li>
						<li><a href="">Our Blog  </a></li>
						<li><a href="">Careers  </a></li>
						<li><a href="">Contact us  </a></li>
					</ul>
				</div>  <!-- HET COTF2 -->
				<div class="col-sm-3  cotf3 mb-2 wow  fadeInUp" data-wow-delay="0.2s">
					<h2 class="tdft">Userfull Link 2 </h2>
					<ul>
						<li><a href="">About company </a></li>
						<li><a href="">Reservation  </a></li>
						<li><a href="">Help center  </a></li>
						<li><a href="">Our Blog  </a></li>
						<li><a href="">Careers  </a></li>
						<li><a href="">Contact us  </a></li>
					</ul>
				</div>  <!-- HET COTF3 -->
				<div class="col-sm-3  cotf4 wow  fadeInUp" data-wow-delay="0.3s">
					<h2 class="tdft">Openning hours </h2>
					<div class="openning1">
						<div class="phai float-xs-right">9:00 am - 23:00 pm</div>
						<div class="trai">Mon — Fri</div>
					</div>
					 <div class="openning1">
						<div class="phai float-xs-right">10:00 am - 23:00 pm</div>
						<div class="trai">Saturday </div>
					</div>
					 <div class="openning1">
						<div class="phai float-xs-right">10:00 am - 23:00 pm</div>
						<div class="trai">Sunday   </div>
					</div>
					 
					<p>Note: Arctica Restaurant is closed on holidays.</p>
				</div>  <!-- HET COTF4 -->
				
			</div>
		</div>
	</div>  <!-- HET FOOTERTOP -->

	<div class="footerbottom text-xs-center fontroboto wow  fadeInUp" data-wow-delay="0s">
		 Copyrights © 2015  All Rights Reserved. 
	</div>

</body>
</html>
