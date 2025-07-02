<?php
$servername = getenv("DB_HOST") ?: "localhost";
$username   = getenv("DB_USER") ?: "your_username";
$password   = getenv("DB_PASSWORD") ?: "your_password";
$dbname     = getenv("DB_NAME") ?: "pizza";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

