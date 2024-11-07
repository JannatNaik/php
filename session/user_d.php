<?php
session_start();
if(isset($_SESSION['username']))
{
   echo $_SESSION['username'] . "your session is start";
}
// if(!isset($_SESSION['username']))
// {
//     header("Location:login.php");
// }
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("Location:login.php");
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
    <form action="user_d.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
</html>