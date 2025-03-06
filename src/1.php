
<?php

function getRandomNumber($min, $max) {
    return rand($min, $max);
}

function getRandomMathProblem() {
    $operator = ["+", "-", "*", "/"];
    $num1 = getRandomNumber(0, 10);
    $num2 = getRandomNumber(0, 10);
    $op = $operator[rand(0, count($operator) - 1)];
    switch ($op) {
        case "+":
            return "$num1 + $num2";
            break;
        case "-":
            return "$num1 - $num2";
            break;
        case "*":
            return "$num1 * $num2";
            break;
        case "/":
            return "$num1 / $num2";
            break;
    }
}

?>