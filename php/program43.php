<?php
// Passwords to test
$passwords = ["Password123!", "weakpass", "StrongPass1@", "short1!"];

// Regex pattern
$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

// Validate each password
foreach ($passwords as $pwd) {
    if (preg_match($pattern, $pwd)) {
        echo "✅ '$pwd' is a valid password.<br>";
    } else {
        echo "❌ '$pwd' is NOT a valid password.<br>";
    }
}
?>



Output
✅ 'Password123!' is a valid password.
❌ 'weakpass' is NOT a valid password.
✅ 'StrongPass1@' is a valid password.
❌ 'short1!' is NOT a valid password.