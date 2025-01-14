<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn==false){
    die("Error:could not connect".mysqli_connect_error());
}

?>