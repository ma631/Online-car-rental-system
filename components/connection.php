<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'car_rental');
 
/* Attempt to connect to MySQL database */
try{
    $con = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
