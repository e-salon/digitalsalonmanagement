<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Boss database connection</title>  
</head>

<body>
    <?php

/* 
 * a connection making file
 * 
 */

define('databaseName','salonManagers', TRUE); // dtabase name constant
$servername = "localhost";
$username = "root";
$password = "kunonukaiza2020";
$dbname = databaseName;


// create a connection
$connection = new mysqli($servername,$username, $password, $dbname );

// Check connection
if ($connection->connect_error) {
  die(" <h3 class=\"heading\"> Connection to salon managers' database failed: " . $connection->connect_error." </h3><br>");
}
echo "<h3 class=\"heading\"> Welcome aboard </h3> <br>";

?>
 
</body>
</html>

   