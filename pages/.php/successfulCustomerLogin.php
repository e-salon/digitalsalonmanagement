<!DOCTYPE html>
<html lang="en">
    <head>
        <title> You are Successful login</title>  
        <link rel="stylesheet" href="../.css/styles.css" >
        
        
        
    </head>
    <body> 
    <center>   
        
    <?php

echo 'Congratulations!<br>';

echo 'You are now logged in,you can browse your favorite salon and book a service.<br>';

define('databaseName','salonManagers', TRUE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = databaseName;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br><br>";

        $query = "SELECT * FROM salon";
        
        $result  = mysqli_query($conn,$query)
                or die("Couldn't execute query.");
        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            echo "<strong>Salon Name:$salonName  <br></strong>";
            echo "Salon Location:$location <br> ";
            echo "Services:$services <br>";
            echo "Contacts:$mobileNumber <br>";
            echo "Salon working hours:$workingHours  <br>";
            echo '<a href="#"> Book here</a> <br><br>';
            
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