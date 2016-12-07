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

if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['customer_id'])) {
    $worker_id = $_POST['customer_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $times_left = $_POST['times_left'];
    echo "Insert Successful!";
} else {
    echo "Cannot be empty!";
}

$sql = "INSERT INTO tempCustomer " .
        "(wId, ptFirstName, ptLastName, ptEmail, timesLeft, timesUsed) " .
        "VALUES " .
        "('$worker_id','$first_name','$last_name', '$email', '$times_left', 0)";

$result = $conn->query($sql);

$conn->close();
?>