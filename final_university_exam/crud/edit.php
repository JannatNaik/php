<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";

$conn = mysqli_connect($servername,$username,$password,$database);
$id = $_REQUEST['id'];
$q = "SELECT * FROM `crud` WHERE id = ". $_REQUEST['id'];

$result = mysqli_query($conn,$q);
$arr = mysqli_fetch_assoc($result);
if(isset($_POST['butn']))
{
    $sql = "UPDATE `crud` SET `username`='".$_POST['username']."',`password`='".$_POST['password']."' WHERE id = " . $id;
   $c = mysqli_query($conn,$sql);
   header("Location:show.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
       <label for="username">Username : </label>
       <input type="text" name="username" value="<?php echo $arr['username']; ?>">
       <br>
       <label for="password">Password : </label>
       <input type="password" name="password" value="<?php echo $arr['password']; ?>">
       <br>
       
       <button name="butn"> submit</button>
    </form> 
</body>
</html>