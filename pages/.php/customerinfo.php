?php
define("databaseName", "customer_information", true);
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


// insert customer registration data into a 'MtejaData' table
$sql = "INSERT INTO MtejaData (firstName, lastName, mobileNumber, email, age, password )
VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['age']."', '".$_POST['password']."')";

if ($conn->query($sql) === TRUE) {
  echo "Congratulations!<br>"
    . "You have successfully registered.<br>";
  
  
    echo '<p> Click here to <a href="../.html/customerSign-in.html" >Login</a> </p>';
}

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
