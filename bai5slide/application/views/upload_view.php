<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Upload file by available code</title>
</head>
<body>
<h1>Upload file</h1>
<form action="<?=base_url() ?>FileUpload/UploadFile" method="post" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="sent" value="Upload File">
</form>

</body>
</html>
