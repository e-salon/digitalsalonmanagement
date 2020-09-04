<?php

//Connection to database 
define('databaseName','nisuke', FALSE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = databaseName;

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
  die(" <p id=\"content\" > Connection to the customer"
       . " information database failed: " . $connection->connect_error."<br> </p> ");
}
echo "<h1 class=\"heading\" > Welcome aboard <br> <br> </h1>";

