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
			<h3 class="text-xs-center">Edit Slide</h3>
			<form action="editSlide" method="post" enctype="multipart/form-data">
				<?php $number = 0 ?>
				<?php  foreach ($dataArray as $key => $value) { ?>
					<?php $number++; ?>
					<h3 class="mt-3">Slide <?php echo $number; ?></h3>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title[]" id="title" value="<?= $value['title']?>">
				</div>
				<div class="form-group">
					<label for="description">Desription</label>
					<input type="text" class="form-control" name="description[]" id="description" value="<?= $value['description']?>">
				</div>
				<div class="form-group">
					<label for="btnLink">Button Link</label>
					<input type="text" class="form-control" name="btnLink[]" id="btnLink" value="<?= $value['btnLink']?>">
				</div>
				<div class="form-group">
					<label for="btnText">Button Text</label>
					<input type="text" class="form-control" name="btnText[]" id="btnText" value="<?= $value['btnText']?>">
				</div>
				<div class="form-group">
					<label for="slideImage">Upload Image</label>
					<img src="<?= $value['slideImage']?>" alt="" width="40%" alt="" class="mb-1">
					<input type="hidden" class="form-control" name="slideImageOld[]" id="slideImageOld" value="<?= $value['slideImage']?>">
					<input type="file" class="form-control" name="slideImage[]" id="slideImage" value="<?= $value['slideImage']?>">
				</div>

				<?php }; ?>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-outline-info" id="submit" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
