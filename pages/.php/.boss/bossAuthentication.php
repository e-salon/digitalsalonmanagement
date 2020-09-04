<!DOCTYPE html>

    <head>
        <title>Salon Manager Sign-in Form</title>

        <link rel="stylesheet" href="../../.css/styles.css" >
        <!--<script src="../.js/formValidation.js"></script>-->
        
            
    </head>

    
    <body>
        <p id="home"> <a href="../../../index.php" > Home </a> </p>
        <center>
            
 <?php
require_once 'DatabaseConnection.php';

if(isset($_POST["submit"])){
		$mobileNumber = $_POST['mobileNumber'];
		$password = $_POST['password'];
                
                $_SESSION['bossMobileNumber'] = $mobileNumber;
                $_SESSION['bossPassword'] = $password;


		$query = "SELECT mobileNumber, password from bossData  WHERE"
                        . " mobileNumber = '$mobileNumber' AND"
                        . " password = '$password'";
		$result = mysqli_query($connection, $query);

		$row = mysqli_num_rows($result);
                
		if($row ==  1){
			header("location:successfulBossLogin.php");
		}
                
		else{
			echo "<p id=\"content\" > Either password or mobile"
                    . " number is  incorrect<br>"
                    . "Please try again <br> "
			." Please be sure you are using the details you used to "
                                . "sign-up </p>";
			
		}
	}
	
?>
  <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise, <br>
            all material is copyright of Msusi Technologies Co. Ltd
        </p>
        
    </footer>
        </center>
</body>
</html>

