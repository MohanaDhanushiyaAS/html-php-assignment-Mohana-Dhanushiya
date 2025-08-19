<?php
// Array of fruits
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

// Value to search
$searchValue = "Mango";

// Find index
$index = array_search($searchValue, $fruits);

if ($index !== false) {
    echo "The value '$searchValue' is found at index: $index";
} else {
    echo "The value '$searchValue' was not found in the array.";
}
?>



Output

The value 'Mango' is found at index: 2