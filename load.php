<?php
	if (copy ($_FILES["myfile"]["tmp_name"], $_FILES["myfile"]["name"]))
	{ echo "Файл успешно загружен <br>";}
	else
	{ echo "Ошибка загрузки файла";}
	header ("Refresh:1; url=index.php");
?>