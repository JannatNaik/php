
<?php
$l = false;
include_once('conn.php');
session_start();
if(isset($_POST['lbtn'])) {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Retrieve hashed password from the database
        $query = "SELECT * FROM `signup` WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                if(password_verify($password, $row['password'])) {
                    $l = true; // Corrected variable name
                    $_SESSION['username'] = $username;
                    header("Location:user_d.php");
                    exit();
                }
            }
        } else {
            echo "Invalid username or password";
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
    <form action="login.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username">
        <label for="password">password</label>
        <input type="password" name="password">
        <button type="submit"name="lbtn">login</button>
    </form>
</body>
</html>