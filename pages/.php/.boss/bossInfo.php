<!DOCTYPE html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <link rel="stylesheet" href="../../.css/styles.css" >
 <title> Salon manager information processor</title>
</head>
<body>
<center>
  <?php

include 'bossDatabaseconnection.php';
$sql = " SELECT mobileNumber from bossData WHERE mobileNumber = '$_POST[mobileNumber]' ";

$result = mysqli_query($connection, $sql);
$row = mysqli_num_rows($result);

if( $row >= 1)
{    echo " <p id=\"content\"> This number is already registered <br><br> "
    . " Please <a href=\"../../.html/.boss/bossSign-in.html\" > "
        . "Sign in here </a> using this number <br>"
        . "<br> OR <br>"
        . "If you forgot your password "
        . "<a href=\"../../.html/.boss/bossPasswordRecovery.html\" > "
        . "Recover it here </a> </p>";}

 else {
    
// insert customer information into 'mtejaData' table
$sql = "INSERT INTO bossData (firstName, lastName, mobileNumber, email, password,password2,gender, birthdate )
VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['password']."', '".$_POST['password2']."', '".$_POST['gender']."', '".$_POST['birthdate']."')";

if ($connection->query($sql) === TRUE) {
  echo " <p id=\"content\" > Congratulations!<br><br>"
    . "You are successfully registered.<br><br>"
  ." Click here "
   . "<a href=\"../../.html/.boss/bossSign-in.html\" > Log in here </a> "
          . "to easily manage your salon on the go </p>";
} 
else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

}

$connection->close();
?>     
    
</center>  
     <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise <br>
            all material is copyright of Msusi Technologies Co. Ltd
        </p> 
</body>
</html>

  