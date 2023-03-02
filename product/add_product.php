
<?php
// Connexion à la base de données
$servername = "db";
$username = "tea19";
$password = "tea19";
$dbname = "tea19";

$conn = new mysqli($servername, $username, $password, $dbname);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name_product = $_POST["name_product"];
$description = $_POST["description"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

// Add the product to the database
$sql = "INSERT INTO product (name_product, description, price, quantity)
VALUES ('$name_product', '$description', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Product successfully added";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>