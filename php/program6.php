<?php
session_start(); // Start session for SESSION example

// Set cookie (valid for 1 day)
setcookie("username_cookie", "Keerthana", time() + (86400), "/");

// Process POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username_session'] = $_POST['name']; // Store in session
    header("Location: index.php?submitted=1&age=" . $_POST['age']); // Redirect with GET
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Passing Information Between Pages</title>
</head>
<body>

<h2>Passing Data in PHP (GET, POST, SESSION, COOKIE)</h2>

<!-- POST form -->
<form method="post" action="">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" value="Submit">
</form>

<hr>

<?php
// Display GET data after form submit
if (isset($_GET['submitted'])) {
    echo "<h3>1️⃣ GET Method:</h3>";
    echo "Age (from GET): " . $_GET['age'] . "<br><br>";

    echo "<h3>2️⃣ POST Method:</h3>";
    echo "Name was sent via POST (and stored in session) — we can't see POST here because of redirect, but SESSION has it.<br><br>";

    echo "<h3>3️⃣ SESSION Method:</h3>";
    if (isset($_SESSION['username_session'])) {
        echo "Session Username: " . $_SESSION['username_session'] . "<br><br>";
    }

    echo "<h3>4️⃣ COOKIE Method:</h3>";
    if (isset($_COOKIE['username_cookie'])) {
        echo "Cookie Username: " . $_COOKIE['username_cookie'] . "<br><br>";
    }
}
?>

</body>
</html>
