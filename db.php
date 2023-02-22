<?php
$servername = "db";
$username = "team19";
$password = "team19";
$dbname = "team19";
// creating connection$
$conn = new mysqli($servername, $username, $password, $dbname);// check connerction

if ($conn-> connect_error){
    die("connection failed:" .$conn->connect_error);
}
?>