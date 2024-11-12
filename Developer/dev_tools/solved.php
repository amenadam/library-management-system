<?php
@include 'Config.php';
if(isset($_POST['add'])){
 
    $reg_id = $_GET['reg_id'];

    $delete = "DELETE FROM faults WHERE reg_id = '$reg_id'";
    mysqli_query($conn, $delete);
    header("location:fault.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            overflow: hidden;
        }
        .addbook-container{
            width: 100%;
            height: 100vh;
            background-color: #dddddd;

        }
        .addbook-container .addbook-content{
            background-color: #fff;
            height: 450px;
            width: 400px;
            margin-top: 60px;
            margin-left: 450px;
            border-radius: 15px;
            box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
        }
        .addbook-container .addbook-content form{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding-top: 80px;

        } .addbook-container .addbook-content form input ,.addbook-container .addbook-content form select {
            width: 300px;
            background-color: #dddddd;
            border: none;
            height: 30px;
            border-radius: 15px;
            text-align: center;

        }
        .addbook-container .addbook-content form .add{
            background-color: rgb(0, 162, 255);
            color: #fff;
        }
        .addbook-container .addbook-content form h1{
            color:  rgb(0, 162, 255);
        }
        .addbook-container .addbook-content form a{
            margin-top: 90px;
        }
    </style>
</head>
<body>
    <div class="addbook-container">
        <div class="addbook-content">
            <form action="" method="post">
                <h1>Confirm</h1>
                <input type="text" placeholder="<?=$_GET['reg_id'];?>" name='name'>
                
                <input type="submit" name="add" value="Solved" class="add">

            </form>
        </div>
    </div>
</body>
</html>