
<?php
$title= "Update your info";
include 'si.php';
include '../bag/header.php';
?>
<form method = "post" action="">
<input type="text" name="name" placeholder="Name" required class="form-control"><br> <br>
<input type="text" name="email" placeholder="email" required  class="form-control"><br><br>
<input type="text" name="adress" placeholder="Adress" required  class="form-control"><br><br>
<input type="text" name="adress" placeholder="Adress" required  class="form-control"><br><br>
<input type="number" name="userid" placeholder="userID" required  class="form-control"><br><br>
<select name="groupid">
    <option value = "BBCAP22">BBCAP22</option>
    <option value = "BBCAP21">BBCAP21</option>
    <option value = "Others">Others</option>
</select><br><br>
<input type="submit" value="submit" name="submit">

</form>