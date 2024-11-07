<?php
include_once('conn.php');
if(isset($_POST['sbtn'])) {
    if(isset($_POST['username']) && isset($_POST['password'])) {
         $user = $_POST['username'];
         $pass = $_POST['password'];
         $query = "SELECT * FROM `signup` WHERE username = '$user'";
         $result = mysqli_query($conn,$query);
         if(mysqli_num_rows($result) > 0)
         {
            echo "data is already exits in data base";
            
         }
         else{
            $password = "user_password";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

         $insert_query = "INSERT INTO `signup` (`username`, `password`) VALUES ('$user', '$hashed_password');";
         $result = mysqli_query($conn,$insert_query);
         if($result)
         {
            echo "signup succesfully";
            header("Location:user_d.php");
         }
         else{
            echo "check your data";
         }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <form action="sign.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username">
        <label for="password"> password</label>
        <input type="password" name="password">
        <button type="submit" name="sbtn">signup</button>
    </form>
</body>
</html>