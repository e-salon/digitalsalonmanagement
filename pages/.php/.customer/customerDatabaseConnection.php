<?php

//Connection to customer Database 
define('databaseNamex','customer_information', TRUE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = databaseNamex;

// Create connection
$connectionx = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connectionx->connect_error) {
  die("Connection to the customer information database failed: " . $connectionx->connect_error);
}
echo " Welcome aboard <br> <br> ";

