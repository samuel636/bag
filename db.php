<?php
$servername = "db";
$username = "tea19";
$password = "tea19";
$dbname = "tea19";
// creating connection$
$conn = new mysqli($servername, $username, $password, $dbname);
// check connerction

if ($conn-> connect_error){
    die("connection failed:" .$conn->connect_error);
}
?>