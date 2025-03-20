<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Function to get the sum of two numbers
function getSum($num1, $num2) {
    return $num1 + $num2;
}

// Function to get the difference of two numbers
function getDifference($num1, $num2) {
    return $num1 - $num2;
}

// Function to get the product of two numbers
function getProduct($num1, $num2) {
    return $num1 * $num2;
}

// Function to get the quotient of two numbers
function getQuotient($num1, $num2) {
    if ($num2 === 0) {
        return "Error: cannot divide by zero";
    } else {
        return $num1 / $num2;
    }
}

// Function to get the remainder of two numbers
function getRemainder($num1, $num2) {
    if ($num2 === 0) {
        return "Error: cannot divide by zero";
    } else {
        return $num1 % $num2;
    }
}

// Function to check if a number is even or odd
function isEven($num) {
    if ($num % 2 === 0) {
        return "even";
    } else {
        return "odd";
    }
}

// Function to get the greatest common divisor of two numbers
function getGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp % $num2;
    }
    return $num1;
}
?>