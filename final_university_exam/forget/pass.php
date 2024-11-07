<?php
session_start();
echo "<h1>yes</h1>";
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";
$conn = mysqli_connect($servername,$username,$password,$database);
if(isset($_SESSION['username']))
{
   echo $_SESSION['username'];
   
if (isset($_POST['changepass'])) {
    $current_password = $_POST['cpassword'];
    $new_password = $_POST['newpass'];
    $confirm_password = $_POST['conformpass'];

    if ($new_password === $confirm_password) {
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM `index` WHERE `username` = '$username' AND `userpassword` = '$current_password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $sql = "UPDATE `index` SET `userpassword` = '$new_password' WHERE `username` = '$username'";
            if (mysqli_query($conn, $sql)) {
                echo "Your password has been changed.";
            } else {
                echo "Error updating password: " . mysqli_error($conn);
            }
        } else {
            echo "Current password is incorrect.";
        }
    } else {
        echo "New password and confirmation password do not match.";
    }
}
}
else
{
    header("location:index.php");
}
if(isset($_POST['logoutbtn']))
{
    session_unset();
    session_destroy();
    header("Location:index.php");
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
    
<h1>chnagr password</h1>
    <form action="pass.php" method="POST">
        <label for="currentpassword">Current Password : </label>
        <input type="text" name="cpassword" required>
        <br>
        <label for="newpass">New Password : </label>
        <input type="text" name="newpass" required>
        <br>
        <label for="confirm password">Confirm Password : </label>
        <input type="text" name="conformpass" required>
        <br> 
        <input type="submit" name="changepass" value="change password">
    </form>


    <h1>LOGOUT</h1>
    <form action="pass.php" method="POST">
       <input type="submit" name="logoutbtn" value="logoutbtn">
    </form>
</body>
</html>