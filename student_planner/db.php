<?php
$host = "$sql109.infinityfree.com";
$user = "$if0_38489351"; // Default XAMPP MySQL user
$pass = "$U5C0nDruJu"; // No password by default
$dbname = "$if0_38489351_student_planner";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// $conn = new mysqli($sql109.infinityfree.com, $if0_38489351, $U5C0nDruJu, database: $if0_38489351_student_planner);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
