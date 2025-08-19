<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Display confirmation
        echo "<h3>Thank you for your message!</h3>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p>We have received your message and will contact you soon.</p>";
    } else {
    ?>
        <!-- Form -->
        <form method="post">
            Name: <input type="text" name="name" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            Message: <textarea name="message" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    <?php
    }
    ?>
</body>
</html>
