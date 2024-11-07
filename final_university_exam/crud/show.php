<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";
$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM `crud`";
$result = mysqli_query($conn,$sql);
echo "<table border='1px solid red'>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "<th>edit</th>";
echo "<th>delete</th>";
while($r = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>";
    echo $r['username'];
    echo "</td>";
    
    echo "<td>";
    echo $r['password'];
    echo "</td>";
    
    echo "<td>";
    echo "<a href='edit.php?id=".$r['id']."'>edit</a>";
    echo "</td>";

    echo "<td>";
    echo "<a href='delete.php?id=".$r['id']."'>delete</a>";
    echo "</td>";

    echo "</tr>";
}
echo "</table>";
?>