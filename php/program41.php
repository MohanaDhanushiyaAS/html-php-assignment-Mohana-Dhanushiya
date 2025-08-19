<?php
// Input string containing emails
$text = "Contact us at support@example.com, sales@myshop.org or admin123@test.co.in for details.";

// Regular expression for emails
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}/";

// Extract all emails into an array
preg_match_all($pattern, $text, $matches);

// $matches[0] contains all found emails
$emails = $matches[0];

// Display result
echo "Extracted Emails:<br>";
foreach ($emails as $email) {
    echo $email . "<br>";
}
?>



✅ Output:

Extracted Emails:
support@example.com
sales@myshop.org
admin123@test.co.in