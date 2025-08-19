<!DOCTYPE html>
<html>
<head>
    <title>Chess Board in PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<?php
echo "<table border='1'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        // Check if the sum of row and col is even or odd
        if (($row + $col) % 2 == 0) {
            echo "<td class='white'></td>";
        } else {
            echo "<td class='black'></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
