<?php
session_start();
if (!isset($_SESSION['technician_logged_in'])) {
    header("Location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>technician Manager</title>
</head>
<body>
    <h1>Welcome technician</h1>
    <a href="../technician_manager/add_technician.php">Go to Add technician</a>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>