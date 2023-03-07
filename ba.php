<?php
ob_start();
$tiltle = " baginfo";
include '../bag/header.php';
?>
<form method = "post" action="">
<input type="text" name="bagname" placeholder="bag Name" required ><br> <br>
<input type="text" name="cate" placeholder="catagorie" required  ><br><br>

<input type="submit" value="submit" name="submit" >
</form>
<?php
if(isset ($_POST['submit'])){
    $bagname = $_POST['bagname'];
    $cate = $_POST['cate'];
    
    include 'db.php';
    $sq1 = "insert into baginfo (bagname,cate)
    values('$bagname','$cate')";

    if($conn->query($sq1) ===TRUE){
        echo "your inforation is added succes";
        
        header('Location: delev.php');
        exit();
      
    }
    else {
        echo "error:".$conn->error;
    }
}
ob_end_flush();
?>