<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>View Results</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>

<div class="container">
	<?php include 'menu.php' ?>
	<div class="card-columns mt-3">
		<?php foreach ($arrayValue as $key => $value) { ?>
			<div class="card">
				<div class="card-block">
					<h4 class="card-title"><?= $value->name ?></h4>
					<p class="card-text"><?= $value->phone ?></p>
					<a href="json/removeContact/<?= $value->phone ?>" class="btn btn-danger">Delete <i class="fa fa-remove"></i></a>
				</div>
			</div>
		<?php } ?>
	</div>

	<form action="json/addContact" method="post">
		<div class="form-group">
			<label for="name">Name </label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="phone">Phone </label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" id="submit" value="Save">
		</div>
	</form>
</div>

</body>
</html>
