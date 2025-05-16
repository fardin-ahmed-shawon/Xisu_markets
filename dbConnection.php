<?php
$servername = "localhost";

$username = "root";
$password = "";
$database_name = "xisu_markets";

// $username = "xisu";
// $password = "Xnz8Y4lmP~~T";
// $database_name = "xisu_markets";

$conn = new mysqli($servername, $username, $password, $database_name);
$conn->set_charset("utf8mb4");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>