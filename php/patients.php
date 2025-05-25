<?php
require 'db.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

echo "<table><tr><th>Name</th><th>Age</th><th>Gender</th><th>History</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['gender']}</td><td>{$row['history']}</td></tr>";
}

echo "</table>";
?>
