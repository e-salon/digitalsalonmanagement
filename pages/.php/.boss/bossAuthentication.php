<!DOCTYPE html>

    <head>
        <title>Salon Manager Sign-in Form</title>

        <link rel="stylesheet" href="../../.css/styles.css" >
        <!--<script src="../.js/formValidation.js"></script>-->
        
            
    </head>

    
    <body>
        <center>
            
 <?php
include_once 'bossDatabaseConnection.php';

if(isset($_POST["submit"])){
		$mobileNumber = $_POST['mobileNumber'];
		$password = $_POST['password'];
                
                $_SESSION['bossMobileNumber'] = $mobileNumber;
                $_SESSION['bossPassword'] = $password;


		$query = "SELECT mobileNumber, password from bossData  WHERE mobileNumber = '$mobileNumber' AND password = '$password'";
		$result = mysqli_query($connection, $query);

		$row = mysqli_num_rows($result);
                
		if($row ==  1){
			header("location:successfulBossLogin.php");
		}
                
		else{
			echo "<p> Either password or mobile number is  incorrect<br>"
                    . "Please try again </p>";
			echo "<p> Please be sure you are using the details you used to sign-up</p>";
			
		}
	}
	
?>
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

