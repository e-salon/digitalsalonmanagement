<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Book a slot to your favorite salon </title>  
        <link rel="stylesheet" href="../../.css/styles.css" >
        
        
        
    </head>
    <body>
         <p id="home"> <a href="../../../index.php" > Home </a> </p>
        
    <center>   
        
    <?php
    
    include '../.boss/bossDatabaseConnection.php';
    
echo " <h3 class=\"heading\"> Booking a hair service with your top-notch hair stylists is now easier than ever </h3> <br> <br> ";

$sql = "SELECT bookeeMobile, salonName from booking WHERE bookeeMobile = '$_SESSION[customerMobileNumber]'"
        . "AND salonName = '$_POST[salonName]' AND bookingConfirmed = 'no' ";
 
    $result = mysqli_query($connection,$sql);
    $rowNumber = mysqli_num_rows($result);
    
    if( $rowNumber === 0){
   

        $query = "INSERT INTO booking (salonName,mobileNumber, bookedService, bookeeMobile, bookedTime,bookingConfirmed)
                VALUES ('".$_POST['salonName']."','".$_POST['mobileNumber']."','".$_POST['bookedService']."','".$_POST['bookeeMobile']."','".$_POST['bookedTime']."','".$_POST['bookingConfirmed']."')";
        
       if ($connection->query($query) === TRUE) {
            echo "<p id=\"content\" > You have successfully made a booking slot <br>"
            ." Kindly wait for the salon manager to confirm your booking slot <br> "
            . " <a href=\" viewConfirmedbookings.php\" > "
                    . "View your confirmed bookings here </a> </p>";
           } 
           
       else {
           echo "Error: " . $query . "<br>" . $connection->error;
    }}
    
 else {
    echo "<p id=\"content\"> You cannot arrage more than one "
     . "<br> unconfirmed bookings to a single salon <br>"
     . "Please wait for your first booking to be confirmed. <br> "
            . " <a href=\" viewConfirmedbookings.php\" > View your confirmed bookings here </a> </p>";
    
}
        
$connection->close();
?>
        
        <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise <br>
            all material is copyright of Msusi Technologies Co. Ltd
        </p>
        
    </footer>
    </center>
</body>
</html>