<!DOCTYPE html>
<html lang="en">
    <head>
        <title> You have successfully logged in</title>  
        <link rel="stylesheet" href="../../.css/styles.css" >
        
        
        
    </head>
    <body> 
        <p id="home"> <a href="../../../index.php" > Home </a> </p>
        <p id="logout"> <a href="../../.html/.customer/customerSign-in.html"> Logout </a></p>
        <p class="viewconfirmation"> <a href="viewConfirmedbookings.php" > View confirmed bookings </a></p>
        <center>   
        
    <?php


require_once 'DatabaseConnection.php';
echo "<h3 class=\"heading\" >As a Nisuke member,you can browse your favorite <br> hair stylists and book a service for free.<br> <br> "

     . "Take a look at the following salons in our system </h3> <br>";

        $query = "SELECT * FROM salon";
        
        if (!$result  = mysqli_query($connection,$query)){
            $error_message = mysqli_error($connection);
            
            echo $error_message.'<br>';
            die("Couldn't execute query.");}
            
            $row = mysqli_num_rows($result);
        
 if ($row>=1) {       
        while ( $row = mysqli_fetch_array($result)) {
            extract($row);
            echo "<form id=\"form\"name=\"$salonName\"action=\"bookingsCustomerSide.php\" method=\"post\" > <table ><tbody>"
            . "<tr> <td colspan=\"2\" > <img src=\" $photos \" "
            . "width=\"500px\" heigth=\"200px\" /> </td> </tr> <br> "
            . "<tr> <td> <strong> Salon Name: </strong> </td> <td> <input class=\"field\" type=\"text\" name=\"salonName\" value=\"$salonName\" readonly=\"\" > </td> </tr> <br>"
            . "<tr> <td> Salon Location: </td> <td> <input class=\"field\" type=\"text\" name=\"location\" value=\"$location\" readonly=\"\" > </td> </tr> <br> "
            . "<tr> <td>Available Services: </td> <td> <input class=\"field\" type=\"text\" name=\"services\" value=\"$services\" readonly=\"\" > </td> </tr> <br> "
            . "<tr> <td> Available second service: </td> <td> <input class=\"field\" type=\"text\" name=\"2ndservice\" value=\"$2ndservice\" readonly=\"\" > </td> </tr> <br> "
            . "<tr> <td> Salon mobile number: </td> <td> <input class=\"field\" type=\"tel\" name=\"mobileNumber\" value=\"$mobileNumber\" readonly=\"\" > </td> </tr> <br> "
            . "<tr> <td> Salon working hours: </td> <td> <input class=\"field\" type=\"text\" name=\"workingHours\" value=\"$workingHours\" readonly=\"\" > </td> </tr>  <br> "
            . "<tr> <td>  </td> <td> <input type=\"hidden\" name=\customerMobileNumber\" value=\"{$_SESSION['customerMobileNumber']}\" readonly=\"\" > </td> </tr> <br> "
            . "<tr> <td> Salon description: </td> <td> <textarea class=\"field\" rows=\"10\" columns=\"4\" size=\"20\" name=\salonDescription\" readonly=\"\" > $salonDescription </textarea> </td> </tr> <br> "
            . "<tr> <td> <strong> Impressed? </strong> </td> <td> <input type=\"submit\" value=\"Book your slot\" name=\"bookingSlot\" > </td> </tr> <br> "
            . "</tbody></table> </form>";      
}}
 else {    echo "<p id=\"content\" > We are sorry currently there is no<br>"
     . " salon registered in our system<br> "
. "Please come again next time </p> ";}
        
        
$connection->close();

include_once 'footer.php';
?>
        
        
      <!--  <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise, <br>
            all material is copyright of Kunonu Technologies Co. Ltd
        </p>
        
    </footer>-->
      
    </center>
</body>
</html>