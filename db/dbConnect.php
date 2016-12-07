<?php

$servername = "localhost";
$username = "root";
$password = "09tc42";
$dbname = "gymManagementProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successful";
}

$conn->close();
?>