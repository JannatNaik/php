<?php 
//*****************************************************************************
//  1. Write a PHP code to print following series. 
// * 
// * * 
// * * * 
// * * * * 
// * * * * *

// for($i=0;$i<=5;$i++)
// {
//     for($j=0;$j<=$i;$j++)
//     {
//         echo "* ";
//     }
//     echo "<br>";
// }
// ******************************************************************************
// 2. Write a PHP code to redirect page to new webpage or website. 
// header("Location:assignment-1.txt");
// *****************************************************************************
// 3. Write a PHP code to input array and display(Total No of elements must entered  from user). 
// <!DOCTYPE html>
// <html>
// <head>
//     <title>Input Array</title>
// </head>
// <body>

// <form method="post" action="">
//     <label for="num_elements">Enter the total number of elements:</label>
//     <input type="number" id="num_elements" name="num_elements" min="1" required>
//     <br><br>
//     <input type="submit" value="Submit">
// </form>
// <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $num_elements = $_POST['num_elements'];

//     if ($num_elements > 0) {
//         echo "<form method='post' action=''>";
//         echo "<h3>Enter $num_elements elements:</h3>";
//         echo "<input type='hidden' name='num_elements' value='$num_elements'>";
        
//         for ($i = 1; $i <= $num_elements; $i++) {
//             echo "Element $i: <input type='text' name='elements[]'><br>";
//         }
        
