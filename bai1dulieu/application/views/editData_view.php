<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add New Phone Number</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">

	<!--	chinh duong dan base_url trong config/config.php, url trong config/autoload.php-->
</head>
<body>
<?php include('header.php'); ?>
<div class="container">
	<h2 class="text-center mt-2 mb-3">Edit Phone Number</h2>
	<div class="row">
		<div class="col-sm-8">
			<form action="../updateData" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-block">
						<?php foreach ($resultarray as $key => $value) { ?>
							<input type="hidden" class="form-control" name="id" placeholder="1" value="<?= $value['id'] ?>">
							<div class="form-group">
								<label for="exampleFormControlInput1">Phone Number</label>
								<input type="text" class="form-control" name="number" placeholder="19008198" value="<?= $value['so'] ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Price</label>
								<input type="text" class="form-control" name="price" placeholder="2000000" value="<?= $value['gia'] ?>">
							</div>
							<input type="submit" class="btn btn-success btn-block" value="Save">
						<?php } ?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
