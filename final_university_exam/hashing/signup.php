<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "final_exam_database";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btn'])) {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    // Sanitize inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Select query to check if the username already exists
    $sql = "SELECT * FROM `pdo_s` WHERE uname = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if username already exists
        if (mysqli_num_rows($result) > 0) {
            echo "Username already exists.";
        } else {
            $hash = password_hash($password,PASSWORD_DEFAULT);
            // Insert new user if username doesn't exist
            $sql = "INSERT INTO `pdo_s` (`uname`, `upassword`) VALUES ('$username', '$hash')";
            if (mysqli_query($conn, $sql)) {
                echo "User registered successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signup.php" method="POST">
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