<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script
	  src="https://code.jquery.com/jquery-3.4.1.js"
	  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	  crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>lib/jquery.table2excel.js"></script>
</head>
<body>
<div class="container pt-3 pb-3">
	<h2>Export News</h2>
	<table class="table table-striped table-news">
		<thead>
		<tr>
			<th style="width: 10%">Id</th>
			<th style="width: 50%">Title</th>
			<th style="width: 20%">Category</th>
			<th>Created At</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($newsList as $new) { ?>

			<tr>
				<td><?= $new['id'] ?></td>
				<td><?= $new['title'] ?></td>
				<td><?php foreach ($category as $cate) { ?><?php if ($cate['id'] == $new['id_category']) {
						echo $cate['category_name'];
					} ?><?php } ?></td>
				<td><?= date('d/m/Y - G:i - A', $new['created_at']) ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<button class="btn btn-success btn-export">export</button>
</div>
<script>
	$(function () {
		$(".btn-export").click(function () {
			$(".table-news").table2excel({
				name: "news excell"
			});
		});
	});
</script>
</body>
</html>
