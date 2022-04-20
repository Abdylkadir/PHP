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
                <div class="header__text">Задание для самостоятельной работы «Feedback form»</div>
            </div>
        </header>
        <main class="main">
            <div class="main__row">
                <form class="main__form form"action="#">
                    <button type="submit">Hello</button>
                    <div><input type="text" name="username" value="Ak"id=""></div>
                    <div>
                    <select name="color" id="">
                        <option value="red"></option>
                        <option value="red"></option>
                        <option value="red"></option>
                    </select>
                    </div>
                </form>
            </div>
        </main>
        <footer class="footer">
            <p class="footer__info">
                <?php 
                        echo "Собрать сайт из двух страниц. 
                        1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу. 
                        2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг."                        
                    ?>
            </p>
        </footer>
    </div>
</body>

</html>