<?php
// Database connection parameters
$db_hostname = "localhost";
$db_port = "3306"; // Default MySQL port
$db_username = "root";
$db_password = "";
$db_name = "travel";

// Create connection
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data and sanitize inputs 
$pname = $conn->real_escape_string($_POST['pname']);
$nguest = $conn->real_escape_string($_POST['nguest']);
$date = $conn->real_escape_string($_POST['date']);
$ldate = $conn->real_escape_string($_POST['ldate']);

// Insert data into the 'users' table
$sql = "INSERT INTO users (pname, nguest, date, ldate) VALUES ('$pname', '$nguest', '$date', '$ldate')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for registration";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>