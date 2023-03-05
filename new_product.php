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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Retrieve data from the form
    $name_product = $_POST["name_product"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];

    // Add the product to the database
    $sql = "INSERT INTO product (name_product, description, price, quantity)
            VALUES ('$name_product', '$description', '$price', '$quantity')";
    if ($conn->query($sql) === TRUE) {
       header("Location: products.php");
       exit(); 
      } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php include "header.php" ?>
<html>
<head>
    <title>Add new product</title>
    <link rel= stylesheet  href ="product.css">
</head>
<body>  
    <h3>Add new product</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>Product name:</label><br>
        <input type="text" name="name_product"><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Price:</label><br>
        <input type="number" name="price"><br>
        <label>Quantity:</label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" name="submit" value="Add new product">
    </form>
</body>
</html>
<?php include "footer.php" ?> 