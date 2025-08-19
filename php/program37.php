<?php
// Create an array of fruits
$fruits = ["Apple", "Banana"];

// Add elements to the array using array_push
array_push($fruits, "Mango", "Orange");
echo "After pushing Mango and Orange:<br>";
print_r($fruits);
echo "<br><br>";

// Remove the last element using array_pop
$removedFruit = array_pop($fruits);
echo "After popping one element:<br>";
print_r($fruits);
echo "<br>";
echo "Removed fruit: " . $removedFruit;
?>




✅ Output:

Copy
Edit
After pushing Mango and Orange:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Mango
    [3] => Orange
)

After popping one element:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Mango
)
Removed fruit: Orange