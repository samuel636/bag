<?php
ob_start();
$tiltle = " oder";
include '../bag/crud/header.php';
?>
<form method = "post" action="">
<input type="text" name="bagname" placeholder="Bag Name" required ><br> <br>
<select name="cate">
    <option value = "childern">childern</option>
    <option value = "Women">women</option>
    <option value = "Men">men</option>
</select><br><br>

<input type="submit" value="submit" name="submit" >
</form>

<?php
if(isset ($_POST['submit'])){
    $bagname = $_POST['bagname'];
    $cate = $_POST['cate'];
   
    include 'db.php';
    $sq2 = "insert into baginfo (bagname,cate)
    values('$bagname','$cate')";

    if($conn->query($sq2) ===TRUE){
        echo "your inforation is added succes";
        
        header('Location: delev.php');
        exit();
      
    }
    else {
        echo "error:".$conn->error;
    }
}
include '../bag/crud/footer.php';
ob_end_flush();
?>



