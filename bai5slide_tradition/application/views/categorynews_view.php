<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>News management</title>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
<div class="container">
	<?php include 'component/navbar.php' ?>

	<div class="row">
		<div class="col-sm-6">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>Add Category</h2>
					<p class="lead">This Form allow to add category to database</p>
				</div>
			</div>

			<form action="<?php echo base_url(); ?>news/addNewsCategory" method="post">
				<div class="form-group">
					<label for="categoryName">Category Name</label>
					<input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category Name">
				</div>
				<div class="form-group">
					<input type="submit" class="form-control" placeholder="Add Category">
				</div>
			</form>
		</div>
		<!--		end add category-->

		<div class="col-sm-6">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>List Category</h2>
					<p class="lead">Category Added</p>
				</div>
			</div>

			<?php foreach ($data as $onevalue)
			{ ?>
			<div class="card card-inverse card-block card-primary text-center mb-3 text-white">
					<div class="card-body">
						<div class="text-xs-right">
							<a href="editCategory/<?=$onevalue['id'] ?>" class="btn-edit btn btn-success"><i class="fa fa-pencil"></i></a>
							<a href="removeCategory/<?=$onevalue['id'] ?>" class="btn-remove btn btn-danger"><i class="fa fa-remove"></i></a>
						</div>
						<h3><?=$onevalue['category_name'] ?></h3>
					</div>
			</div>
			<?php	}?>

		</div>
	</div>
</div>
</body>
</html>
