<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $correct_username = "admin";
    $correct_password = "1234"; 

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['admin_logged_in'] = true;  
        header("Location: project_manager.php"); 
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>