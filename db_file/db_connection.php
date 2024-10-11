<?php
$servername = "localhost";
$username = "dbu_beroeps_100546"; // Your MySQL username
$password = "Carharrt@2024"; // Your MySQL password
$dbname = "BEROEPS2_100546";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
