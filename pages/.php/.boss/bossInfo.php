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

// insert customer information into 'mtejaData' table
$sql = "INSERT INTO bossData (firstName, lastName, mobileNumber, email, password,password2,gender, birthdate )
VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['password']."', '".$_POST['password2']."', '".$_POST['gender']."', '".$_POST['birthdate']."')";

if ($connection->query($sql) === TRUE) {
  echo "Congratulations!<br>"
    . "You are successfully registered.<br>";
  echo'<p> Click here <a href="../../.html/.boss/bossSign-in.html" > Log in</a> to log in</p>';
} 
else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>     
    
</center>  
    
</body>
</html>

  