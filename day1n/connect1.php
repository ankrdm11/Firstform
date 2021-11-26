<?php
// Create connection
$conn = new mysqli('localhost', 'root', '123456','DAY1');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>



