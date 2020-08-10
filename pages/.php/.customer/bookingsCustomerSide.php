<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Book a slot to your favorite salon </title>  
        <link rel="stylesheet" href="../../.css/styles.css" >    
        
        
    </head>
    <body>
         <p id="home"> <a href="../../../index.php" > Home </a> </p>
         <p class="viewconfirmation"> <a href="viewConfirmedbookings.php" > View confirmed bookings </a></p>
        
    <center>   
        
    <?php
   

echo " <h3 class=\"heading\" > Welcome back <br>"
      ."Booking a hair service with top-notch hair stylists is now easier than ever. </h3><br>";

echo "<form id=\"form\" action=\"customer-bookingsProcessor.php\" method=\"post\" > <table ><tbody>"
. "<tr> <td> <strong> Salon Name </strong> </td> <td> <input type=\"text\" name=\"salonName\" value=\"$_POST[salonName]\" readonly=\"\" > </td> </tr> <br>"
. "<tr> <td>  </td> <td> <input type=\"hidden\" name=\"mobileNumber\" value=\"$_POST[mobileNumber]\" > </td> </tr> <br> "
. "<tr> <td> <strong> <em> Your preferred Service </em> </strong> </td> <td> <input type=\"text\" name=\"bookedService\" value=\"\" > </td> </tr> <br> "
. "<tr> <td> Your mobile number </td> <td> <input type=\"tel\" name=\"bookeeMobile\" value=\"{$_SESSION['customerMobileNumber']}\" readonly=\"\" > <br> "        
. "<tr> <td> <strong> <em> Select your service time </em> </strong> </td> <td> <input type=\"text\" name=\"bookedTime\" value=\"\" > </td> </tr>  <br> "
. "<tr> <td>  </td> <td> <input type=\"hidden\" name=\"bookingConfirmed\" value=\"no\" > </td> </tr> <br> "
. "<tr> <td> <strong> Reserve my spot </strong> </td> <td> <input type=\"submit\" name=\"confirmedSlot\" value=\"Reserve this time for me\"> </td> </tr>"       
. "</tbody></table> </form>";
            
        
        
        
        

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