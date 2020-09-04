<!DOCTYPE html>
<!--
code for the boss to confirm customer booking
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Confirmation of a booking </title>
        <link rel="stylesheet" href="../../.css/styles.css">
    </head>
    <body>
        <p id="home"> <a href="../../../index.php" > Home </a> </p>
        <p id="logout"> <a href="../../.html/.boss/bossSign-in.html" > Logout </a> </p>
    <center>
        <?php
        // booking confirmation  code
        
        include_once 'bossDatabaseConnection.php';
        
        $sql = " SELECT salonName FROM salon WHERE mobileNumber = '$_SESSION[bossMobileNumber]'";
        
        $result = mysqli_query($connection, $sql);

		$rowNumber = mysqli_num_rows($result);
                                
		if($rowNumber ===  1){
			
                    $rowArray = mysqli_fetch_array($result);
                        
                        echo "Hello " . $rowArray['salonName'],"!<br>";
                        
                        $sqlagain = "SELECT bookeeMobile, salonName, mobileNumber FROM booking WHERE mobileNumber= '$_SESSION[bossMobileNumber]'"
                                . "AND bookingConfirmed = 'no' ";
                        
                        $result1 = mysqli_query($connection, $sqlagain);
                        $rowNumberAgain = mysqli_num_rows($result1);
                           
                            if($rowNumberAgain === 1){
                        
                        $sql = "UPDATE booking SET bookingConfirmed= 'Yes'
                                 WHERE salonName='$rowArray[salonName]' ";
                        $result3 = mysqli_query($connection, $sql);
                      
                        if($result3 == TRUE) {
                       echo " <p id=\"content\"> The booking"
                            . " is confirmed succeessfully<br> "
                               . "Now wait for your customer to show up </p>";}
                         else {    echo "update failed hence no booking confirmation";}
                        
                            }
 else {echo " <p id=\"content\" > This booking is already confirmed <br>"
     . "Wait for the customer to show up <br> </p> ";}
                        
                        
                        
		}
                
 else {                    echo 'Mmmmh! Confirmation failed';}
        
 
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
