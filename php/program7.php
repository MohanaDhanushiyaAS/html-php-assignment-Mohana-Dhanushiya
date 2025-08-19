<!DOCTYPE html>
<html>
<head>
    <title>Greeting Form</title>
</head>
<body>

<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);

    if (empty($name)) {
        echo "<p style='color:red;'>Error: Please enter your name!</p>";
    } else {
        echo "<h3>Hello, Welcome to Everyone!</h3>";
        echo "<p>Have a nice day!!</p>";
    }
}
?>

<form method="post" action="">
    Enter your name: 
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>
