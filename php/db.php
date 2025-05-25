<?php
$host = 'localhost';
$db = 'medical_system';
$user = 'root';
$pass = ''; // use your actual password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
