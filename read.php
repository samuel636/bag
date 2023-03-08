<?php
$title="Reading Data from the data base";
include '../bag/header.php';
include 'db.php';
$sq2 = "select * from userinfo baginfo delivery ";
$result = $conn->query($sq2);
if($result->num_rows > 0 ){
    
    echo "<table class = 'table'>
    <tr><th>userid</th><th>Name</th><th>email</th>
    <th>phone</th><th>adress</th></tr>";
    
    while($row = $result ->fetch_assoc()){
      echo "
 <tr>
 <td><a href= 'updatesingle.php ?userid = $row[userid]'> $row[userid]</a></td>

 <td>$row[name]</td>
 <td>$row[email]</td>
 <td>$row[phone]</td>
 <td>$row[adress]</td>
 
    </tr>";
}
   echo "</table>";
}
else
{
echo "<No Result>";

}
$conn->close();


?>
