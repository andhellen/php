<?php

/*
 * 1. Создать переменную $age и присвоить ей значение свой возраст
 * 2. Создать переменную $diff и присвоить ей значение 10
 * 3. Создать перемунню $result и присвоить ей значение результат сложения предыдущих двух переменных
 * 4. Вывести на экран строку "Сейчас мне [MY_AGE] лет. Через [ЗНАЧЕНИЕ_ПЕРЕМЕННОЙ_DIFF] мне будет [ЗНАЧЕНИЕ_ПЕРЕМЕННОЙ_RESULT]
 *
 */
$age = 43;
$diff = 10; 
$result = $age + $diff;

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Выражения</h1>
<div>
    <?php echo "Сейчас мне $age года. Через $diff лет мне будет $result."; ?>
</div>
</body>
</html>
