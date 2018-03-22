<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
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
            <h1>Угадайка-мультиплеер</h1>
            <div id="box">
                <p>Играет 2 игрока. У Вас будет неограниченное количество попыток, чтобы угадать загадку.</p>
                <br><br>
                <a href="#" onclick="playGuess2();">Начать игру</a>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div id="footer">
        Copyright ©
        <?php echo date('Y'); ?>
        <a href="https://geekbrains.ru/" target="_blank">GeekBrains</a>
    </div>
</body>

</html>
