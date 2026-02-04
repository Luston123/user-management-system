
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}

echo "<h1>Welcome to the Dashboard</h1>";
echo "<p>User ID: " . $_SESSION['user_id'] . "</p>";
