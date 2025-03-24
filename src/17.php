<?php
class Math {
    public function calculate($a, $b) {
        echo "The result of $a + $b is: ". ($a + $b)."\n";
    }
}

$a = 5;
$b = 3;
Math::calculate($a, $b);
?>
