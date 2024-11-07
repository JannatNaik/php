<?php 
$servername = "localhost";
$database = "session";
$username = "root";
$pass = "";
$conn = mysqli_connect($servername,$username,$pass,$database);
if($conn)
{
    echo "yes";
}
?>