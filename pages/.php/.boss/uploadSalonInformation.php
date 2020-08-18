<!DOCTYPE html>
<head>
    <title> Submitting your salon information to our system </title>
    <link rel="stylesheet" href="../../.css/styles.css" >
</head>
    
<body>
    <p id="home"> <a href="../../../index.php" > Home </a> </p>
        <p id="logout"> <a href="../../.html/.customer/customerSign-in.html">
                Logout </a></p>
<center>
    
<?php

/* 
 * This is the landing page where uploaded salon information is processed
 *
*/

include 'bossDatabaseConnection.php';

$sql = " SELECT mobileNumber from salon WHERE mobileNumber = '$_POST[mobileNumber]' ";

$result = mysqli_query($connection, $sql);

$row = mysqli_num_rows($result);

if( $row >= 1 )
{  echo " <p id=\"content\"> The salon with this number is already registered <br>"
    . "<br> Please use another number  <br> "
    . "Please <a href=\"../../.html/.boss/bossSign-in.html\" > Sign in here </a> "
        . "<br> OR <br> If you forgot your password <br>"
        . "<a href=\"../../.html/.boss/bossPasswordRecovery.html\" >"
        . " Recover it here </a> </p>";}

 else {
    

// insert customer information into 'mtejaData' table
     $target_dir="../.customer/mapichapicha/";
     $target_file=$target_dir.basename($_FILES['photos']['name']);
     move_uploaded_file($_FILES['photos']["tmp_name"], $target_file);
             
$sql = "INSERT INTO salon (salonName, location, services,2ndservice, 
    extras, mobileNumber,numberOfAttendants,workingHours,salonDescription,photos )
VALUES ('".$_POST['salonName']."', '".$_POST['location']."',"
        . " '".$_POST['services']."','".$_POST['2ndservice']."','".$_POST['extras']."',"
        ." '".$_POST['mobileNumber']."', '".$_POST['numberOfAttendants']."', "
        . "'".$_POST['workingHours']."', '".$_POST['salonDescription']."',"
        ." '".$target_file."')";

if ($connection->query($sql) === TRUE) {
  echo "<p id=\"content\"> You have successfully registered <br>"
    . " your salon in our system."
       ." <br> Now you can comfortably manage your <br>"
          . "salon booking on your fingertips.<br><br> "
       ." <a href=\"bookingsBossSide.php\" >"
          . " View and confirm customers bookings</a> <br> </p>";
  
  
      
  }
 
else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
 }
$connection->close();

?>

 
    
    
</center>
     <hr>
     <center>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise <br>
            all material is copyright of Msusi Technologies Co. Ltd
        </p>
        
    </footer>
        
        </center>
</body>
</html>
    