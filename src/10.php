
<?php
function getRandomNumber($min = 1, $max = 10) {
    return mt_rand($min, $max);
}

echo getRandomNumber();