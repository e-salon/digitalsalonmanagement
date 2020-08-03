<!DOCTYPE html>
<head>
    <title> Submitting your salon information to our system </title>
    <link rel="stylesheet" href="../../.css/styles.css" >
</head>
    
<body>
<center>
    
<?php

/* 
 * This is the landing page where uploaded salon information is processed
 *
*/

include 'bossDatabaseConnection.php';


// insert customer information into 'mtejaData' table
$sql = "INSERT INTO salon (salonName, location, services, extras, mobileNumber,numberOfAttendants,workingHours,salonDescription )
VALUES ('".$_POST['salonName']."', '".$_POST['location']."', '".$_POST['services']."','".$_POST['extras']."',"
        . "'".$_POST['mobileNumber']."', '".$_POST['numberOfAttendants']."', '".$_POST['workingHours']."', '".$_POST['salonDescription']."')";

if ($connection->query($sql) === TRUE) {
  echo "You have successfully registered your salon in our system."
          . "<br> Now you can comfortably manage your salon booking on your fingertips.<br>";
  echo'<p> <a href="bookingsBossSide.php" > View and confirm customers bookings</a></p>';
} 
else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();

?>

 
    
    
</center>
     <hr>
     <center>
    <footer>
        <p id="footer">
       
            Unless explicitly expressed otherwise <br>
            all material is copyright of &#169; 2020 Msusi Technologies Co. Ltd
        </p>
        
    </footer>
        
        </center>
</body>
</html>
    