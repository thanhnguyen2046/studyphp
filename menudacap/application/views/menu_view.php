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
			<form action="<?= base_url() ?>managermenu/addMenu" method="post">
				<div class="form-group">
					<label for="titleMenu">Title Menu</label>
					<input type="text" class="form-control" id="titleMenu" name="titleMenu" placeholder="Title Menu">
				</div>
				<div class="form-group">
					<label for="linkMenu">Link Menu</label>
					<input type="text" class="form-control" id="linkMenu" name="linkMenu" placeholder="http://">
				</div>
<div class="form-group">
					<label for="IdMenuParent">Parent ID</label>
					<input type="text" class="form-control" id="IdMenuParent" name="IdMenuParent" value="0">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>
