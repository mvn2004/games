function playGuess() {
    "use strict";
    var number = Math.floor(Math.random() * 100);
    for (var i = 5; i > 0; i--) { // i = i - 1;
        var userAnswer = +prompt("Какое число загадал компьютер? (0-100) \nУ Вас осталось попыток - " + i);
        if (userAnswer == number) {
            alert("Угадал!");
            break;
        } else if (userAnswer > number) {
            alert("Слишком большое число");
        } else if (userAnswer < number) {
            alert("Слишком маленькое число");
        } else {
            alert("Вы ввели не число");
            break;
        }
    }
    alert("Компьютер загадал " + number);
}

function playGuess2() {
    var answer = Math.floor(Math.random() * 100);
    var playerNum = 1; //номер игрока, который сейчас ходит

    while (true) {
        var userAnswer = prompt('Ходит игрок ' + playerNum + '. Введите число от 0 до 100. Для выхода нажмите q');
        if (userAnswer == 'q') {
            break;
        }
        userAnswer = parseInt(userAnswer);

        if (userAnswer > answer) {
            alert('Ваш ответ слишком большой');
        } else if (userAnswer < answer) {
            alert('Ваш ответ слишком маленький');
        } else if (userAnswer == answer) {
            alert('Вы угадали! Выиграл игрок: ' + playerNum);
            break;
        } else {
            alert('Необходимо ввести число!');
        }

        //делаем смену игрока
        if (playerNum == 1) {
            playerNum = 2;
        } else {
            playerNum = 1;
        }
    }
}
