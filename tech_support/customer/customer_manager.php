<?php
session_start();
if (!isset($_SESSION['customer_logged_in'])) {
    header("Location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>customer Manager</title>
</head>
<body>
    <h1>Welcome customer</h1>
    <a href="">Go to Add Customer</a>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>