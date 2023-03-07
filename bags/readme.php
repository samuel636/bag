?php
$title="Reading Data from the data base";
include '../bag/header.php';
include 'db.php';
$sql = "select * from userinfo ";
$result =$conn->query($sq1);
if($result->num_rows > 0){
    
    echo "<table class = 'table'>
    <tr><th>name</tr></tr><tr><th>email</tr></tr><tr><th>address</tr></tr><tr><th>userid</tr></tr>";
    
    while($row=$result->fetech_assoc()){
      
        echo "
 <tr>
 
 <td>$row[name]</td>
 <td>$row[email]</td>
 <td>$row[address]</td>
 <td>$row[userid]</td>
    </tr>
    ";
}
   echo "</table>";

}
else
{
echo "<No Result>";

}
$conn->close();
include '../footer.php';

?>
