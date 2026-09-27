<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Skytravel</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

<form action="register.php" method="POST" style="background-color: #fff; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; max-width: 400px; width: 100%;">
    <h3 style="text-align: center; color: #333; margin-bottom: 20px; font-size: 24px;">Register</h3>
    <input type="text" name="name" placeholder="Enter your name" required style="width: 100%; padding: 12px; margin: 8px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" />
    <input type="email" name="email" placeholder="Enter your email" required style="width: 100%; padding: 12px; margin: 8px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" />
    <input type="password" name="password" placeholder="Enter your password" required style="width: 100%; padding: 12px; margin: 8px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;" />
    <input type="submit" value="Register" class="btn" style="width: 100%; background-color: #FFA500; color: white; padding: 12px; margin-top: 16px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;" />
    
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('config.php'); 
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO registor (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        echo "<p style='text-align: center; color: green; margin-top: 20px; font-size: 16px;'>Registration successful! You can now <a href='login.php' style='color: #007bff;'>Login</a></p>";
    } else {
        echo "<p style='text-align: center; color: red; margin-top: 20px; font-size: 16px;'>Registration failed. Please try again.</p>";
    }
}
?>

</body>
</html>
