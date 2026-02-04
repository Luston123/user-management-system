<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>

<h1>Dashboard</h1>
<p>Welcome! You are logged in.</p>
<a href="../auth/logout.php">Logout</a>
