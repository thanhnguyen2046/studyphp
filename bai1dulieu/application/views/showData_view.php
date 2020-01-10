<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>View Database</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>

<?php include('header.php'); ?>
<div class="container">

	<h3 class="text-xs-center mt-2 mb-1">Phone Number and price</h3>
	<hr>
	<div class="row">
		<?php
		foreach ($controllerdata as $key => $value) { ?>
			<div class="col-sm-4">
				<div class="card card-block">
					<div class="card-body">
						<h5 class="card-title">phone number: <?= $value['so'] ?></h5>
						<p class="card-text">price: <?= $value['gia'] ?></p>
						<p class="cart-text">id: <?= $value['id'] ?></p>
						<a href="showData_controller/deleteData/<?= $value['id'] ?>" class="btn btn-danger remove"><i class="fa fa-remove"></i></a>
						<a href="showData_controller/editSim/<?= $value['id'] ?>" class="btn btn-warning remove"><i class="fa fa-pencil"></i></a>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
</div>
</body>
</html>
