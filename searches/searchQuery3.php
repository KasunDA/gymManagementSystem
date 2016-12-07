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

$sql = "SELECT tempCustomer.tcFirstName, tempCustomer.tcLastName FROM tempCustomer WHERE tempCustomer.timesLeft=(SELECT MAX(tempCustomer.timesLeft) FROM tempCustomer)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "First name: " . $row["tcFirstName"] .  "<br>". "   Last name: " . $row["tcLastName"] .  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>