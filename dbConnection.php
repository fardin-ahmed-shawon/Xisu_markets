<?php
$servername = "localhost";

$username = "root";
$password = "";
$database_name = "xisu_markets";

// $username = "xisu";
// $password = "Xnz8Y4lmP~~T";
// $database_name = "xisu_markets";

$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>