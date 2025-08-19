<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// First row - headers
echo "<tr><td></td>";
for ($col = 1; $col <= 3; $col++) {
    echo "<td>$col</td>";
}
echo "</tr>";

// Table body
for ($row = 1; $row <= 3; $row++) {
    echo "<tr>";
    // Row header
    echo "<td>$row</td>";

    // Division values
    for ($col = 1; $col <= 3; $col++) {
        $value = $row / $col;
        
        // If it's a whole number, print without decimal
        if (intval($value) == $value) {
            echo "<td>$value</td>";
        } else {
            echo "<td>" . rtrim(rtrim(number_format($value, 2), '0'), '.') . "</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>
