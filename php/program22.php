<?php
// Input string
$text = "PHP is powerful. PHP is easy to learn. I love PHP.";

// Word to search
$word = "PHP";

// Count occurrences (case-sensitive)
$count = substr_count($text, $word);

// Display result
echo "The word '$word' occurs $count times in the given string.";
?>
