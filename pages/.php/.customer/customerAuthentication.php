 <!DOCTYPE html>
 <html lang="en">
     <head>
    
    <title> Verify your login details</title>  
    <link rel="stylesheet" href="../../.css/styles.css" >
</head>
    
<body>
<center>
     <?php
     $mobile = getCustomerMobileNumber();
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
			echo "<p> Either password or mobile number is  incorrect<br>"
                             . "Please try again </p>";
			echo "<p> Please be sure you are using the details you used to sign-up</p>";
			
		}
	}
        
       
        
        
        ?>
    
    <?php
     function getCustomerMobileNumber(){
            return $_POST['mobileNumber'];
        }
    ?>
    <p>
        Forgot your password? <a href="../../.html/.customer/customerPasswordRecovery.html" >Recover it here</a>
    </p>
  <hr>
    <footer>
        <p id="footer">
       
            Unless explicitly expressed otherwise <br>
            all material is copyright of &#169; 2020 Msusi Technologies Co. Ltd
        </p>
        
    </footer>
</center>
</body>
 </html>

  
