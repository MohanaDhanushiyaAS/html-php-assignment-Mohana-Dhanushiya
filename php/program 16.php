<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <h2>Sum Calculator</h2>

    <form method="post">
        Enter first number: <input type="number" name="num1" required><br><br>
        Enter second number: <input type="number" name="num2" required><br><br>
        <input type="submit" name="calculate" value="Calculate Sum">
    </form>

    <?php
    // Function to return sum
    function addNumbers($a, $b) {
        return $a + $b;
    }

    // Check if form is submitted
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $sum = addNumbers($num1, $num2);

        echo "<h3>The sum of $num1 and $num2 is: $sum</h3>";
    }
    ?>
</body>
</html>


Sum Calculator
Enter first number: 
25


Enter second number: 
25


The sum of 25 and 25 is: 50