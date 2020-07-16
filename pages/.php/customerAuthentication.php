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



	//include('connection.php');
	if(isset($_POST["submit"])){
		$mobileNumber = $_POST['mobileNumber'];
		$password = $_POST['password'];

		$query = "SELECT mobileNumber, password from mtejadata  WHERE mobileNumber = '$mobileNumber' AND password = '$password'";
		$result = mysqli_query($conn, $query);

		$row = mysqli_num_rows($result);
                
		if($row ==  1){
			header("location:successfulLogin.php");
		}
                
		else{
			echo "<p class='error1'>Password or mobile number not correct</p>";
			
		}
	}
	









?>

