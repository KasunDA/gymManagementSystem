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

if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['worker_id'])) {
    $worker_id = $_POST['worker_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    echo "Insert Successful!";
} else {
    echo "Cannot be empty!";
}

$sql = "INSERT INTO personalTrainer " .
        "(wId, ptFirstName, ptLastName, ptEmail) " .
        "VALUES " .
        "('$worker_id','$first_name','$last_name', '$email')";

$result = $conn->query($sql);

$conn->close();
?>