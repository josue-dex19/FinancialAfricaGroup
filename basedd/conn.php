<?php
$servername = "localhost";
$username = "u302706399_josuedex";
$password = "#JosueDex08";
$dbname = "u302706399_tradefairoic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>