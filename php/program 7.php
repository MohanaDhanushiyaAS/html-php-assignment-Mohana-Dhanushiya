<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']); // Remove extra spaces

    if (!empty($name)) {
        echo "<h2>Hello, Welcome to $name!</h2>";
        echo "<h3>Have a nice day!!</h3>";
    } else {
        echo "<p style='color:red;'>Error: Please enter your name.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greeting Form</title>
</head>
<body>
    <form method="post" action="">
        Enter your name: 
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
