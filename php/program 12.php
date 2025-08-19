<?php
// Get marks from user (hardcoded for example, can use form input)
$marks = 68; // Example marks

if ($marks >= 75) {
    $grade = "First Class";
} elseif ($marks >= 60 && $marks <= 74) {
    $grade = "Second Class";
} elseif ($marks >= 40 && $marks <= 59) {
    $grade = "Third Class";
} else {
    $grade = "Fail";
}

echo "Marks: $marks% - Grade: $grade";
?>
