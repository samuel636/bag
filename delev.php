<?php
ob_start();
$tiltle = " deleivery";
include '../bag/header.php';
?>
<form method = "post" action="">
<input type="text" name="adress" placeholder="Adress" required ><br> <br>
<input type="date" name="date" placeholder="date" required  ><br><br>


<input type="submit" value="submit" name="submit" >
</form>

<?php
if(isset ($_POST['submit'])){
    $adress = $_POST['adress'];
    $date = $_POST['date'];
    
    include 'db.php';
    $sq2 = "insert into delivery (adress,date)
    values('$adress','$date')";

    if($conn->query($sq2) ===TRUE){
        echo "your inforation is added succes";
        
        header('Location: read.php');
        exit();
      
    }
    else {
        echo "error:".$conn->error;
    }
}
ob_end_flush();
?>



