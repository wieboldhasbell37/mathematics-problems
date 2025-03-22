<?php
function calculateSquare($sideLength) {
    $area = $sideLength * $sideLength;
    return $area;
}

$length = 5.0;
$result = calculateSquare($length);
echo "The area of the square with side length $length is: $result";
?>
