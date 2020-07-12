<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = customerdata;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";



$sql = "INSERT INTO MtejaData (firstName, lastName, mobileNumber, email, age, password )
VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['age']."', '".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


/*$say = htmlspecialchars($_POST['firstName']);
echo 'Your first name entered is '.$say ; */

// sql to create table
/*$sql = "CREATE TABLE MtejaData(
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
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}*/

$conn->close();
?>