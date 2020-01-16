<!DOCTYPE html>
<html lang="en">
<head>
	<title>Display Member Lists</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>


	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
<div class="container">
	<!--	form add member-->
	<h2 class="text-xs-center mt-2 mb-3">Add Member</h2>
	<div class="row">
		<div class="col-sm-9">
			<!--			<form action="addMember" method="post" enctype="multipart/form-data">-->
			<img src="" alt="">
			<div class="form-group row">
				<label for="files[]" class="col-sm-3 col-form-label">Avatar</label>
				<div class="col-sm-9">
					<!--						<input type="file" class="form-control" name="avatar" id="avatar" placeholder="upload image">-->
					<input type="file" class="form-control" name="files[]" id="avatar" placeholder="upload image">
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-3 col-form-label">Name</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="name" id="name" placeholder="member name">
				</div>
			</div>
			<div class="form-group row">
				<label for="age" class="col-sm-3 col-form-label">Age</label>
				<div class="col-sm-9">
					<input type="number" class="form-control" name="age" id="age" placeholder="member Age">
				</div>
			</div>
			<div class="form-group row">
				<label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="phone" id="phone" placeholder="0000000000000">
				</div>
			</div>
			<div class="form-group row">
				<label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook links">
				</div>
			</div>
			<div class="form-group row">
				<label for="order" class="col-sm-3 col-form-label">Order Number</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="order" id="order" placeholder="order number">
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-9 offset-sm-3">
					<!--						<button type="submit" class="btn btn-outline-success">Add New</button>-->
					<button type="button" class="btn btn-outline-success btnAddAjax">Add New By Ajax</button>
					<button type="reset" class="btn btn-outline-danger">Reset</button>
				</div>
			</div>
			<!--			</form>-->
		</div>
	</div>

	<!--	member list-->
	<h2 class="text-xs-center mt-2 mb-3">Member List</h2>
	<div class="card-columns">
		<?php foreach ($arrayResult as $key => $value) { ?>
			<div class="card">
				<img src="<?= $value['avatar']; ?>" class="card-img-top w-100" alt="...">
				<div class="card-block">
					<h4 class="card-title name"><?= $value['name']; ?></h4>
					<p class="card-text age">ID: <?= $value['id']; ?></p>
					<p class="card-text age">Age: <?= $value['age']; ?></p>
					<p class="card-text phone">Phone Number: <b><?= $value['phone_number']; ?></b></p>
					<p class="card-text order">Order Number: <b><?= $value['total_order']; ?></b></p>
					<p class="card-text facebook"><a href="<?= $value['facebook']; ?>" class="btn btn-secondary">Facebook <i class="fa fa-chevron-right"></i></a></p>
					<p class="card-text">
						<a href="<?php echo base_url(); ?>index.php/members_controller/editMember/<?= $value['id'] ?>" class="btn btn-outline-success">Edit <i class="fa fa-pencil"></i></a>
						<a href="<?php echo base_url(); ?>index.php/members_controller/removeMember/<?= $value['id'] ?>" class="btn btn-outline-danger">Remove <i class="fa fa-remove"></i></a>
					</p>
				</div>
			</div>
		<?php } ?>
	</div>

</div>
<script>
	var link = '<?php echo base_url() ?>';
	$('#avatar').fileupload({
		url: link + 'index.php/members_controller/uploadfile',
		dataType: 'json',
		done: function (e, data) {
			$.each(data.result.files, function (index, file) {
				fileName = file.url;
			});
		},

	})

	$(".btnAddAjax").click(function (event) {
		$.ajax({
			url: "ajaxAdd",
			method: "POST",
			dataType: 'json',
			data: {
				name: $("#name").val(),
				age: $("#age").val(),
				phone: $("#phone").val(),
				avatar: fileName,
				facebook: $("#facebook").val(),
				order: $("#order").val(),
			},
		})
			.always(function () {
				console.log("complete");
				content = '<div class="card">\n' +
					'\t<img src="' + fileName + '" class="card-img-top w-100" alt="...">\n' +
					'\t\t\t<div class="card-block">\n' +
					'\t\t\t\t<h4 class="card-title name">Name: ' + $("#name").val() + '</h4>\n' +
					'\t\t\t\t<p class="card-text age">ID: ' + $("#id").val() + '</p>\n' +
					'\t\t\t\t<p class="card-text age">Age: ' + $("#age").val() + '</p>\n' +
					'\t\t\t\t<p class="card-text phone">Phone Number: <b>' + $("#phone").val() + '</b></p>\n' +
					'\t\t\t\t<p class="card-text order">Order Number: <b>' + $("#order").val() + '</b></p>\n' +
					'\t\t\t\t<p class="card-text facebook"><a href="' + $("#facebook").val() + '" class="btn btn-secondary">Facebook <i class="fa fa-chevron-right"></i></a></p>\n' +
					'\t\t\t\t<p class="card-text">\n' +
					'\t\t\t\t\t<a href="<?php echo base_url();?>index.php/members_controller/editMember/' + $("#id").val() + '" class="btn btn-outline-success">Edit <i class="fa fa-pencil"></i></a>\n' +
					'\t\t\t\t\t<a href="<?php echo base_url();?>index.php/members_controller/removeMember/' + $("#id").val() + '" class="btn btn-outline-danger">Remove <i class="fa fa-remove"></i></a>\n' +
					'\t\t\t\t</p>\n' +
					'\t\t\t</div>\n' +
					'\t\t</div>';
				$('.card-columns').append(content);

				$("#name").val('');
				$("#age").val('');
				$("#phone").val('');
				$("#facebook").val('');
				$("#order").val('');
			});
	});
</script>
</body>
</html>
