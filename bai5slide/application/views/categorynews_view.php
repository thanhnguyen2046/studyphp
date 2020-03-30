<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>News management</title>
	<script
	  src="https://code.jquery.com/jquery-3.4.1.js"
	  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	  crossorigin="anonymous"></script>
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

			<!--			<form action="--><?php //echo base_url(); ?><!--news/addNewsCategory" method="post">-->
			<div class="form-group">
				<label for="categoryName">Category Name</label>
				<input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Category Name">
			</div>
			<div class="form-group">
				<input type="button" class="form-control btn btn-success" id="btnAddCategory" placeholder="Add Category" value="Add Category">
			</div>
			<!--			</form>-->
		</div>
		<!--		end add category-->

		<div class="col-sm-6 list-category">
			<div class="jumbotron jumbotron-fluid pt-2 pb-2">
				<div class="container">
					<h2>List Category</h2>
					<p class="lead">Category Added</p>
				</div>
			</div>

			<?php foreach ($data as $onevalue) { ?>
				<div class="card card-inverse card-block card-primary text-center mb-3 text-white">
					<div class="card-body">
						<div class="action text-xs-right">
							<a data-href="<?= $onevalue['id'] ?>" class="btn-edit btn btn-success"><i class="fa fa-pencil"></i></a>
							<a data-href="<?= $onevalue['id'] ?>" class="btn-remove btn btn-danger"><i class="fa fa-remove"></i></a>
						</div>
						<div class="text-xs-right hidden-xs-up">
							<a href="" class="btn btn-save btn-success mb-1">Save</a>
						</div>
						<div class="form-group hidden-xs-up">
							<input type="hidden" class="form-control editCategoryId" name="editCategoryId" value="<?= $onevalue['id'] ?>">
							<input type="text" class="form-control editCategoryName" name="editCategoryName" value="<?= $onevalue['category_name'] ?>">
						</div>
						<h3 class="name">
							<?= $onevalue['category_name'] ?>
						</h3>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</div>
<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url() ?>1.js"></script>


<script>
	$(function () {
		var link = '<?= base_url() ?>';
		$('body').on('click', '.btn-edit', function () {
			$(this).parent().next().next().next().addClass('hidden-xs-up');
			$(this).parent().addClass('hidden-xs-up');
			$(this).parent().next().next().removeClass('hidden-xs-up');
			$(this).parent().next().removeClass('hidden-xs-up');
		});
		$('body').on('click', '.btn-save', function () {
			//su dung ajax cap nhat du lieu
			valueName = $(this).parent().next().find('.editCategoryName').val();
			valueId = $(this).parent().next().find('.editCategoryId').val();
			$(this).parent().addClass('hidden-xs-up');
			$(this).parent().next().addClass('hidden-xs-up');
			$(this).parent().next().next().removeClass('hidden-xs-up');
			$(this).parent().prev().removeClass('hidden-xs-up');
			$(this).parent().next().next().text(valueName);
			// console.log(valueId);
			// console.log(valueName);
			$.ajax({
				url: link + 'news/updateCategory',
				method: "POST",
				dataType: "json",
				data: {
					categoryName: valueName,
					id: valueId
				}
			})
			  .always(function () {

			  });
			return false;

		});


		$('#btnAddCategory').click(function (event) {
			$.ajax({
				url: link + '/news/addJquery', //php de nhan du lieu
				method: "POST",
				data: {categoryName: $('#categoryName').val()},
				dataType: "json"
			})
			  .always(function (res) {
				  console.log(res);
				  content = '<div class="card card-inverse card-block card-primary text-center mb-3 text-white">\n'+
						'<div class="card-body">\n'+
						'<div class="action text-xs-right">\n'+
						'<a data-href="'+ res +'" class="btn-edit btn btn-success"><i class="fa fa-pencil"></i></a>\n'+
						'<a data-href="'+ res +'" class="btn-remove btn btn-danger"><i class="fa fa-remove"></i></a>\n'+
						'</div>\n'+
						'<div class="text-xs-right hidden-xs-up">\n'+
						'<a href="" class="btn btn-save btn-success mb-1">Save</a>\n'+
						'</div>\n'+
						'<div class="form-group hidden-xs-up">\n'+
						'<input type="hidden" class="form-control editCategoryId" name="editCategoryId" value="">\n'+
						'<input type="text" class="form-control editCategoryName" name="editCategoryName" value="'+ $('#categoryName').val() + '">\n'+
						'</div>\n'+
						'<h3>' + $('#categoryName').val() + '</h3>\n' +
						'</div>\n'+
						'</div>';
				  $('.list-category').append(content);
				  $('#categoryName').val('');
			  });
		});//end btn add
		//begin remove btn
		//lang nghe body
		$('body').on('click', '.btn-remove', function () {
			idRemove = $(this).data('href');
			removeItem = $(this).parent().parent().parent();
			console.log(idRemove);
			$.ajax({
				url: link + 'news/removeCategory/' + idRemove,
				method: "POST",
				dataType: "json"
			})
			  .always(function () {
				  $(removeItem).remove();
			  });
		});
	});
</script>


</body>
</html>
