<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Book a slot to your favorite salon </title>  
        <link rel="stylesheet" href="../../.css/styles.css" >
        
        
        
    </head>
    <body> 
        
    <center>   
        
    <?php
   

echo 'Welcome again.<br>';

echo 'Booking a hair service with top-notch hair stylists is now easier than ever.<br>';

echo "<form action=\"customer-bookingsProcessor.php\" method=\"post\" > <table ><tbody>"
. "<tr> <td> <strong> Salon Name </strong> </td> <td> <input type=\"text\" name=\"salonName\" value=\"$_POST[salonName]\" > </td> </tr> <br>"
. "<tr> <td> <strong> <em> Your preferred Service </em> </strong> </td> <td> <input type=\"text\" name=\"bookedService\" value=\"\" > </td> </tr> <br> "
. "<tr> <td> Your mobile number </td> <td> <input type=\"tel\" name=\"bookeeMobile\" value=\"{$_SESSION['customerMobileNumber']}\" > <br> "        
. "<tr> <td> <strong> <em> Select your service time </em> </strong> </td> <td> <input type=\"text\" name=\"bookedTime\" value=\"\" > </td> </tr>  <br> "
. "<tr> <td>  </td> <td> <input type=\"hidden\" name=\"bookingConfirmed\" value=\"no\" > <br> "
. "<tr> <td> <strong> Reserve my spot </strong> </td> <td> <input type=\"submit\" name=\"confirmedSlot\" value=\"Reserve this time for me\"> </td> </tr>"       
. "</tbody></table> </form>";
            
        
        
        
        

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