<?php
// rand() - Random number between 1 and 100
echo "Random number (1-100): " . rand(1, 100) . "<br>";

// abs() - Absolute value
echo "Absolute value of -25: " . abs(-25) . "<br>";

// str_replace() - Replace 'World' with 'PHP'
$text = "Hello World";
echo "String replacement: " . str_replace("World", "PHP", $text) . "<br>";

// pi() - Value of π
echo "Value of pi: " . pi() . "<br>";

// ceil() - Round up number
echo "Ceil of 4.3: " . ceil(4.3) . "<br>";
?>



output:
Random number (1-100): 55
Absolute value of -25: 25
String replacement: Hello PHP
Value of pi: 3.1415926535898
Ceil of 4.3: 5