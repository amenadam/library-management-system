<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['teacher_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="assets/SOSHGSLOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            width: 100%;
        }
        a{
            color: #fff;
            background-color: rgb(0, 162, 255);
            text-decoration: none;
            padding: 10px 20px 10px 20px ;
            border-radius: 25px;
            transition: 0.5s;
            position: relative;
            top: 50px;
        }
        a:hover {
            padding: 15px 25px 15px 20px;
        }
        h1{
            color:  rgb(0, 162, 255);
            position: relative;
        }
        .content{
            position: absolute;
            left: 450px;
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
        <p>Scan the QR code which found on the back of the book</p>

        <a href="scanbookreturn.php">Scan Book</a>
        
        </div>
        
    </div>
</body>
</html>