//         echo "<br><input type='submit' value='Submit'>";
//         echo "</form>";
//     } else {
//         echo "<p>Please enter a valid number of elements greater than 0.</p>";
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['elements'])) {
//     $elements = $_POST['elements'];
//     echo "<h3>You entered:</h3>";
//     echo "<pre>";
//     print_r($elements);
//     echo "</pre>";
// } ?  
// </body>
// </html>

// *******************************************************************
// 4. Write a PHP code to check the type and value of variable.
// $a = 10;
// echo gettype($a);
// ***********************************************
// 5. Write a PHP code to demonstrate foreach in array. 
// $a = [10,20,30,40];
// function f1($a)
// {
//     foreach($a as $v)
//     {
//         echo $v;
//     }
// }
// f1($a);
// ****************************************************
// 6. Write a PHP code to demonstrate switch statement. 
// $a = 40;
// switch($a)
// {
//     case 10:
//         echo " you give a 10 marks ";
//         break;
    
//     case 20:
//         echo " you give a 20 marks ";
//         break;
    
//     case 30:
//         echo " you give a 30 marks ";
//         break;

//     case 40:
//         echo " you give a 40 marks ";
//         break;
// }
// **********************************************************
// 7. Write a PHP code to demonstrate continue and break. 
// for($i = 0;$i < 5;$i++)
// {
    
//     if($i == 2)
//     {
//         continue;
//     }
//     if($i == 4)
//     {
//         break;
//     }
//     echo $i."<br>";
// }
//***************************************************************
// 8. Write a PHP code to find the factorial of the number entered by user. 
// $f = 1;
// for($i=1;$i<=3;$i++)
// {
//     $f = $f * $i;
// }
// echo $f;
// *****************************************************************
// 9. Write a PHP code to print multiplication table of the number entered by user. 
// for($i=0;$i<=10;$i++)
// {
//     echo $i * 4 . "<br>";
// }
// **************************************************************
// 10. Write a PHP code to take input from user for no of row and column and  generate dynamic table. 
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//         <form action="a1.php" method="POST">
//             <label for="rows">enter rows : </label>
//             <input type="number" name="rn">
//             <br>
//             <label for="column">enter column : </label>
//             <input type="number" name="cn">
//             <br>
//             <input type="submit" name="submit_btn">            
//         </form>  
//         <?php
//              if($_SERVER["REQUEST_METHOD"] == "POST")
//              {
//                 $r_n = $_POST['rn'];
//                 $c_n = $_POST['cn'];

//                 if($r_n > 0 && $c_n > 0)
//                 {
//                     echo "<table border='1px solid black' cellspacing='0' cellpadding='5'>";
//                     for($r = 1;$r <= $r_n; $r++)
//                     {
//                         echo "<tr>";
//                         for($c = 1;$c <= $c_n; $c++)
//                            {
//                             echo "<td>$r , $c </td>";
//                            }
//                            echo "</tr>";

                          
//                     }
//                     echo "</table>";
//                 }
//              }
 
// >
// </body>
// </html>

//*********************************************************************
// 11. Write a PHP code to define use of $_POST, $_GET and $_REQUEST.
// *************************************************************** 
// 12. Write a code to make user registration form and validate that form.
// reqiurements of validation 
// 1. phone number is  < 10
// 2. username is must also be character
// 3. email validation 
// 4. usernamae not contains digits 
// 5. password validation
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <form action="a1.php" method="POST">
//         <label for="username">username  : </label>
//         <input type="text" name="username" required>
//         <br>
//         <label for="password">password  : </label>
//         <input type="password" name="password" required>
//         <br>
//         <label for="email">email  : </label>
//         <input type="email" name="email" required>
//         <br>
//         <label for="phone_no">phone no  : </label>
//         <input type="text" name="phone_no" required>
//         <br>
//         <input type="submit" name="btn">  
//     </form>
//     <?php
//           if($_SERVER["REQUEST_METHOD"] == "POST")
//           {
//             $username = $_POST['username'];
//             $password = $_POST['password'];
//             $email = $_POST['email'];
//             $phone_no = $_POST['phone_no'];

//             // username validation
//             $p = '/^[a-zA-Z]+$/';
//             if(preg_match_all($p,$username))
//             {
//                   echo "username is correct enter : $username" . "<br>";
//             }
//             else
//             {
//                 echo "you enter only character not digit" . "<br>";
//             }


//             // password validation
//             $p = '/.{6,}/';
//             if(preg_match_all($p,$password))
//             {
//                 if (strlen($password) == 6) {
//                     echo "Password is correct: $password<br>";
//                 } else {
//                     echo "Password must be exactly 6 characters long.<br>";
//                 }
//             }
//             else
//             {
//                 echo "you enter only 6 chatacter" . "<br>";
//             }

//             // email validation
//             if(filter_var($email,FILTER_VALIDATE_EMAIL))
//             {
//                 echo "username is correct enter : $email" . "<br>";
//             }
//             else
//             {
//                 echo "enter valid email" . "<br>";
//             }


//             // phone no validation
//             $phone_pattern = '/^\d{10}$/';
//             if (preg_match($phone_pattern, $phone_no)) {
//                 echo "Phone number is correct: $phone_no<br>";
//             } else {
//                 if (strlen($phone_no) < 10) {
//                     echo "Phone number must be exactly 10 digits long.<br>";
//                 } else {
//                     echo "Phone number must contain only digits and be exactly 10 digits long.<br>";
//                 }
//             }
//           }
//     >
// </body>
// </html>
//**********************************************************************
// 13. Make a simple webpage which shows the use of include, require.
//   require_once 'assignment-1.txt';
//********************************************************************
// 14. Write a PHP code to make user registration form and display the given detail on  another page in Table format.


//*************************************************************************************************************** 
// 15. Write a PHP code to demonstrate regular expression functions. 
// ?> 
<!-- <!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="a1(14).php" method="POST">
        <label for="username">username : </label>
        <input type="text" name="username">
        <br>
        <input type="submit" name="btn">
    </form>
</body>
</html -->

 <!-- 3. Write a PHP code to input array and display(Total No of elements must entered  from user).--> 
 <!DOCTYPE html>
 <html>
 <head>
     <title>Input Array</title>
 </head>
 <body>

 <form method="post" action="">
     <label for="num_elements">Enter the total number of elements:</label>
     <input type="number" id="num_elements" name="num_elements" min="1" required>
     <br><br>
     <input type="submit" value="Submit">
 </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_elements = $_POST['num_elements'];

    if ($num_elements > 0) {
        echo "<form method='post' action=''>";
        echo "<h3>Enter $num_elements elements:</h3>";
        echo "<input type='hidden' name='num_elements' value='$num_elements'>";
        
        for ($i = 1; $i <= $num_elements; $i++) {
            echo "Element $i: <input type='text' name='elements[]'><br>";
        }
        
        echo "<br><input type='submit' value='Submit'>";
        echo "</form>";
    } else {
        echo "<p>Please enter a valid number of elements greater than 0.</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['elements'])) {
    $elements = $_POST['elements'];
    echo "<h3>You entered:</h3>";
    echo "<pre>";
    print_r($elements);
    echo "</pre>";
} ?  
</body>
</html> -->