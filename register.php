<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freshbloom";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $hashedPassword);

if ($stmt->execute()) {
    $_SESSION['user_id'] = $stmt->insert_id;
    $_SESSION['email'] = $email;
    header("Location: home.php");
    exit();
} else {
    if ($conn->errno === 1062) {
        echo "⚠️ Email already exists! <a href='login.html'>Login here</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

$stmt->close();
$conn->close();
