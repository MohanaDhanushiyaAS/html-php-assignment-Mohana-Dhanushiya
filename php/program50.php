<?php
// Original array
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

// Convert all elements to lowercase
$lowercase = array_map('strtolower', $fruits);

// Convert all elements to uppercase
$uppercase = array_map('strtoupper', $fruits);

// Display results
echo "Original Array: <br>";
print_r($fruits);

echo "<br><br>Lowercase Array: <br>";
print_r($lowercase);

echo "<br><br>Uppercase Array: <br>";
print_r($uppercase);
?>




Output

Original Array: 
Array ( [0] => Apple [1] => Banana [2] => Mango [3] => Orange [4] => Grapes )

Lowercase Array: 
Array ( [0] => apple [1] => banana [2] => mango [3] => orange [4] => grapes )

Uppercase Array: 
Array ( [0] => APPLE [1] => BANANA [2] => MANGO [3] => ORANGE [4] => GRAPES )