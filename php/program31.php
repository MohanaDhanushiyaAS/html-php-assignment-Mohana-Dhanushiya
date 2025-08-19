<?php
$fruits = ["apple", "banana", "cherry", "mango"];

array_shift($fruits); // removes "apple"

print_r($fruits);
?>



output:
Array
(
    [0] => banana
    [1] => cherry
    [2] => mango
)
