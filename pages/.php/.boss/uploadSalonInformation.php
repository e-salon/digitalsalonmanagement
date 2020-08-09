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

$sql = " SELECT mobileNumber from salon WHERE mobileNumber = '$_POST[mobileNumber]' ";

$result = mysqli_query($connection, $sql);

$row = mysqli_num_rows($result);

if( $row >= 1 )
{  echo " <p id=\"content\"> This number is already registered <br> "
    . "<a href=\"../../.html/.boss/bossSign-in.html\" > Sign in here </a> "
        . "or If you forgot your password <a href=\"../../.html/.boss/bossPasswordRecovery.html\" > Recover it here</a></p>";}

 else {
    

// insert customer information into 'mtejaData' table
$sql = "INSERT INTO salon (salonName, location, services, extras, mobileNumber,numberOfAttendants,workingHours,salonDescription,photos )
VALUES ('".$_POST['salonName']."', '".$_POST['location']."', '".$_POST['services']."','".$_POST['extras']."',"
        ." '".$_POST['mobileNumber']."', '".$_POST['numberOfAttendants']."', '".$_POST['workingHours']."', '".$_POST['salonDescription']."',"
        ." '".$_POST['photos']."')";

if ($connection->query($sql) === TRUE) {
  echo "<p id=\"content\"> You have successfully registered your salon in our system."
       ." <br> Now you can comfortably manage your salon booking on your fingertips.<br>"
       ." <a href=\"bookingsBossSide.php\" > View and confirm customers bookings</a> <br> "
          . " Add some pictures to show your creativity <br> <br> "
          . " <form name=\"form1\" enctype=\"multipart/form-data\" "
          . " action=\"\" method=\"POST\" > "
          . " < input type=\"submit\" name=\"submit2\" value=\"display\"> "
          . "</form> </p>";
  
  if(isset($_POST["submit2"])){
      
      $res = mysqli_query($connection,"select photos from salon ");
      echo "<table>";
      echo "<tr>";
      while ($row=myqli_fetch_array($res)){
          echo "<td>";
          echo '<img src="data: image/jpeg
           echo "</tr>"; ; base64,'. base64_encode($row['image']).'height="200" width="200"/>';
          echo "<br>";
                   echo"</table>";}
      
      
  }
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
    