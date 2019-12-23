<?php

/*
 * 1. В блоке <p> с помощью инструкции echo вывести на экран сообщение "Мы просили Hello world!"
 * 2. Добавить комментарии перед выводом "Мы просили Hello world!". Содержимое комментария на свое усмотрение
 * 3. В блоке <h1> открыть PHP тег и вывести на экран с помощью короткого echo тега тему урока -
 *      "Основы синтаксиса". Закрыть PHP тег
 */

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
    <h1><?php echo "Основы синтаксиса"; ?></h1>
    <p>
		<!--комментарий в HTML-->
		<?php echo "Мы просили Hello, World!"; ?>
    </p>
</body>
</html>