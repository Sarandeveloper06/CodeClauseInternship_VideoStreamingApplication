<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video1";  // Make sure your DB name matches this

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>