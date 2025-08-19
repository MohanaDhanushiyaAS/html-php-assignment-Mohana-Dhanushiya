<?php
// Array of student names and their marks
$students = [
    "Alice" => 95,
    "Bob" => 82,
    "Charlie" => 67,
    "David" => 48,
    "Eva" => 76
];

// Function to determine grade
function getGrade($marks) {
    if ($marks >= 90) {
        return "A";
    } elseif ($marks >= 75) {
        return "B";
    } elseif ($marks >= 60) {
        return "C";
    } elseif ($marks >= 50) {
        return "D";
    } else {
        return "F";
    }
}

// Loop through students and display grades
foreach ($students as $name => $marks) {
    echo "Student: $name | Marks: $marks | Grade: " . getGrade($marks) . "<br>";
}
?>
