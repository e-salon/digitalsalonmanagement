<?php

//Connection to customer Database 
define('databaseNamex','customer_information', TRUE);
$servername = "localhost";
$username = "root";
$password = "kunonukaiza2020";
$dbname = databaseNamex;

// Create connection
$connectionx = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connectionx->connect_error) {
  die(" <p id=\"content\" > Connection to the customer"
       . " information database failed: " . $connectionx->connect_error."<br> </p> ");
}
echo "<h1 class=\"heading\" > Welcome aboard <br> <br> </h1>";

