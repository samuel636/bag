<?php
$title= "Update your info";
include 'db.php';
include '../bag/header.php';
$a = $_GET['userid'];

$reslut=mysqli_query($conn,"Select * from userinfo 
where id='$a'");
$row = mysqli_fetch_array($result);
?>
<h2>update your informatiob below</h2>

<form name= "update" method="post" action="">

<input type="text" name="name" placeholder="Name" required value="<?php echo $row['fname'];?>"><br> <br>
<input type="text" name="lname" placeholder="Last Name" required  value="<?php echo $row['fname'];?>"><br><br>
<input type="text" name="city" placeholder="City" required  value="<?php echo $row['city'];?>"><br><br>
<select name="groupid">
    <option value = "BBCAP22">BBCAP22</option>
    <option value = "BBCAP21">BBCAP21</option>
    <option value = "Others">Others</option>
</select><br><br>
<input type="submit" value="update your info" name="update">
<input type="submit" value="delate your info" name="delete">
</form>
<?php
if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $fname=$_POST['lname'];
    $query= mysqli_query($conn,"UPDATE studentinfo set fname='$fname',
     lname='$lname' where id = '$a'");

     if($query){
        echo "<h2>your information updated successfully</h2>";
     }

    else{ echo "record not modified";

    }
}
?>