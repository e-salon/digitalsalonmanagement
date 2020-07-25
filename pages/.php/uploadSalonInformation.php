<?php

/* 
 * This is the landing page where uploaded salon information is processed
 */

define('databaseName','salonmanagers', TRUE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = databaseName;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


// insert customer information into 'mtejaData' table
$sql = "INSERT INTO salon (salonName, location, services, extras, mobileNumber,numberOfAttendants,workingHours, birthdate )
VALUES ('".$_POST['salonName']."', '".$_POST['location']."', '".$_POST['services']."','".$_POST['extras']."',"
        . "'".$_POST['mobileNumber']."', '".$_POST['numberOfAttendants']."', '".$_POST['workingHours']."', '".$_POST['gender']."')";

if ($conn->query($sql) === TRUE) {
  echo "Congratulations!<br>"
    . "You are successfully registered.<br>";
  echo'<p> Click here <a href="../.html/bossSign-in.html" > Log in</a> to log in</p>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// sql to create table
/*$sql = "CREATE TABLE salon (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
salonName VARCHAR(30) NOT NULL,
location VARCHAR(30) NOT NULL,
services VARCHAR(30) NOT NULL,
extras VARCHAR(50),
mobileNumber VARCHAR(30),
numberOfAttendants VARCHAR(50) NOT NULL,
workingHours VARCHAR(50) NOT NULL,
gender VARCHAR(30),
 occupations VARCHAR(50),
 birthdate date,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table salon created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/

$conn->close();

