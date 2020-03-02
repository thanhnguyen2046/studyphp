<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>News management</title>

	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>1.css">
	<script src="<?=base_url() ?>ckeditor/ckeditor.js"></script>
	<script src="<?=base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
<div class="container-fluid">
	<?php include 'component/navbar.php' ?>

	<div class="row">
		<div class="col-sm-6 add new">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>Add Category</h2>
					<p class="lead">This Form allow to add category to database</p>
				</div>
			</div>

			<form action="<?php echo base_url(); ?>news/addNews" method="post">
				<div class="form-group">
					<label for="title">News Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="title">
				</div>
				<div class="form-group">
					<label for="categoryName">News Category</label>
					<select class="form-control" id="" name="id-category">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<div class="form-group">
					<label for="categoryName">News Content</label>
					<textarea class="form-control" id="content" name="content" rows="10"></textarea>
					</div>
				<div class="form-group">
					<input type="button" class="form-control btn btn-success" id="btnAddCategory" placeholder="Add Category" value="Add Category">
				</div>
			</form>
		</div>
		<div class="col-sm-6 list news">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>List News</h2>
					<p class="lead">News Added</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	CKEDITOR.replace( 'content', {
		filebrowserBrowseUrl: '<?=base_url(); ?>'+'ckeditor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: '<?=base_url(); ?>'+'ckeditor/ckfinder/ckfinder.html?Type=Images',
	});
</script>
</body>
</html>
