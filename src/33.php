<?php 
    function calculatePrimeFactors($number) {
        $primes = [];

        while ($number % 2 == 0) {
            array_push($primes, 2);
            $number /= 2;
        }

        for ($i = 3; $i <= sqrt($number); $i += 2) {
            while ($number % $i == 0) {
                array_push($primes, $i);
                $number /= $i;
            }
        }

        if ($number > 2) {
            array_push($primes, $number);
        }

        return $primes;
    }

    function calculateGCD($a, $b) {
        while ($b != 0) {
            $temp = $a % $b;
            $a = $b;
            $b = $temp;
        }
        return abs($a);
    }
?>
