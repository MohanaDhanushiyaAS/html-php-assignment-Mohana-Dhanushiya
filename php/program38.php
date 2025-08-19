<?php
// Step 1: Create an array
$fruits = ["Apple", "Banana", "Mango", "Orange"];

// Step 2: Get the total number of elements
$length = count($fruits);

// Step 3: Initialize counter
$i = 0;

// Step 4: Iterate using while loop
echo "List of fruits:<br>";
while ($i < $length) {
    echo $fruits[$i] . "<br>";
    // Step 6: Increment counter
    $i++;
}
?>

✅ Output:
List of fruits:
Apple
Banana
Mango
Orange
