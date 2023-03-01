<?php
ob_start();
$tiltle = " oder";
include '../bag/header.php';
?>
<form method = "post" action="">
<input type="text" name="name" placeholder="Name" required ><br> <br>
<input type="text" name="email" placeholder="email" required  ><br><br>
<input type="number" name="phone" placeholder="phone " required  ><br><br>
<input type="text" name="adress" placeholder="Adress" required ><br><br>

<input type="submit" value="submit" name="submit" >
</form>

<?php
if(isset ($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $adress = $_POST['adress'];
    include 'db.php';
    $sq2 = "insert into userinfo (name,email,adress,phone)
    values('$name','$email','$adress','$phone')";

    if($conn->query($sq2) ===TRUE){
        echo "your inforation is added succes";
        
        header('Location: ba.php');
        exit();
      
    }
    else {
        echo "error:".$conn->error;
    }
}
ob_end_flush();
?>



