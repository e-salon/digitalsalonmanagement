<!DOCTYPE html>
<html lang="en">
    <head>
        <title> View all your booked services </title>  
        <link rel="stylesheet" href="../../.css/styles.css" >
        
        
        
    </head>
    <body> 
        <p id="home"> <a href="../../../index.php" > Home </a> </p>
        <p id="logout"> <a href="../../.html/.customer/customerSign-in.html">
                Logout </a></p>
    <center>   
        
    <?php
   
include_once 'bossDatabaseConnection.php';

echo " <h3 class=\"heading\"> Managing your hair service bookings "
. " <br> is now easier than ever.</h3> <br>";

$sql = "SELECT mobileNumber FROM bossdata WHERE "
        . "mobileNumber='$_SESSION[bossMobileNumber]'";

if ($result1 = mysqli_query($connection, $sql)){
$query = "SELECT * FROM booking WHERE mobileNumber='$_SESSION[bossMobileNumber]'";
$result = mysqli_query($connection, $query);

$rowNumber = mysqli_num_rows($result);

if ($rowNumber == 0){    echo "<p id=\"content\" > Hmmnh!<br><br> "
    . "No booking has been made to your salon yet.</p> ";}
 else {
    

while ($row = mysqli_fetch_array($result)){
    
    extract($row);

echo "<form id=\"form\" action=\"bookingConfirmation.php\" method=\"post\" > <table ><tbody>"
. "<tr> <td> <strong> Salon Name </strong> </td> <td> <input type=\"text\" name=\"salonName\" value=\"$salonName\" readonly=\"\" > </td> </tr> <br>"
. "<tr> <td> <strong> <em> Booked Service </em> </strong> </td> <td> <input type=\"text\" name=\"bookedService\" value=\"$bookedService\" readonly=\"\" > </td> </tr> <br> "       
. "<tr> <td> Customer mobile number </td> <td> <input type=\"tel\" name=\"bookeeMobile\" value=\"$bookeeMobile\" readonly=\"\" > <br> "
. "<tr> <td> <strong> <em> Customer service time </em> </strong> </td> <td> <input type=\"text\" name=\"bookedTime\" value=\"$bookedTime\" readonly=\"\" > </td> </tr>  <br> "
. "<tr> <td> <strong> <em> Booking Confirmation </em> </strong> </td> <td> <input type=\"text\" name=\"bookingConfirmed\" value=\"$bookingConfirmed\" readonly=\"\" > </td> </tr>  <br> "
. "<tr> <td> <strong> Satisfied? </strong> </td> <td> <input type=\"submit\" name=\"confirmedSlot\" value=\"Confirm this slot\"> </td> </tr>"       
. "</tbody></table> </form>";
            
        
}
        
} }     

?>
        
        <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise, <br>
            all material is copyright of Kunonu Technologies Co. Ltd
        </p>
        
    </footer>
    </center>
</body>
</html>