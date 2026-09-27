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

$sql = "SELECT name, location, review, rating FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="swiper-wrapper">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="swiper-slide">';
        echo '<div class="box">';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<span>' . $row["location"] . '</span>';
        echo '<p>' . $row["review"] . '</p>';
        echo '<div class="stars">';
        for ($i = 0; $i < $row["rating"]; $i++) {
            echo '<i class="fas fa-star"></i>';
        } 
        for ($i = $row["rating"]; $i < 5; $i++) {
            echo '<i class="far fa-star"></i>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo "0 reviews";
}

$conn->close();
?>
