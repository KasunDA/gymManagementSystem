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

if ( ! empty($_POST['type'])){
    $type = $_POST['type'];
}

$sql = "SELECT permCustomer.pcEmail FROM customer, permCustomer WHERE permCustomer.cId=customer.cId AND permCustomer.type='$type'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Email: " . $row["pcEmail"] .   "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>