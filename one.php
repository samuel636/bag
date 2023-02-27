<?php
$tiltle = " oder";
include '../bag/header.php';
?>
<form method = "post" action="">
<input type="text" name="name" placeholder="Name" required ><br> <br>
<input type="text" name="email" placeholder="email" required  ><br><br>
<input type="text" name="adress" placeholder="Adress" required ><br><br>
<input type="number" name="userid" placeholder="userID" required  ><br><br>
<input type="submit" value="submit" name="submit">
</form>

<?php
if(isset ($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $userid = $_POST['userid'];
    include 'db.php';
    $sq2 = "insert into userinfo (name,email,adress,userid)
    values('$name','$email','$adress','$userid')";

    if($conn->query($sq2) ===TRUE){
        echo "your inforation is added succes";

    }
    else {
        echo "error:".$conn->error;
    }
}
?>



