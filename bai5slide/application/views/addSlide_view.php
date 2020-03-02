<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Slide</title>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
<div class="container">
	<?php include 'component/navbar.php'?>
	<div class="row mt-3">
		<div class="col-sm-6 push-sm-3">
			<h3 class="text-xs-center">Add New Slide</h3>
			<form action="slides/addSlide" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="enter title">
				</div>
				<div class="form-group">
					<label for="description">Desription</label>
					<input type="text" class="form-control" name="description" id="description" placeholder="enter description">
				</div>
				<div class="form-group">
					<label for="btnLink">Button Link</label>
					<input type="text" class="form-control" name="btnLink" id="btnLink" placeholder="enter btnLink">
				</div>
				<div class="form-group">
					<label for="btnText">Button Text</label>
					<input type="text" class="form-control" name="btnText" id="btnText" placeholder="enter btnText">
				</div>
				<div class="form-group">
					<label for="slideImage">Upload Image</label>
					<input type="file" class="form-control" name="slideImage" id="slideImage" placeholder="enter image">
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-outline-info" id="submit">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
