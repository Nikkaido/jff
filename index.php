<!DOCTYPE html>
<html>
<head>
	<title>Lesson 6</title>
	<meta charset="utf-8">
</head>
<body>


<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="submit" value="Загрузить на сервер">
</form>

<?php
$dir = "./img";
if (  ! $_FILES  )
{
    echo '
		  <h2>Форма для загрузки файлов</h2>
		  <form action="" method="post" enctype="multipart/form-data">
		  <input type="file" name="image"><br>
		  <input type="submit" value="Загрузить"><br>
		  </form>
	';
}
else
{
	move_uploaded_file($_FILES['image']['tmp_name'], $dir  .  DIRECTORY_SEPARATOR  .  $_FILES["image"]["name"]);
}
?>
	<?php
$scan = array_diff(scandir(img), array('..', '.'));

	foreach($scan as $name)
	 echo "<img src=/img/$name >";
	
?>
// sql

<?php
mysql_connect('localhost','root','');
mysql_select_db('gallery');
$res = mysql_query('SELECT * FROM people');
while($row = mysql_fetch_array($res))
{
	echo $row['path'];
}

?>
</body>
</html>