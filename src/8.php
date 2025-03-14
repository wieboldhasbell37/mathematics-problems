<?php

// Generate a random mathematical problem and solution

$min = 1;
$max = 10;
$problem = rand($min, $max) . " x " . rand($min, $max);
$solution = $problem * 2;

return $problem . " = " . $solution;
?>