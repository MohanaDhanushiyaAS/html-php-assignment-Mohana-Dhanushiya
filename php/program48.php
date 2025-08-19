<?php
// Array of records (each record = associative array)
$students = [
    ["id" => 1, "name" => "Alice", "marks" => 85],
    ["id" => 2, "name" => "Bob", "marks" => 72],
    ["id" => 3, "name" => "Charlie", "marks" => 91],
    ["id" => 4, "name" => "David", "marks" => 65]
];

// Print all records
echo "<h3>Student Records</h3>";
foreach ($students as $record) {
    echo "ID: {$record['id']} - Name: {$record['name']} - Marks: {$record['marks']}<br>";
}

// Find max marks (highest scoring student)
$marks = array_column($students, "marks");  // Extract marks into array
$maxMarks = max($marks);
$topperIndex = array_search($maxMarks, $marks);

echo "<br>Topper: " . $students[$topperIndex]['name'] . " with $maxMarks marks.";
?>


Output

Student Records
ID: 1 - Name: Alice - Marks: 85
ID: 2 - Name: Bob - Marks: 72
ID: 3 - Name: Charlie - Marks: 91
ID: 4 - Name: David - Marks: 65

Topper: Charlie with 91 marks