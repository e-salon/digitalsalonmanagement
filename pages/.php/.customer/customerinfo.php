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
$query="SELECT mobileNumber from mtejadata WHERE mobileNumber='$_POST[mobileNumber]'";
$result= mysqli_query($connectionx, $query);
$row = mysqli_num_rows($result);
if($row>=1){
    echo "<p id=\"content\"> Mmmh!<br> This number is already registered.<br>"
    . "Please register with another number or"
            . "<br> <a href=\"../../.html/.customer/customerSign-in.html\"> Sign in here</a></p>";
}

 else {   


// insert customer information into 'mtejaData' table
$sql = "INSERT INTO MtejaData (firstName, lastName, mobileNumber, email, password, password2, gender, occupations, birthdate )
        VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['mobileNumber']."','".$_POST['email']."',"
        . "'".$_POST['password']."','".$_POST['password2']."', "
        . "'".$_POST['gender']."','".$_POST['occupations']."','".$_POST['birthdate']."')";

if ($connectionx->query($sql) === TRUE) {
  echo " <p id=\"content\" > Congratulations! <br>"
    . "You are successfully registered.<br> "
    ." Click here <a href=\"../../.html/.customer/customerSign-in.html\" > Log in</a> to log in</p> ";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
$connectionx->close();

?>
        
</center>
     <hr>
    
        <p id="footer"> &#169; 2020 Unless explicitly stated otherwise <br> 
            all material is copyright of Msusi Technologies Co. Ltd</p>  
    
 </body>
</html>
