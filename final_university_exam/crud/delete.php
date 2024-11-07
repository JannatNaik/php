<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";
$conn = mysqli_connect($servername,$username,$password,$database);
$id = $_REQUEST['id'];
$sql = "DELETE FROM `crud` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if($result)
{
    header("location:show.php");
}
else
{
    echo "not ";
}
?>
