<?php
$servername = "localhost"; // Change this to your server name
$username = "username"; // Change this to your MySQL username
$password = "password"; // Change this to your MySQL password
$database = "database_name"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
