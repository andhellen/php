<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
    <style>
        .wrapper {
            width: 740px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .block {
            border-top: 1px solid #333333;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        .avatar {
            text-align: right;
            max-height: 60px;
        }
        img {
            max-height: 250px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h2>Иванов Иван Иванович</h2>
        <h4>Программист PHP</h4>
    </div>
    <div class="block">
        <div class="float-left">
            <p>Телефон для связи: +38 (067) 412-45-44</p>
            <p>Эл. почта: <a href="mailto:ivan.ivanov@itea.ua">mailto:ivan.ivanov@itea.ua</a></p>
            <p>Зарплатные ожидания: 50000 грн</p>
            <p>Возраст: 32 года</p>
            <p>Опыт работы: 2.5 года</p>
            <p>Город проживания: Киев</p>
            <p>Готов к переезду: Да</p>
        </div>
        <div class="avatar float-left">
            <img src="https://thumbs.dfs.ivi.ru/storage8/contents/6/5/17193db87f0eb4e3de16c0b143593d.jpg">
        </div>
    </div>
    <div class="block">
        Опытный программист PHP. Ищу работу в стабильной развивающейся компании. Обладаю необходимыми знаниями в
        программировании на PHP, имею опыт работы с MVC фреймворками, такими как Laravel, Symfony, Yii2,
        понимаю принципы ООП, SOLID, DRY, KISS, неплохо ориентируюсь в реляционных базах данных таких как MySQL и
        PostgreSQL. Есть опыт работы в проектировании микросервисной архитектуры, написании RESTfull API приложений.
        Владею знаниями Unix OS's на уровне администрирования систем.
    </div>
</div>
</body>
</html>