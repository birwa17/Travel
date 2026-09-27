<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$location = $_POST['location'];
$review = $_POST['review'];
$rating = $_POST['rating'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO reviews (name, location, review, rating) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $location, $review, $rating);

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "New review added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close(); 
?>