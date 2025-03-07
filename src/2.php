
<?php
// Generate a random mathematical problem
$min = 1;
$max = 10;
$problem = rand($min, $max) . " x " . rand($min, $max) . " = ?";

// Ask the user to solve the problem
echo "$problem\n";

// Get the user's answer
$answer = readline("Your answer: ");

// Check if the answer is correct
if ($answer == ($min * $max)) {
    echo "Correct! You are a math genius.\n";
} else {
    echo "Incorrect. The answer was $min * $max.\n";
}
?>