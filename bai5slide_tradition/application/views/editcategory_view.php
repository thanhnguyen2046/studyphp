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
		<div class="col-sm-6 push-sm-3">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>Edit Category</h2>
					<p class="lead">This Form allow to edit category to database</p>
				</div>
			</div>

			<form action="<?php echo base_url(); ?>news/updateCategory" method="post">
				<?php foreach ($arrayData as $value) {?>
				<div class="form-group">
					<label for="categoryName">Category Name</label>
					<input type="hidden" name="id" value="<?=$value['id'];?>">
					<input type="text" class="form-control" id="categoryName" name="categoryName" value="<?=$value['category_name'] ?>">
				</div>
				<?php }?>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-success" placeholder="Save">
				</div>

			</form>
		</div>
		<!--		end add category-->
	</div>
</div>
</body>
</html>
