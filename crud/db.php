<?php
// Connection to the database
$servername = "db";
$username = "tea19";
$password = "tea19";
$dbname = "tea19";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn-> connect_error){
    die("connection failed:" .$conn->connect_error);
}



?>