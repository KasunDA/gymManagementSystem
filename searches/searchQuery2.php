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
}

if ( ! empty($_POST['times'])){
    $times = $_POST['times'];
}

$sql = "SELECT tempCustomer.tcEmail FROM tempCustomer WHERE tempCustomer.timesLeft<$times";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "email: " . $row["tcEmail"] .  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>