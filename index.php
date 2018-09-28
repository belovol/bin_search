<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>binsearch</title>
</head>
<body>
	<center><h2>Тестовое задание для PHP программиста<br>
        Написать функцию, реализующую бинарный поиск значения по ключу в текстовом файле.
    </h2></center>
    <form enctype="multipart/form-data" action="load.php" method="POST">
	<center><input name="myfile" type="file" /></center>
	<center><input type="submit" value="Загрузка файла" /></center>
	</form>
	<p>
	<form action="search.php" method="POST">
	<center><input type="text" name="key"> Введите ключ</center>
	<center><input type="submit" name="send" value="Искать"></center>
	</form>
</body>
</html>