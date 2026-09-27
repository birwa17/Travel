<?php
// error_reporting(0);
// $insert==false;

// Check if form is submitted
if(isset($_POST['name'])) {
  $db_hostname = "127.0.0.1"; // Default hostname
  $db_username = "root"; // Default username
  $db_password = ""; // Default password
  $db_name = "travel"; // Database name

  // Create connection
  $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

  // Check connection
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 
  // Sanitize inputs
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $package = mysqli_real_escape_string($conn, $_POST['package']);
  $deal = mysqli_real_escape_string($conn, $_POST['deal']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  // Insert data
  $sql = "INSERT INTO package (name, email, package, deal, message) VALUES ('$name', '$email', '$package', '$deal', '$message')";

  if(mysqli_query($conn, $sql)) {
    header('Location: payment.html');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
}
?>