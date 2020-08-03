<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Confirmation of a booking </title>
        <link rel="stylesheet" href="../../.css/styles.css">
    </head>
    <body>
    <center>
        <?php
        // put your code here
        
        include_once 'bossDatabaseConnection.php';
        
        $sql = " SELECT salonName FROM salon WHERE mobileNumber = '$_SESSION[bossMobileNumber]'";
        
        $result = mysqli_query($connection, $sql);

		$rowNumber = mysqli_num_rows($result);
                                
		if($rowNumber ==  1){
			
                    $rowArray = mysqli_fetch_array($result);
                        
                        echo $rowArray['salonName'],"<br>";
                        
                        $sql = "UPDATE booking SET bookingConfirmed= 'Yes'
                                 WHERE salonName='$rowArray[salonName]' ";
                        $result = mysqli_query($connection, $sql);
                       if($result == TRUE) {
                       echo "Booking confirmed succeessfully";}
                         else {    echo "update failed hence no booking confirmation";}
                        
                        
                        
                        
                        
		}
                
 else {                    echo 'mmmh confirmation failed';}
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
