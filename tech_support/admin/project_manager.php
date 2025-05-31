<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Project Manager</title>
</head>
<body>
    <h1>Welcome Admin</h1>
    <a href="../product_manager/add_product.php">Go to Add Products</a>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>