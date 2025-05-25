<?php
session_start();
// In a full project, you would add login checks here

echo "<h2>Admin Dashboard</h2>";
echo "<ul>
    <li><a href='manage-patients.php'>Manage Patients</a></li>
    <li><a href='manage-doctors.php'>Manage Doctors</a></li>
    <li><a href='manage-appointments.php'>Manage Appointments</a></li>
</ul>";
?>
