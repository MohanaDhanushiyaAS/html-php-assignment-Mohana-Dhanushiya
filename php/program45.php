<?php
// Function to compare two multidimensional arrays
function array_diff_recursive($array1, $array2) {
    $result = [];

    foreach ($array1 as $key => $value) {
        if (is_array($value)) {
            // Recursive call if value is an array
            if (!isset($array2[$key]) || !is_array($array2[$key])) {
                $result[$key] = $value;
            } else {
                $diff = array_diff_recursive($value, $array2[$key]);
                if (!empty($diff)) {
                    $result[$key] = $diff;
                }
            }
        } else {
            // Compare scalar values
            if (!array_key_exists($key, $array2) || $array2[$key] !== $value) {
                $result[$key] = $value;
            }
        }
    }

    return $result;
}

// Example arrays
$array1 = [
    "student1" => ["name" => "Alice", "marks" => 85],
    "student2" => ["name" => "Bob", "marks" => 72],
    "student3" => ["name" => "Charlie", "marks" => 91]
];

$array2 = [
    "student1" => ["name" => "Alice", "marks" => 85],
    "student2" => ["name" => "Bob", "marks" => 70],
    "student3" => ["name" => "Charlie", "marks" => 95]
];

// Find difference
$diff = array_diff_recursive($array1, $array2);

// Display result
echo "<pre>";
print_r($diff);
echo "</pre>";
?>



Output
Array
(
    [student2] => Array
        (
            [marks] => 72
        )

    [student3] => Array
        (
            [marks] => 91
        )
)