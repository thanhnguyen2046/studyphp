<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-6 m-auto pt-3">
			<form action="<?= base_url() ?>managerNews/addNew" method="post">
				<div class="form-group">
					<label for="title">Title News</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Title New">
				</div>
				<div class="form-group">
					<label for="link">Link News</label>
					<input type="text" class="form-control" id="link" name="link" placeholder="http://">
				</div>
				<div class="form-group">
					<label for="content">News Content</label>
					<input type="text" class="form-control" id="content" name="content" placeholder="New Content">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
