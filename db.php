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

// Create the product table
$sql = "CREATE TABLE product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name_product VARCHAR(30) NOT NULL,
description VARCHAR(50),
price FLOAT(10,2) NOT NULL,
quantity INT(6) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Table product created successfully');</script>";
}

$conn->close();
?>