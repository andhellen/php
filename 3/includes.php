<?php

/*
Создать 3 файла:
1. Шапку сайта (например, header.php)
2. Подвал сайта (например, footer.php)
3. Основной файл контента (может быть текущий файл)

Подключить в основной файл шапку и подвал с помощью одной из инструкций include, include_once, require или require_once
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset = "utf-8">
</head>
<body>
	<?php include_once "/inc/header.php" ?>
	<h1>Изучение Includes</h1>
	<div>
		<p>Контент страницы</p>    
	</div>
	<?php require_once "/inc/footer.php" ?>
</body>
</html>