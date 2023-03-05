<?php include "header.php" ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>List of products</title>
  <link rel=stylesheet href="product.css">
  <script>
  function addToCart() {
    // addToCart
  }
  </script>
</head>

<body>
  <h3>List of products</h3>
  <form action="new_product.php" method="post">
  <input type="submit" value="Add new product">
  </form>
  <table>
    <tr>
      <th>Product</th>
      <th>Description</th>
      <th>Price</th>
      <th>Availability</th>
      <th>Action</th>
    </tr>
    <?php
        // Connect to the database and execute the SQL query to select the products
      $servername = "db";
      $username = "tea19";
      $password = "tea19";
      $dbname = "tea19";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Checking the connection
        if (!$conn) {
            die("Connexion échouée : " . mysqli_connect_error());
        }
      
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        if ($result) {
        // Checking the results of the query
        if (mysqli_num_rows($result) > 0) {
            // Loop to browse all results
            while($row = mysqli_fetch_assoc($result)) {
                // Display the data of each product in a table line
                echo "<tr>";
                echo "<td>" . $row["name_product"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>". ($row["quantity"] > 0 ? 'Available' : 'Non available') ."</td>";
                echo "<td> <input type='submit' value='Add to cart' onclick='addToCart(".$row["id"].")'> </td>";
                echo "</tr>";
            }
        } else {
            // Display a message if no product was found
            echo "<tr><td colspan='3'>No products available.</td></tr>";
        }
    }   
        // Closing the connection to the database
        mysqli_close($conn);
        ?>
  </table>
</body>

</html>
<?php include "footer.php" ?>