<?php
session_start();

// Destroy session when logout button clicked
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>

<h2>Thank you for using the system!</h2>

<a href="index.php">
    <button>Login Again</button>
</a>

</body>
</html>
