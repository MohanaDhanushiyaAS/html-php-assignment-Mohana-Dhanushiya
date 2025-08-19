<?php
// Original array
$x = array(1, 2, 3, 4, 5);

// Delete element (say element with index 2 → value 3)
unset($x[2]);

// Reindex the array to fix gaps
$x = array_values($x);

// Print array elements
echo "Array after deletion:<br>";
foreach ($x as $value) {
    echo $value . " ";
}
?>



Output
Array after deletion:
1 2 4 5
