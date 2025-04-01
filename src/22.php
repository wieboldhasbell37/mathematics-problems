<?php
// Example PHP script for mathematical problem-solving

function calculateQuadraticEquation($a, $b, $c) {
    if ($b**2 - 4 * $a * $c < 0) {
        return "No real solutions";
    } else {
        $discriminant = pow($b, 2) - 4 * $a * $c;
        
        // Find two roots
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);

        return "Roots: {$root1}, {$root2}";
    }
}

// Example usage:
$a = 1;
$b = 0;
$c = 3;

print calculateQuadraticEquation($a, $b, $c);
?>
