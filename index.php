<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
    <header class="header">
        <div class="header__row">
            <a href="" class="header__logo"><img src="logo.png" alt=""></a>
            <div class="header__text">Задание для самостоятельной работы «Hello, World!»</div>
        </div>
    </header>
    <main class="main">
        <div class="main__row">
            <p class="main__info">
                <?php 
                    echo "Hello,world!"
                ?>
            </p>
        </div>
    </main>
    <footer class="footer">
    <p class="footer__info">
    <?php 
                    echo "Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.
                    Дано:
                    Header = слева логотип МосПолитеха, по центру название работы.
                    Footer = задание для самостоятельно работы (без описания).
                    Main = любой html-элемент с адекватным динамическим контентом (пример Hello, World).
                    Ответ на гугл диск:
                    Ссылка на репозиторий
                    URL – адрес страницы.
                    "
                ?>
            </p>
    </footer>
    </div>
</body>

</html>