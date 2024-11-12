<?php
@include 'Config.php';
if(isset($_POST['add'])){
    $sos = 'SOS';
    $book_id = 'SOS'.+rand(000,999);
    $grade = $_POST['grade'];
    $subject = $_POST['subject'];
    $type = $_POST['type'];

    $insert = "INSERT INTO books(book_id, Grade, subject ,type) VALUES ('$book_id', '$grade' , '$subject', '$type')";
    mysqli_query($conn, $insert);
    header("location:books.php?Grade={$grade}");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
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
                <h1>ADD New book</h1>
                <input type="text" placeholder="Grade Level" name='grade'>
                <input type="text" placeholder="Subject" name="subject">
                <select name="type" id="">
                    <option value="st-text-book">Student Text Book</option>
                    <option value="ref-book">Reference  Book</option>
                    <option value="tech-gud-book">Teachers guide Book</option>
                </select>
                <input type="submit" name="add" value="ADD" class="add">
            <a href="fault_reg.php">Have trouble to add?</a>

            </form>
        </div>
    </div>
</body>
</html>