<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['account_id'])) {
    $account_id = $_GET['account_id'];
    echo "Viewing details for Account ID: $account_id";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    $recipient = $_POST['recipient'];
    echo "Transferred Rs. $amount to $recipient successfully!";
}
?>

<!-- GET Example: Check account details -->
<form method="GET" action="">
    <h3>Check Account Details (GET)</h3>
    Account ID: <input type="text" name="account_id" required>
    <input type="submit" value="Check Balance">
</form>

<!-- POST Example: Transfer money -->
<form method="POST" action="">
    <h3>Money Transfer (POST)</h3>
    Amount: <input type="number" name="amount" required><br>
    Recipient: <input type="text" name="recipient" required><br>
    <input type="submit" value="Transfer">
</form>



