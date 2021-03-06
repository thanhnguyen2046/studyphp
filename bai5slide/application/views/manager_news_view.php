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
	<script src="<?= base_url() ?>ckeditor/ckeditor.js"></script>
	<script src="<?= base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>
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

			<form action="<?php echo base_url(); ?>news/addNews" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">News Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="title">
				</div>
				<div class="form-group">
					<label for="image">News Image</label>
					<input type="file" class="form-control" id="image" name="image" placeholder="image">
				</div>
				<div class="form-group">
					<label for="categoryName">News Category</label>
					<select class="form-control" id="" name="id-category">
						<?php foreach ($category as $key => $value) { ?>
							<option value="<?= $value['id'] ?>"><?= $value['category_name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="quote">quote</label>
					<input type="text" class="form-control" id="quote" name="quote" placeholder="quote">
				</div>
				<div class="form-group">
					<label for="categoryName">News Content</label>
					<textarea class="form-control" id="content" name="content" rows="10"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-success" id="btnAddCategory" placeholder="Add News" value="Add News">
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
			<div class="row">
				<?php foreach ($newsList as $key=>$value){?>
				<div class="col-sm-4">
					<div class="card">
						<?php if(empty($value['image'])){?>
						<img src="http://placehold.it/700X300" class="card-img-top img-fluid" alt="...">
						<?php }else{ ?>
						<img src="<?=$value['image'] ?>" class="card-img-top img-fluid" alt="...">
						<?php }?>
						<div class="card-block">
							<h5 class="card-title"><?=$value['title'] ?></h5>
							<div class="success"><?=$value['quote']?></div>
							<div style="display: none"><?=$value['content'] ?></div>
						<a href="<?= base_url()?>news/editNews/<?=$value['id']?>" class="btn btn-outline-success edit mt-1"  style="float: left; margin-right: 5px"><i class="fa fa-pencil"></i></a>
						<a href="<?= base_url()?>news/removeNews/<?=$value['id']?>" class="btn btn-outline-danger remove mt-1" style="float: left"><i class="fa fa-remove"></i></a>
						</div>
						<div class="card-footer">
							<small class="text-muted">Create at <?=date('d/m/Y - G:i - A',$value['created_at'])?></small>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
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
