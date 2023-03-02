<?php include "../header.php" ?>

<html>
<head>
	<title>Add new product</title>
</head>
<body>
	<h1>Add new product</h1>
	<form action="add_product.php" method="post">
		<label>Product name:</label><br>
		<input type="text" name="name_product"><br>
		<label>Description:</label><br>
		<textarea name="description"></textarea><br>
		<label>Price:</label><br>
		<input type="number" name="price"><br>
		<label>Quantity:</label><br>
		<input type="number" name="quantity"><br>
		<input type="submit" value="Add new product">
	</form>
</body>
</html>
<?php include "../footer.php" ?>




