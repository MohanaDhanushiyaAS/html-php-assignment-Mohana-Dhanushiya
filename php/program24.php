<?php
// Original string
$text = " Hello World! Welcome to PHP String Functions. ";

// Display original
echo "<h3>Original String:</h3>";
echo "'$text'<br><br>";

// 1. trim()
$trimmed = trim($text);
echo "1. trim(): '$trimmed'<br>";

// 2. strlen()
echo "2. strlen(): " . strlen($trimmed) . "<br>";

// 3. str_word_count()
echo "3. str_word_count(): " . str_word_count($trimmed) . " words<br>";

// 4. strtoupper()
echo "4. strtoupper(): " . strtoupper($trimmed) . "<br>";

// 5. strtolower()
echo "5. strtolower(): " . strtolower($trimmed) . "<br>";

// 6. ucfirst()
echo "6. ucfirst(): " . ucfirst(strtolower($trimmed)) . "<br>";

// 7. ucwords()
echo "7. ucwords(): " . ucwords(strtolower($trimmed)) . "<br>";

// 8. strrev()
echo "8. strrev(): " . strrev($trimmed) . "<br>";

// 9. substr()
echo "9. substr(): " . substr($trimmed, 6, 5) . "<br>";

// 10. strpos()
echo "10. strpos() of 'PHP': " . strpos($trimmed, "PHP") . "<br>";

// 11. str_replace()
echo "11. str_replace(): " . str_replace("World", "Universe", $trimmed) . "<br>";

// 12. explode()
$words = explode(" ", $trimmed);
echo "12. explode(): <pre>";
print_r($words);
echo "</pre>";

// 13. implode()
echo "13. implode(): " . implode("-", $words) . "<br>";

// 14. strcmp()
echo "14. strcmp('Hello','Hello'): " . strcmp("Hello", "Hello") . "<br>";

// 15. str_repeat()
echo "15. str_repeat('PHP ', 3): " . str_repeat("PHP ", 3) . "<br>";

// 16. number_format()
$num = 12345.6789;
echo "16. number_format(): " . number_format($num, 2) . "<br>";

// 17. nl2br()
$multiline = "Line 1\nLine 2\nLine 3";
echo "17. nl2br(): " . nl2br($multiline) . "<br>";

// 18. addslashes() and stripslashes()
$strWithQuotes = "She said, 'Hello!'";
$escaped = addslashes($strWithQuotes);
echo "18. addslashes(): " . $escaped . "<br>";
echo "    stripslashes(): " . stripslashes($escaped) . "<br>";

// 19. htmlspecialchars()
$html = "<h1>Title</h1>";
echo "19. htmlspecialchars(): " . htmlspecialchars($html) . "<br>";

// 20. md5() and sha1()
echo "20. md5(): " . md5($trimmed) . "<br>";
echo "    sha1(): " . sha1($trimmed) . "<br>";
?>





Original String:
' Hello World! Welcome to PHP String Functions. '

1. trim(): 'Hello World! Welcome to PHP String Functions.'
2. strlen(): 45
3. str_word_count(): 7 words
4. strtoupper(): HELLO WORLD! WELCOME TO PHP STRING FUNCTIONS.
5. strtolower(): hello world! welcome to php string functions.
6. ucfirst(): Hello world! welcome to php string functions.
7. ucwords(): Hello World! Welcome To Php String Functions.
8. strrev(): .snoitcnuF gnirtS PHP ot emocleW !dlroW olleH
9. substr(): World
10. strpos() of 'PHP': 24
11. str_replace(): Hello Universe! Welcome to PHP String Functions.
12. explode():
Array
(
    [0] => Hello
    [1] => World!
    [2] => Welcome
    [3] => to
    [4] => PHP
    [5] => String
    [6] => Functions.
)
13. implode(): Hello-World!-Welcome-to-PHP-String-Functions.
14. strcmp('Hello','Hello'): 0
15. str_repeat('PHP ', 3): PHP PHP PHP
16. number_format(): 12,345.68
17. nl2br(): Line 1
Line 2
Line 3
18. addslashes(): She said, \'Hello!\'
stripslashes(): She said, 'Hello!'
19. htmlspecialchars(): <h1>Title</h1>
20. md5(): 5554216c30a54b26d5d5fd871fabd4fb
sha1(): c3a69ca707966f0ea1617b60cab70985553e2bb5

