<?php
// Given arrays
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);

// Find max and min in each array
echo "Array 1 - Max: " . max($marks1) . ", Min: " . min($marks1) . "<br>";
echo "Array 2 - Max: " . max($marks2) . ", Min: " . min($marks2) . "<br>";
echo "Array 3 - Max: " . max($marks3) . ", Min: " . min($marks3) . "<br>";

// Merge arrays to find overall max and min
$allMarks = array_merge($marks1, $marks2, $marks3);
echo "<br>Overall Maximum Marks: " . max($allMarks) . "<br>";
echo "Overall Minimum Marks: " . min($allMarks) . "<br>";
?>


✅ Output:
Array 1 - Max: 456, Min: 111
Array 2 - Max: 356, Min: 321
Array 3 - Max: 635, Min: 255

Overall Maximum Marks: 635
Overall Minimum Marks: 111