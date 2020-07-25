<?php

/* 
 * a connection making file
 * 
 */

define('databaseName','salonManagers', TRUE); // dtabase name constant
$servername = "localhost";
$username = "root";
$password = "";
$dbname = databaseName;


// create a connection
$connection = new mysqli($servername,$username, $password, $dbname );

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
echo "Wozah!! Connected successfully<br>";

?>
