<?php
$servername = "localhost";
$username = "root";
$password = "pikachu37"; // Add your MySQL root password if you set one
$dbname = "mywebsite_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
