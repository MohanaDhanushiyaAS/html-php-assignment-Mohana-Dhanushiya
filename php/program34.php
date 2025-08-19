<?php
// Function to replace all occurrences of a word using regex
function replaceWord($text, $find, $replace) {
    // \b ensures whole word match, preg_quote escapes special chars, i = case-insensitive
    $pattern = "/\b" . preg_quote($find, "/") . "\b/i";
    return preg_replace($pattern, $replace, $text);
}

// Example text
$sentence = "PHP is powerful. I like php because PHP is easy to learn. Many use PHP for web apps.";

// Define word to search and replace
$searchWord = "PHP";
$replacementWord = "Python";

// Perform replacement
$result = replaceWord($sentence, $searchWord, $replacementWord);

// Display output
echo "Original Text: <br>" . $sentence . "<br><br>";
echo "Modified Text: <br>" . $result;
?>


output

Original Text:
PHP is powerful. I like php because PHP is easy to learn. Many use PHP for web apps.

Modified Text:
Python is powerful. I like Python because Python is easy to learn. Many use Python for web apps.
