<?php
// Main string
$text = "PHP is a powerful scripting language used for web development.";

// Array of words/phrases to search
$searchItems = ["PHP", "Java", "web", "Python"];

// Function to check and display matches
function checkStringContains($text, $items) {
    foreach ($items as $item) {
        if (strpos($text, $item) !== false) {
            echo "✅ The string contains: '$item'<br>";
        } else {
            echo "❌ The string does not contain: '$item'<br>";
        }
    }
}

// Call the function
checkStringContains($text, $searchItems);
?>

Output
✅ The string contains: 'PHP'
❌ The string does not contain: 'Java'
✅ The string contains: 'web'
❌ The string does not contain: 'Python'


