<?php
require 'db.php';

$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);

$doctors = [];

while ($row = $result->fetch_assoc()) {
    $doctors[] = $row;
}

header('Content-Type: application/json');
echo json_encode($doctors);
?>
