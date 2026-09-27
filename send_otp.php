<?php
session_start();

// Example email OTP sending (you can adapt it to SMS as needed)
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($email) {
    // Generate a random OTP
    $otp = rand(100000, 999999);

    // Store the OTP in session or database
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;

    // Send the OTP via email (or SMS if using a service like Twilio)
    $subject = "Your OTP Code";
    $message = "Your OTP code is $otp";
    $headers = "From: noreply@yourdomain.com";

    if (mail($email, $subject, $message, $headers)) {
        // Redirect to OTP verification page
        header('Location: verify_otp.php');
    } else {
        echo "Failed to send OTP. Please try again.";
    } 
} else {
    echo "Invalid email address.";
}
?>
