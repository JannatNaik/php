<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";
$conn = mysqli_connect($servername,$username,$password,$database);
  if(isset($_POST['btn']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `crud` (`username`, `password`) VALUES ('$username', '$password');";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "yes you have submit data successfully!!!";
        header("Location:show.php");
    }
    else
    {
        echo " you not submited successfully";
    }
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
    <h1>FILL THIS FORM</h1>
    <form action="index.php" method="POST">
       <label for="username">Username : </label>
       <input type="text" name="username">
       <br>
       <label for="password">Password : </label>
       <input type="password" name="password">
       <br>
       <input type="submit" name="btn">
    </form> 
</body>
</html>