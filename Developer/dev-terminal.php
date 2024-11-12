<?php
@include 'Config.php';

if(isset($_POST['submit'])){
    $comnd = $_POST['command'];

    
    header("location:dev_tools/$comnd.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <style>
        body{
            animation: flash;
            animation-duration: 10.5s;
            animation-iteration-count: infinite;
            animation-timing-function: ease;
            overflow: hidden;
            color: #fff;
        }
        form input{
            width: 100%;
            padding-bottom: 0;
        }
        #termminal{
            height: 10vh;
            animation: flas;
            animation-timing-function: ease;
            animation-duration: 10s;
            animation-iteration-count: infinite;
            color: red;
            animation-delay: 1s;
            background: transparent;
            border: none;
        }

        @keyframes flash{
            0%{background-color: #313131;}
            100%{background-color: #000;}
        }

        @keyframes flas{
            0%{background-color: #010101;}
            50%{background-color: #000;}
            100%{background-color: #313131;}
        }
    </style>
</head>
<body>
    <div id="Developer" class="form-container">
        <h3>TERMINAL</h3>
        <form method="post">
        <input id="termminal" type="text" name="command"><br>
        <div></div><br>
        <input type="submit" name="submit" hidden>
        </form>
    </div>
</body>
</html>