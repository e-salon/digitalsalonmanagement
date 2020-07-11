<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}


$sql = "SELECT mobileNumber, password FROM mtejadata";
$result = $conn->query($sql);

//if ( $_POST["mobileNumber"] == )









?>

