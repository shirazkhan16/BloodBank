<html>
<head>
<meta charset="utf-8">
<title>video upload</title>
</head>
<body style='text-align:center'>
<h1>uploading a video</h1>
<h2 style='color:red;'>uploading a video in localhost</h2>
<?php 
if(isset($_post['submit']))
{
	$name=$files['thumbnail']['name'];
	$tmp=$_files['thumbnail']['tmp_name'];
	move_uploaded_file($tmp, $name);
}
?>
<form action='#' method='post' enctype='multipart-data'>
<input type='file' name='thumbnail' value='upload ur image'>
<input type='submit' name='submit' value='upload video or image'>
</form>
</body>
</html>