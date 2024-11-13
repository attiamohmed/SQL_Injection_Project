<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "vulnerable_app_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<div style='padding: 10px; border-radius: 5px; background-color: #d4edda; color: #155724; margin: 10px 0;'>
            Login successful! Welcome, " . ($user) . "
        </div>";
} else {
    echo "<div style='padding: 10px; border-radius: 5px; background-color: #f8d7da; color: #721c24; margin: 10px 0;'>
            Login failed. Invalid username or password.
        </div>";
}

$stmt->close();
$conn->close();
?>
