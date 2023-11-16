<?php
session_start();

if (!isset($_SESSION['profile']) || $_SESSION['profile'] != "admin") {
    header("location: login.php");
    exit();
}
?>

<h1>Admin Dashboard</h1>
<p>Welcome Admin! You have all the privileges!</p>
<a href="logout.php">Logout</a>
