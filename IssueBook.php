<?php

@include 'config.php';



if(isset($_POST['find'])){
    $command = $_POST['command'];
    $result = "SELECT * FROM issued_books WHERE book_id = '$command'";
    mysqli_query($conn,$result);
    header("location:is_book.php?book_id={$command}");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            width: 100%;
        }
        .container{
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            text-align: center;
        }
        a{
            color: #fff;
            background-color: rgb(0, 162, 255);
            text-decoration: none;
            padding: 10px 20px 10px 20px ;
            border-radius: 25px;
            transition: 0.5s;
            top: 70px;
            width: 80px;
            z-index: 9999;
        }
        a:hover {
            padding: 15px 25px 15px 20px;
        }
        h1{
            color:  rgb(0, 162, 255);
            position: relative;
        }
      
        .input{
            width: 50%;
            padding-top: 10px;
            position: absolute;
            top: 150px;
            left: 350px;
        }
        form{
            margin-top: 90px;
            padding-top: 10px;
            position: absolute;
            top: 200px;
            background-color: transparent;
        }
        form input{
            width: 300px;
        }
        #submit{
            width: 100px;
            color:#fff;
            background-color: rgb(0, 162, 255);
            border: 0;
            padding-top: 10px;
            padding-bottom: 10px;
            transition: 0.5s;
            cursor: pointer;

        }
        #submit:hover{
            color: rgb(0, 162, 255);
            background-color: #313131;
            border-radius: 20px;
            cursor: pointer;
        }
        .input h1{
            text-align: center;
        }
    </style>
    <link rel="icon" href="assets/SOSHGSLOGO.png" type="image/x-icon">

</head>
<body>

    <div class="container">
   
        <p>Scan the QR Code which found at the back of the book</p>
        <a href="scanbook.php">Scan Book</a><br>
        
        
    
 
    <form method="post">
    <h1>or</h1>

        <input type="text" name="command" id="" placeholder="Enter Book ID">
        <input type="submit" id="submit" name="find" value="Find">
    </form>
    <a href="fault_reg.php">Register Problem</a>

</div>
<?php
        @include 'sidemenu.php';
        ?>
</body>
</html>