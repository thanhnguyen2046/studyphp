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

	<h2 class="text-xs-center mt-2 mb-3">Edit Member</h2>
	<div class="row">
		<div class="col-sm-9">

			<form action="../updateMember" method="post" enctype="multipart/form-data">
				<?php foreach ($editMemberArray as $key => $value){ ?>
				<div class="form-group row">
					<label for="avatar" class="col-sm-3 col-form-label">Avatar</label>
					<div class="col-sm-9">
						<div class="text-xs-center mb-1">
							<img src="<?= $value['avatar']; ?>" alt="">
						</div>
						<input type="hidden" name="id" value="<?= $value['id']; ?>">
						<input type="text" value="<?= $value['avatar']; ?>" class="form-control" name="avatarOld">
						<input type="file" class="form-control" name="avatar" value="change image" placeholder="change image">
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" value="<?= $value['name']; ?>" placeholder="member name">
					</div>
				</div>
				<div class="form-group row">
					<label for="age" class="col-sm-3 col-form-label">Age</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="age" value="<?= $value['age']; ?>"placeholder="member Age">
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="phone" value="<?= $value['phone_number']; ?>"placeholder="0000000000000">
					</div>
				</div>
				<div class="form-group row">
					<label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="facebook" value="<?= $value['facebook']; ?>" placeholder="facebook links">
					</div>
				</div>
				<div class="form-group row">
					<label for="order" class="col-sm-3 col-form-label">Order Number</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="order" value="<?= $value['total_order']; ?>" placeholder="order number">
					</div>
				</div>
				<?php } ?>

				<div class="form-group row">
					<div class="col-sm-9 offset-sm-3">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>

		</div>
	</div>

</div>
</body>
</html>
