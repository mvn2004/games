<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div id="content">
        <div id="header">
            <a href="index.php">Главная</a> <span>/</span>
            <a href="puzzle.php">Загадки</a> <span>/</span>
            <a href="guess.php">Угадайка</a> <span>/</span>
            <a href="guess-2.php">Угадайка-мультиплеер</a>
        </div>
        <h1>Личный сайт студента GeekBrains</h1>
        <div id="center">
            <img src="img/photoI.png" alt="фотография">
            <div id="box_text">
                <p>Привет! Меня зовут <b>Миронович Валерий Николаевич</b>.</br>
                    Я - <i>начинающий программист</i>. Я совсем недавно начал изучать WEB-программирование, но уже успел написать свой первый сайт на HTML, CSS, JS, PHP.</p>
                <p>В этом мне помог этот курс:
                    <a href="https://geekbrains.ru/courses/2" target="_blank">
            Основы программирования.</a></p>
                <p>На этом сайте вы сможете сыграть в три игры, которые я написал:</p>
                <a href="puzzle.php">Загадки</a>
                <a href="guess.php">Угадайка</a>
                <a href="guess-2.php">Угадайка-мультиплеер</a>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div id="footer">
        Copyright ©
        <?php echo date('Y'); ?> <a href="https://geekbrains.ru/" target="_blank">GeekBrains</a>
    </div>
</body>

</html>
