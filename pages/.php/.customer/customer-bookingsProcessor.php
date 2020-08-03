<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Book a slot to your favorite salon </title>  
        <link rel="stylesheet" href="../../.css/styles.css" >
        
        
        
    </head>
    <body> 
        
    <center>   
        
    <?php
    
    include '../.boss/bossDatabaseConnection.php';
    
echo 'Booking a hair service with your top-notch hair stylists is now easier than ever.<br>';

        $query = "INSERT INTO booking (salonName, bookedService, bookeeMobile, bookedTime,bookingConfirmed)
                VALUES ('".$_POST['salonName']."','".$_POST['bookedService']."','".$_POST['bookeeMobile']."','".$_POST['bookedTime']."','".$_POST['bookingConfirmed']."')";
        
       if ($connection->query($query) === TRUE) {
  echo " You have successfully made a booking slot <br>";
  echo'<p> Kindly wait for the salon manager to confirm your booking slot</p>';
} 
else {
  echo "Error: " . $query . "<br>" . $connection->error;
}
        
$connection->close();
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