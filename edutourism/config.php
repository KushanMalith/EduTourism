<?php
$servername = "localhost";
$username = "edutourism_user";
$password = "admin";
$dbname = "edutourism";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>