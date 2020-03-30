<!DOCTYPE html>
<html lang="en">
<head>
	<title> News Detail </title>
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
<body>
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


<div class="container">
	<?php include 'component/navbar.php' ?>

	<div class="jumbotron jumbotron-fluid pt-2 pb-2">
		<div class="container">
			<h2>Header Managerment</h2>
			<p class="lead">This Form allow to add manager header</p>
		</div>
	</div>


	<form action="<?= base_url(); ?>main/editHeader" style="margin-bottom: 50px" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6">
				<h4 class="alert alert-info">Social managerment</h4>
				<div class="form-group">
					<label for="linkFacebook">Link facebook</label>
					<input type="text" class="form-control" id="linkFacebook" name="linkFacebook" value="<?=$social['linkFacebook']?>">
				</div>
				<div class="form-group">
					<label for="linkTwitter">Link Twitter</label>
					<input type="text" class="form-control" id="linkTwitter" name="linkTwitter" value="<?=$social['linkTwitter']?>">
				</div>
				<div class="form-group">
					<label for="linkPinterest">Link Pinterest</label>
					<input type="text" class="form-control" id="linkPinterest" name="linkPinterest" value="<?=$social['linkPinterest']?>">
				</div>
				<div class="form-group">
					<label for="linkGooglePlus">Link Google Plus</label>
					<input type="text" class="form-control" id="linkGooglePlus" name="linkGooglePlus" value="<?=$social['linkGooglePlus']?>">
				</div>

				<h4 class="alert alert-info">Logo</h4>
				<div class="form-group">
					<input type="hidden" name="oldLogo" id="oldLogo" value="<?=$logo ?>">
					<?=$logo ?>
					<img src="<?=$logo?>" alt="" style="margin-bottom: 10px;">
					<input type="file" id="logo" name="logo" placeholder="logo">
				</div>
			</div>
			<div class="col-sm-6">
				<h4 class="alert alert-info">Hot Line Number</h4>
				<div class="form-group">
					<label for="hotlineText">Hotline Text</label>
					<input type="text" class="form-control" id="hotlineText" name="hotlineText" value="<?=$hotLineNumber['hotlineText']?>">
				</div>
				<div class="form-group">
					<label for="hotlineNumber">Hot Line Number</label>
					<input type="text" class="form-control" id="hotlineNumber" name="hotlineNumber" value="<?=$hotLineNumber['hotlineNumber']?>">
				</div>
				<h4 class="alert alert-info">Open Time</h4>
				<div class="form-group">
					<label for="openText">Category Name</label>
					<input type="text" class="form-control" id="openText" name="openText" value="<?=$openTime['openText']?>">
				</div>
				<div class="form-group">
					<label for="openTime">Open Time</label>
					<input type="text" class="form-control" id="openTime" name="openTime" value="<?=$openTime['openTime']?>">
				</div>

			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="form-control btn btn-success"  value="Save">
		</div>
	</form>
</div>
</body>
</html>

