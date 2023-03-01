<?php
$tiltle = " baginfo";
include '../bag/header.php';
?>
<form method = "post" action="">
<input type="text" name="name" placeholder="bagName" required ><br> <br>
<input type="text" name="email" placeholder="email" required  ><br><br>
<input type="number" name="phone" placeholder="phone " required  ><br><br>
<input type="text" name="adress" placeholder="Adress" required ><br><br>

<input type="submit" value="submit" name="submit" >
</form>