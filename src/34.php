<?php
function calculate_sum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo "The sum of the numbers is: " . calculate_sum($numbers);
