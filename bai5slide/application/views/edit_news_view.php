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
	<script src="<?= base_url() ?>ckeditor/ckeditor.js"></script>
	<script src="<?= base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
<div class="container-fluid">
	<?php include 'component/navbar.php' ?>
	<div class="row">
		<div class="col-sm-8 add new push-sm-2">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>Edit News</h2>
					<p class="lead">This Form allow to edit news</p>
				</div>
			</div>

			<form action="<?php echo base_url(); ?>news/updateNews" method="post" enctype="multipart/form-data">
				<?php foreach ($newEdit as $key => $value){ ?>
					<input type="hidden" class="form-control" id="id" name="id" value="<?=$value['id'] ?>">
				<div class="form-group">
					<label for="title">News Title</label>
					<input type="text" class="form-control" id="title" name="title" value="<?=$value['title'] ?>">
				</div>

				<div class="form-group">
					<img src="<?=$value['image'] ?>" alt="" class="img-fluid">
					<input type="text" id="oldImage" name="oldImage" class="form-control" value="<?=$value['image'] ?>">
					<label for="image">News Image</label>
					<input type="file" class="form-control" id="image" name="image">
				</div>
				<div class="form-group">
					<label for="categoryName">News Category</label>
					<select class="form-control" id="id-category" name="id-category">

						<?php foreach ($category as $key1 => $value1) { ?>
							<option value="<?= $value1['id'] ?>" <?php if($value['id_category']==$value1['id']){echo "selected";}?>><?= $value1['category_name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="quote">quote</label>
					<input type="text" class="form-control" id="quote" name="quote" value="<?=$value['quote'] ?>">
				</div>
				<div class="form-group">
					<label for="categoryName">News Content</label>
					<textarea class="form-control" id="content" name="content" rows="10" value="<?=$value['content'] ?>"></textarea>
				</div>
				<?php } ?>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-success" id="btnAddCategory" placeholder="Save" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	CKEDITOR.replace('content', {
		filebrowserBrowseUrl: '<?=base_url(); ?>' + 'ckeditor/ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: '<?=base_url(); ?>' + 'ckeditor/ckfinder/ckfinder.html?Type=Images',
	});
</script>
</body>
</html>
