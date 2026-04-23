<?php
session_start();

// Check if logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>

<p><strong>Session Username:</strong> <?php echo $_SESSION['username']; ?></p>

<form action="logout.php" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>

</body>
</html>
