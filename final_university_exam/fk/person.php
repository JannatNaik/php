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
 $cid = $_REQUEST['cid'];
 $q = "SELECT * FROM `person` WHERE cid = " . $_REQUEST['cid'];
 $r = mysqli_query($conn,$q);

 echo "<table border='1px'>";
 while($a = mysqli_fetch_array($r))
 {
    
    echo "<tr>";

    echo "<td>";
    echo  $a['pid'];
    echo "</td>";

    echo "<td>";
    echo  $a['proname'];
    echo "</td>";

    echo "<td>";
    echo  $a['cid'];
    echo "</td>";

    echo "</tr>";
 }
 echo "</table>";

?>