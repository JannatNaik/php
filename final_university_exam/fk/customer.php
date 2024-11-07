<?php
  $username = "root";
  $servername = "localhost";
  $password = "";
  $database = "final_exam_database";
  $conn = mysqli_connect($servername,$username,$password,$database);
  if($conn)
  {
    echo "yes";
  }

 $query = "SELECT * FROM `customer`";
 $result = mysqli_query($conn,$query);
 if($query)
 {
    echo "yes";
 }
 echo "<table border='1px'>";
 while($a = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td>";
    echo  $a['cid'];
    echo "</td>";

    echo "<td>";
    echo  $a['cname'];
    echo "</td>";

    echo "<td>";
    echo  $a['city'];
    echo "</td>";

    echo "<td>";
    echo  "<a href='person.php?cid=".$a['cid']."'>click hear</a>";
    echo "</td>";

    echo "</tr>";
 }
 echo "</table>";
?>