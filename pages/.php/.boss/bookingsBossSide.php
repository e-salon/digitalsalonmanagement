<!DOCTYPE html>
<html lang="en">
    <head>
        <title> View all your booked services </title>  
        <link rel="stylesheet" href="../../.css/styles.css" >
        
        
        
    </head>
    <body> 
        
    <center>   
        
    <?php
   
include_once 'bossDatabaseConnection.php';
echo 'Managing your hair service bookings is now easier than ever.<br>';

$query = "SELECT * FROM booking";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)){
    
    extract($row);

echo "<form action=\"bookingConfirmation.php\" method=\"post\" > <table ><tbody>"
. "<tr> <td> <strong> Salon Name </strong> </td> <td> <input type=\"text\" name=\"salonName\" value=\"$salonName\" > </td> </tr> <br>"
. "<tr> <td> <strong> <em> Booked Service </em> </strong> </td> <td> <input type=\"text\" name=\"bookedService\" value=\"$bookedService\" > </td> </tr> <br> "       
. "<tr> <td> Customer mobile number </td> <td> <input type=\"tel\" name=\"bookeeMobile\" value=\"$bookeeMobile\" > <br> "
. "<tr> <td> <strong> <em> Customer service time </em> </strong> </td> <td> <input type=\"text\" name=\"bookedTime\" value=\"$bookedTime\" > </td> </tr>  <br> "
. "<tr> <td> <strong> <em> Booking Confirmation </em> </strong> </td> <td> <input type=\"text\" name=\"bookingConfirmed\" value=\"$bookingConfirmed\" > </td> </tr>  <br> "
. "<tr> <td> <strong> Satisfied? </strong> </td> <td> <input type=\"submit\" name=\"confirmedSlot\" value=\"Confirm this slot\"> </td> </tr>"       
. "</tbody></table> </form>";
            
        
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