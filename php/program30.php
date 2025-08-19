<?php
function generatePassword($length = 12) {
    // Characters to use in password
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}|;:,.<>?';
    
    $password = '';
    $charLength = strlen($chars);

    // Generate password using random characters
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charLength - 1)];
    }

    return $password;
}

// Generate and display random password
echo "Generated Password: " . generatePassword(12);
?>


output:
Generated Password: }$D8J,M4Uy>w