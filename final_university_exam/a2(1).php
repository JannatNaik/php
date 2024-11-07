<!-- 
// 1. Write a PHP script to make a registration page and login page where details of user
// is stored in text file. After proper authentication Login is successful or not message
// must be displayed. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> sign-up </h1>
    <form action="a2(1).php" method="POST">
        <label for="username"> username : </label>
        <input type="text" name="username" required>
        <br>
        <label for="password"> password : </label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" name="signup_btn">
    </form> 
    <h1> sign-in </h1>
    <form action="a2(1).php" method="POST">
        <label for="username"> username : </label>
        <input type="text" name="user" required>
        <br>
        <label for="password"> password : </label>
        <input type="password" name="pass" required>
        <br>
        <input type="submit" name="signin_btn">
    </form>

    <?php
       if(isset($_POST['signup_btn']))
       {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $f1 = fopen('a2(1)_txt.txt','a');
        fwrite($f1, $username . ',' . $password . "\n");
        echo "<br>your signup is successfull!!!<br>";
        fclose($f1);
       }
       
       if(isset($_POST['signin_btn']))
       {
  
        $flag = false;
        $f1 = fopen('a2(1)_txt.txt',"r");
        while(!feof($f1))
        {
            $string = fgets($f1);
            $array = explode(",",$string);
            if(isset($array[0]) && isset($array[1])) {
            if(trim($array[0]) == $_POST['user'] && trim($array[1]) == $_POST['pass'])
            {
                $flag = true;
                echo "<br>your login is succesfull!!!<br>";
             break;
            }    
        
    }

       
}
if (!$flag) {
            echo "<br>User not found.<br>";
        }
       }
    ?>
</body>
</html>