<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "freshbloom";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        header("Location: home.php");
        exit();
    } else {
        echo "❌ Invalid password! <a href='login.html'>Try again</a>";
    }
} else {
    echo "❌ No user found with this email! <a href='register.html'>Register here</a>";
}

$stmt->close();
$conn->close();
