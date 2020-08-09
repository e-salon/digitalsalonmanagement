<!DOCTYPE html>

    <head>
        <title>Uploading customer's information to database</title>

       <!-- <script src="../.js/customerRegistrationValidation.js"></script>-->
        <link rel="stylesheet" href="../../.css/styles.css" >
        
      
    </head>

    
    <body>
    <center>
        
 <?php
include_once 'customerDatabaseConnection.php';


// insert customer information into 'mtejaData' table
$sql = "INSERT INTO MtejaData (firstName, lastName, mobileNumber, email, password, password2, gender, occupations, birthdate )
        VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['password']."','".$_POST['password2']."', "
        . "'".$_POST['gender']."','".$_POST['occupations']."','".$_POST['birthdate']."')";

if ($conn->query($sql) === TRUE) {
  echo "Congratulations!<br>"
    . "You are successfully registered.<br>";
  echo'<p> Click here <a href="../../.html/.customer/customerSign-in.html" > Log in</a> to log in</p>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
        
</center>
     <hr>
    
        <p id="footer">Unless explicitly stated otherwise <br> 
            all material is copyright of &#169; 2020 Msusi Technologies Co. Ltd</p>  
    
 </body>
</html>
