<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}

// authenticate a customer 
$sql = "SELECT mobileNumber, password FROM mtejadata";
$result = $conn->query($sql);

	if(isset($_POST["submit"])){
		$mobileNumber = $_POST['mobileNumber'];
		$password = $_POST['password'];

		$query = "SELECT mobileNumber, password from mtejadata  WHERE mobileNumber = '$mobileNumber' AND password = '$password'";
		$result = mysqli_query($conn, $query);

		$row = mysqli_num_rows($result);
                
		if($row ==  1){
			header("location:successfulCustomerLogin.php");
		}
                
		else{
			echo "<p> Either password or mobile number is  incorrect<br>"
                    . "Please try again </p>";
			
		}
	}
	









?>

