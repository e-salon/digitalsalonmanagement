<?php
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$connection = new mysqli($servername,$username, $password );

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
echo "Wozah!! Connected successfully<br>";

// Create database
/*$sql = "CREATE DATABASE salonManagers";
if ($connection->query($sql) === TRUE) {
  echo "Congratulations Database created successfully<br>";
} 
else {
  echo "Error creating database: " . $connection->error;
}*/

// sql to create table
$sql = "CREATE TABLE salonmanagersregistry(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
mobileNumber VARCHAR(30) NOT NULL,
email VARCHAR(50),
age VARCHAR(50),
password VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table salonmanagersregistry created successfully";
} 
else {
  echo "Error creating table: " . $conn->error;
}


$connection->close();
?>





















