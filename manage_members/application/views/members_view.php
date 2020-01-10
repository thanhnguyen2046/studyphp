<!DOCTYPE html>
<html lang="en">
<head>
	<title>Display Member Lists</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
<div class="container">
	<h2 class="text-xs-center mt-2 mb-3">Member List</h2>
	<div class="card-columns">
		<div class="card">
			<img src="..." class="card-img-top img-fluid" alt="...">
			<div class="card-block">
				<h4 class="card-title name">Nguyen Van A</h4>
				<p class="card-text age">Age: 31</p>
				<p class="card-text phone">Phone Number: <b>0000000000</b></p>
				<p class="card-text order">Order Number: <b>5</b></p>
				<p class="card-text facebook"><a href="#linkfb" class="btn btn-secondary">Facebook <i class="fa fa-chevron-right"></i></a></p>
			</div>
		</div>
	</div>

	<!--	form add member-->
	<h2 class="text-xs-center mt-2 mb-3">Add Member</h2>
	<div class="row">
		<div class="col-sm-9">
			<form action="addMember" method="post" enctype="multipart/form-data">
				<div class="form-group row">
					<label for="avatar" class="col-sm-3 col-form-label">Avatar</label>
					<div class="col-sm-9">
						<input type="file" class="form-control" name="avatar" placeholder="upload image">
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" placeholder="member name">
					</div>
				</div>
				<div class="form-group row">
					<label for="age" class="col-sm-3 col-form-label">Age</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="age" placeholder="member Age">
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="phone" placeholder="0000000000000">
					</div>
				</div>
				<div class="form-group row">
					<label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="facebook" placeholder="facebook links">
					</div>
				</div>
				<div class="form-group row">
					<label for="order" class="col-sm-3 col-form-label">Order Number</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="order" placeholder="order number">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-9 offset-sm-3">
						<button type="submit" class="btn btn-outline-success">Add New</button>
						<button type="reset" class="btn btn-outline-danger">Reset</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>
</body>
</html>
