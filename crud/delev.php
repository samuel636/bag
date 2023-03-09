<?php
ob_start();
$tiltle = " deleivery";
include '../bag/crud/header.php';
?>
<form method = "post" action="">

<input type="Date" name="Date" placeholder="date" required  ><br><br>


<input type="submit" value="submit" name="submit" >
</form>

<?php
if(isset ($_POST['submit'])){
  
    $Date = $_POST['Date'];
    
    include 'db.php';
    $sq2 = "insert into delivery (Date)
    values('$Date')";

    if($conn->query($sq2) ===TRUE){
        echo "your inforation is added succes";
        
        header('Location: read.php');
        
        exit();
      
    }
    else {
        echo "error:".$conn->error;
    }
}
include '../bag/crud/footer.php';
ob_end_flush();
?>



