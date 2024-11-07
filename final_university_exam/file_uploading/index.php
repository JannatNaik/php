<?php
//    print_r($_FILES['myfile']);
//    echo "<br>";
//    echo $_FILES['myfile']['name'];
//    echo "<br>";
//    echo $_FILES['myfile']['type'];
//    echo "<br>";
//    echo $_FILES['myfile']['tmp_name'];
//    echo "<br>";
//    echo $_FILES['myfile']['error'];
//    echo "<br>";
//    echo $_FILES['myfile']['size'];
      // store on folder
    //   move_uploaded_file($_FILES['myfile']['tmp_name'],"temp_file/".$_FILES['myfile']['name'])
//********************************************************1) */
// 6. Write a PHP code to upload any file of size less than 20000 bytes.
// the user.

// if(isset($_FILES['myfile']))
// {
//     $maxsize = 20000;
//     $filesize = $_FILES['myfile']['size'];
//     if($maxsize > $filesize)
//     {
//         if( move_uploaded_file($_FILES['myfile']['tmp_name'],"temp_file/".$_FILES['myfile']['name']))
//         {
//             echo "your file upload successfully!!!";
//         }
//         else
//         {
//             echo "your file is not upload successfully!!!";
//         }
//     }
//     else
//     {
//         echo "you enter less than 20000";
//     }
// }
//*******************************************************2) */
// 7. Write a PHP code to upload MP3 file.
// // 8. Write a PHP Code to upload doc, pdf, ppt files.

// if(isset($_FILES['myfile']))
// {
//     $filetype = "image/png";
//     if($filetype == $_FILES['myfile']['type'])
//     {
//         if( move_uploaded_file($_FILES['myfile']['tmp_name'],"temp_file/".$_FILES['myfile']['name']))
//         {
//             echo "your file upload successfully!!!";
//         }
//         else
//         {
//             echo "your file is not upload successfully!!!";
//         }
//     }
//     else
//     {
//         echo "you enter png file";
//     }
// }
//********************************** *********************** */

// // Check if a file was uploaded
// if (isset($_FILES['myfile'])) {

//     $uploadDir = "temp_file/";
//     // Get the file information
//     $fileTmpPath = $_FILES['myfile']['tmp_name'];
//     $fileName = basename($_FILES['myfile']['name']);
//     $fileType = $_FILES['myfile']['type'];
//     $fileSize = $_FILES['myfile']['size'];

//         // Define the full path to the uploaded file
//         $uploadFilePath = $uploadDir . $fileName;

//         // Check if a file with the same name already exists
//         if (file_exists($uploadFilePath)) {
//             // Append a unique identifier to the file name (e.g., current timestamp)
//             $fileInfo = pathinfo($fileName);
//             $newFileName = $fileInfo['filename'] . '_' . time() . '.' . $fileInfo['extension'];
//             $uploadFilePath = $uploadDir . $newFileName;
//         }

//         // Move the uploaded file to the desired directory
//         if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
//             echo "Your file was uploaded successfully!";
//         } else {
//             echo "Your file was not uploaded successfully!";
//         }
//     } else {
//         echo "Please upload a PNG file.";
//     }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile"> <br>
        <input type="submit" name="btn" value="submit">
    </form>
</body>
</html>