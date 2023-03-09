<?php
$title= "Update";
include 'db.php';
include '../bag/header.php';
$a = $_GET['userid'];

$reslut=mysqli_query($conn,"Select * from userinfo
where userid");
$row = mysqli_fetch_array($result);
?>
<h2>update your informatiob below</h2>

<form name= "update" method="post" action="">

<input type="text" name="name" placeholder="name" required value="<?php echo $row['name'];?>"><br> <br>
<input type="text" name="email" placeholder="email" required  value="<?php echo $row['email'];?>"><br><br>
<input type="text" name="phone" placeholder="phone" required  value="<?php echo $row['phone'];?>"><br><br>
<input type="text" name="adress" placeholder="adress" required  value="<?php echo $row['adress'];?>"><br><br>
<br><br>
<input type="submit" value="update your info" name="update">
<input type="submit" value="delate your info" name="delete">
</form>
<?php
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $adress=$_POST['adress'];
    $query= mysqli_query($conn,"UPDATE userinfo set name='$fame',
     email='$email',phone='$phone',adress='$adress' where id ");

     if($query){
        echo "<h2>your information updated successfully</h2>";
     }

    else{ echo "record not modified";

    }
}
?>