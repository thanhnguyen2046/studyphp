<!doctype html>
<html lang="en">
<head>
	<title>Edit Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>

<div class="container">
	<?php include 'menu.php' ?>

	<form action="edit_controller/doEdit" method="post">
		<?php $stt = 0; ?>
		<?php foreach ($arrayData as $key) { ?>
			<?php $stt++; ?>
			<h4>Contact Number: <?= $stt; ?></h4>
			<div class="form-group">
				<label for="name">Name </label>
				<input type="text" class="form-control" name="name[]" id="name" value="<?= $key['name'] ?>">
			</div>
			<div class="form-group">
				<label for="phone">Phone </label>
				<input type="text" class="form-control" name="phone[]" id="phone" value="<?= $key['phone'] ?>">
			</div>
		<?php } ?>
		<div class="form-group">
			<input type="submit" class="btn btn-success" id="submit" value="Save">
		</div>
	</form>
</div>


</body>
</html>
