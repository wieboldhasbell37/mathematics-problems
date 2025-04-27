<?php
// Example PHP code for mathematical problem-solving.
function calculateGrade($score) {
    if ($score < 50) {
        return "Fail";
    } else {
        return "Pass";
    }
}

$studentScore = 85;
echo "The student's grade is: " . calculateGrade($studentScore);
?>
