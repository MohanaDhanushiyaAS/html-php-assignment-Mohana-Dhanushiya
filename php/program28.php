<?php
$a = 10;
$b = 10;
$c = 15;

// Compare $a and $b
echo "Comparing \$a and \$b: ";
var_dump($a == $b); // true if values are equal

// Compare $a and $c
echo "<br>Comparing \$a and \$c: ";
var_dump($a == $c); // false if values are not equal

// Compare $b and $c
echo "<br>Comparing \$b and \$c: ";
var_dump($b == $c);

// Compare all three
echo "<br>Are all three equal? ";
var_dump($a == $b && $b == $c);
?>



output:
Comparing $a and $b: bool(true)
Comparing $a and $c: bool(false)
Comparing $b and $c: bool(false)
Are all three equal? bool(false)