<?php


// connection setup for database


//  servername   username password

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'customer';
// we can specify the database here so that we dont have to change it later

// connection for sql i 
// connection variable to connect to my sqli 

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
    die("not connected" . mysqli_connect_error());
}


// var dump will dump the value on the screen  if the value is true then the database is created else it is not created 
?>



<!-- this will be used for making the middleware and then included to other files  -->
