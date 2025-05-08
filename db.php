<!-- db.php - Database connection -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login_system"; // ✅ DB name added here
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("සම්බන්ධතාවය අසාර්ථකයි: " . $conn->connect_error);
}
?>
