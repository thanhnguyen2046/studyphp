<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
<div class="container">
	<?php include 'component/navbar.php'?>

	<div id="slidehome" class="carousel slide slidecon" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slidehome" data-slide-to="0" class="active"></li>
			<li data-target="#slidehome" data-slide-to="1"></li>
			<li data-target="#slidehome" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<?php
			$arrayData = json_decode($arrayData, true);
			$number = 0;
			?>
			<?php foreach ($arrayData as $key => $value) {
			$number++;
				?>

			<div class="carousel-item <?php if($number==1){echo "active";}?>">
				<div class="text">
					<h2><?= $value['title']; ?></h2>
					<p><?= $value['description']; ?></p>
					<a href="<?= $value['btnLink']; ?><" class="nutslide btn btn-warning"><?= $value['btnText']; ?></a>
				</div>
				<img class="d-block w-100" src="<?= $value['slideImage']; ?>" alt="First slide">
			</div>
			<?php } ?>
		</div>
		<a class="carousel-right carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-right carousel-control-next" href="#slidehome" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
</body>
</html>
