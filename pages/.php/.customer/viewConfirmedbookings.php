<!DOCTYPE html>
<!--
This code is to enable the customer to view their confirmed bookings
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> My confirmed bookings </title>
        <link rel="stylesheet" href="../../.css/styles.css" >
    </head>
    <body>
         <p id="home"> <a href="../../../index.php" > Home </a> </p>
         
        
        
        <div>
        <?php
        // first fetch data from booking table in the salonmanagers database
        
        include_once '../.boss/bossDatabaseConnection.php';
        echo " <h3 class=\"heading\"> The following are the confirmed bookings you made <br> <br> </h3> ";
        
        $query = " SELECT * FROM booking WHERE bookeeMObile = '$_SESSION[customerMobileNumber]' "
                . "AND bookingConfirmed = 'Yes' ";
        
        if (!$result  = mysqli_query($connection,$query)){
            $error_message = mysqli_error($connection);
            
            echo $error_message.'<br>';
            die("Couldn't execute query.");}
            
            $rowNumber = mysqli_fetch_array($result);
            
if ( $rowNumber == 0){
     echo " <p id=\"content\" > All of your bookings are yet to be confirmed </p>";
       }

 else {
   
    
     while ($row = mysqli_fetch_array($result)) {
            extract($row);
            
            echo "<form id=\"form\"> <table>"
            . "<tr> <td> Salon name: </td> <td> $salonName </td> </tr> <br> "
                 ." <tr> <td> Service time: </td> <td> $bookedTime </td> </tr> <br> <br> </p> "
                    . "</table> </form>";
}
}
        
        ?>
        </div>
        
         <hr>
    <footer>
        <p id="footer">
       
             &#169; 2020 Unless explicitly expressed otherwise <br>
            all material is copyright of Msusi Technologies Co. Ltd
        </p>
        
    </footer>
    </body>
</html>
