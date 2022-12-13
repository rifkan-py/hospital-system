<?php

$servername = "localhost";
$username = "root";
$password = "password";
$db_name = "hospital_system";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}