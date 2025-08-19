<?php
// Original string with special characters
$text = "Hello@123! Welcome_to PHP#2025.";

// Convert string into an array of characters
$chars = str_split($text);

// Filter array: keep only a-z, A-Z, 0-9, and space
$filtered = array_filter($chars, function($ch) {
    return preg_match("/[a-zA-Z0-9 ]/", $ch);
});

// Join the filtered characters back into a string
$result = implode("", $filtered);

// Display results
echo "Original String: " . $text . "<br>";
echo "Cleaned String: " . $result;
?>


✅ Output:

Original String: Hello@123! Welcome_to PHP#2025.
Cleaned String: Hello123 Welcome to PHP2025
