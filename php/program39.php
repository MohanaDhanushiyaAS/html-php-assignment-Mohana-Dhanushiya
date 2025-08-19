<?php
// Student scores stored in an array
$students = [
    "Alice" => 85,
    "Bob" => 72,
    "Charlie" => 91,
    "David" => 60,
    "Eva" => 45
];

// Function to assign grade
function getGrade($score) {
    if ($score >= 90) return "A";
    elseif ($score >= 75) return "B";
    elseif ($score >= 60) return "C";
    elseif ($score >= 50) return "D";
    else return "F";
}

// Display student grades
foreach ($students as $name => $score) {
    echo $name . " scored " . $score . " → Grade: " . getGrade($score) . "<br>";
}
?>



✅ Output:

Alice scored 85 → Grade: B
Bob scored 72 → Grade: C
Charlie scored 91 → Grade: A
David scored 60 → Grade: C
Eva scored 45 → Grade: F