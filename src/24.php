<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$numbers = [1, 2, 3, 4];
$result = calculateSum($numbers);
echo "The sum is: " . $result;
