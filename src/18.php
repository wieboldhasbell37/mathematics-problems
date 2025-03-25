<?php
class MathOperations {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            throw new Exception("Division by zero is not allowed.");
        }
    }
}

// Example usage
try {
    echo MathOperations::add(5, 3); // Output: 8
    echo MathOperations::subtract(10, 4); // Output: 6
    echo MathOperations::multiply(7, 2); // Output: 14
    echo MathOperations::divide(10, 0); // Throws exception: Division by zero is not allowed.
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
