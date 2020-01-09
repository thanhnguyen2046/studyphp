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

<div class="container">
	<h2 class="text-center">add new Phone Number</h2>
	<div class="row">
		<div class="col-sm-8">
			<form action="insertData_controller" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-block">
						<div class="form-group">
							<label for="exampleFormControlInput1">Phone Number</label>
							<input type="text" class="form-control" name="number" placeholder="19008198">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Price</label>
							<input type="text" class="form-control" name="price" placeholder="2000000">
						</div>
						<input type="submit" class="btn btn-success btn-block" value="Add number">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
