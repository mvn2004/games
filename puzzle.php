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
            <h1>Игра в загадки</h1>
            <div id="box">
                <form action="" method="GET">
                    <label for="firstQuestion">
                    <p>В Москве говорят, а у нас слышно.</p>
                </label>
                    <input type="text" name="question1" id="firstQuestion">
                    <label for="secondQuestion">
                    <p>Сижу верхом, не ведаю на ком.</p>
                </label>
                    <input type="text" name="question2" id="secondQuestion">
                    <br><br>
                    <input type="submit" value="Ответить">
                </form>
                <?php
                if (!empty($_GET['question1']) && !empty($_GET['question2'])) {
                    $quest1 = $_GET["question1"];
                    $score = 0;
                    if ($quest1 == "радио" || $quest1 == "Радио" || $quest1 == "РАДИО") {
                        echo '1 - Правильно';
                        $score++;
                    } else {
                        echo '1 - Не правильно';
                    }
                    echo '<br>';
                    $quest2 = $_GET["question2"];
                    if ($quest2 == "шапка" || $quest2 == "Шапка" || $quest2 == "ШАПКА") {
                        echo '2 - Правильно';
                        $score++;
                    } else {
                        echo '2 - Не правильно';
                    }
                    echo '<br><br>';
                    echo 'Вы угадали ' . $score . ' загадок';
                }
            ?>
            </div>
        </div>
    </div>
    <div id="footer">
        Copyright ©
        <?php echo date('Y'); ?>
        <a href="https://geekbrains.ru/">GeekBrains</a>
    </div>
</body>

</html>
