<!-- 2. Write a PHP script to make a simple calculator on webpage that will perform basic
arithmetic operations. -->
<?php
if(isset($_POST['btn']))
{
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $op = $_POST['op'];

    switch($op)
    {
        case 'add':
             echo "your addition is  : " . $number1 + $number2;
             break;
             
        case 'sub':
            echo "your substraction is  : " . $number1 - $number2;
            break;
            
        case 'mul':
            echo "your multiplication is  : " . $number1 * $number2;
            break;
            
        case 'div':
            echo "your division is  : " . $number1 / $number2;
            break;
            
        case 'mod':
            echo "your mod is  : " . $number1 % $number2;
            break;
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
    <h1>BASIC CALCULATER </h1>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="a2(2).php" method="POST">
            <label for="num1">number 1 :</label>
            <input type="number" name="number1">
            <br>
            <label for="num2">number 2 :</label>
            <input type="number" name="number2">
            <br>
            <label for="opration">opration : <br> mul <br> sub <br> div <br> mod <br></label>
            <input type="text" name="op">
            <br>
            <input type="submit" name="btn">
        </form>
    </body>
    </html>
</body>
</html>