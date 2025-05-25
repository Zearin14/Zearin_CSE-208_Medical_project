<?php
require 'db.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'patient')");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Registration successful. <a href='../login.html'>Login here</a>";
} else {
    echo "Error: " . $stmt->error;
}
?>
