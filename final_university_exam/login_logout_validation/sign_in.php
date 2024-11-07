<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btn'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];

    // Avoid SQL injection by escaping the user inputs
    $sql = "SELECT * FROM signup WHERE uname = '$username' AND upassword = '$password'";
    $resu = mysqli_query($conn, $sql);

    if ($resu) {
        if (mysqli_num_rows($resu) == 1) {
            echo "You have successfully logged in.";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Query failed: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="sign_in.php" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>
</html>
