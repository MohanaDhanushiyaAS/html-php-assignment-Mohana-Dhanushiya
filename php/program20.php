<?php
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = htmlspecialchars($_POST["message"]);
    }

    // If no errors, show success message
    if ($nameErr == "" && $emailErr == "" && $messageErr == "") {
        $successMsg = "Thank you, $name! Your message has been received.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Us</h2>
<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;">* <?php echo $nameErr; ?></span>
    <br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;">* <?php echo $emailErr; ?></span>
    <br><br>

    Message:<br>
    <textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
    <span style="color:red;">* <?php echo $messageErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($successMsg != "") {
    echo "<p style='color:green;'><strong>$successMsg</strong></p>";
}
?>

</body>
</html>
