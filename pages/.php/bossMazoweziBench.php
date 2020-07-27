<?php
define('databaseName','salonManagers', TRUE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = databaseName;


// create a connection
$connection = new mysqli($servername,$username, $password, $dbname );

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
$sql = "CREATE TABLE bossData(
boss_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
mobileNumber VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50),
password2 VARCHAR(50),
gender VARCHAR(30),
birthdate date,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($connection->query($sql) === TRUE) {
  echo "Table bossData created successfully";
} 
else {
  echo "Error creating table: " . $connection->error;
}


$connection->close();
?>





















