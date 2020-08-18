 <!DOCTYPE html>
 <html lang="en">
     <head>
    
    <title> Verify your login details</title>  
    <link rel="stylesheet" href="../../.css/styles.css" >
</head>
    
<body>
    <p id="home"> <a href="../../../index.php" > Home </a> </p>
<center>
     <?php
    
    include 'customerDatabaseConnection.php';

	if(isset($_POST["submit"])){
		$mobileNumber = $_POST['mobileNumber'];
		$password = $_POST['password'];
                $_SESSION['customerMobileNumber'] = $mobileNumber;
                $_SESSION['customerPassword'] = $password;

		$query = "SELECT mobileNumber, password from mtejadata  WHERE mobileNumber = '$mobileNumber' AND password = '$password'";
		$result = mysqli_query($connectionx, $query);

		$row = mysqli_num_rows($result);
                
		if($row ==  1){
			header("location:successfulCustomerLogin.php?mobileNumber");
		}
                
		else{
			echo "<p id=\"content\" > Either password or mobile number is  incorrect<br>"
                             . "Please try again <br> "
			. "Please be sure you are using the details you used to sign-up </p>";
			
		}
	}
        
       
        
        
        ?>
    
        <p>
        Forgot your password? <a href="../../.html/.customer/customerPasswordRecovery.html" >Recover it here</a>
    </p>
  <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise, <br>
            all material is copyright of Kunonu Technologies Co. Ltd
        </p>
        
    </footer>
</center>
</body>
 </html>

  
