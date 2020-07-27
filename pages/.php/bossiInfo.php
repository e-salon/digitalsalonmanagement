<?php
define('databaseName','customer_information', TRUE);
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
$sql = "INSERT INTO mtejaData (firstName, lastName, mobileNumber, email, age, password,password2,gender, occupations, birthdate )
VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['age']."', '".$_POST['password']."', '".$_POST['password2']."'), '".$_POST['gender']."', '".$_POST['occupations']."', '".$_POST['birthdate']."'";

if ($conn->query($sql) === TRUE) {
  echo "Congratulations!<br>"
    . "You are successfully registered.<br>";
  echo'<p> Click here <a href="../.html/bossSign-in.html" > Log in</a> to log in</p>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// sql to create table
/*$sql = "CREATE TABLE mtejaData (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
mobileNumber VARCHAR(30) NOT NULL,
email VARCHAR(50),
age VARCHAR(30),
password VARCHAR(50) NOT NULL,
password2 VARCHAR(50) NOT NULL,
gender VARCHAR(30),
 occupations VARCHAR(50),
 birthdate date,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table mtejaData created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/

$conn->close();
