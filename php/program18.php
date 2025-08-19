<?php
$name = "Keerthana";
$age = 21;
$city = null;

// Check variables
if (isset($name)) {
    echo "Name is set.<br>";
}

if (isset($age, $name)) {
    echo "Both age and name are set.<br>";
}

if (!isset($city)) {
    echo "City is not set or is NULL.<br>";
}

// Example with undefined variable
if (!isset($country)) {
    echo "Country is not set.<br>";
}
?>
