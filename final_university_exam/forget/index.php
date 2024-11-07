<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "final_exam_database";
 $conn = mysqli_connect($servername,$username,$password,$database);

 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  if(isset($_POST['btn']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $sql = "SELECT * FROM `index` WHERE `username` = $username AND `userpassword` = $password";
    // $q = mysqli_query($conn,$sql);
    $sql = "SELECT * FROM `index` WHERE `username` = '$username' AND `userpassword` = '$password'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        if (mysqli_num_rows($q) == 1) {
            $_SESSION['username'] = $username;
            header("Location: pass.php");
            exit();
        }
        else
    {
        echo "you are not login";
    }
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
     <form action="index.php" method="POST">
         <label for="username">Username : </label>
         <input type="text" name="username">
         <br>
         <label for="password">Password : </label>
         <input type="password" name="password">
         <br>
         <input type="submit" name="btn" value="submit">
         
     </form>
</body>
</html>