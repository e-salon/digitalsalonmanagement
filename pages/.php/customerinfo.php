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
$sql = "INSERT INTO MtejaData (firstName, lastName, mobileNumber, email, age, password )
VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['age']."', '".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
  echo "Congratulations!<br>"
    . "You are successfully registered.<br>";
  echo'<p> Click here <a href="../.html/customerSign-in.html" > Log in</a> to log in</p>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
