<?php
// Example number
$number = 12345;
$sum = 0;

// Temporary variable to hold number
$temp = $number;

// Loop until number becomes 0
while ($temp > 0) {
    $digit = $temp % 10; // Get last digit
    $sum += $digit;      // Add to sum
    $temp = (int)($temp / 10); // Remove last digit
}

// Display result
echo "The sum of the digits of $number is: $sum";
?>



