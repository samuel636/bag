<?php
$title = "Reading Data from the Database";
include '../bag/header.php';
include 'db.php';

$sq2 = "select * from userinfo,baginfo,delivery ";

$result = $conn->query($sq2);

if($result->num_rows > 0) {
    echo "<table class='table'>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>bagname</th>
                <th>Category</th>
                <th>Date</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?userid=$row[userid]'>$row[userid]</a></td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[adress]</td>
                <td>$row[phone]</td>
                <td>$row[bagname]</td>
                <td>$row[cate]</td>
                <td>$row[Date]</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}
$conn->close();
?>