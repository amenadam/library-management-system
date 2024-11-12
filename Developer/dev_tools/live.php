<?php
    @include 'config.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        a{
            color: #fff;
            background-color: rgb(0, 162, 255);
            text-decoration: none;
            padding: 10px 20px 10px 20px ;
            border-radius: 25px;
            transition: 0.5s;
            position: relative;
        }
        a:hover {
            padding: 15px 25px 15px 20px;
        }
        a:active{
            color: rgb(0, 162, 255) ;
            background-color: #313131;
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
        table{
            position: absolute;
            top: 250px;
            left: 20px;
        }

        @keyframes live{
            
            0%   {color:rgb(0, 162, 255);}
            100%   {color:#313131;}
        }
        @keyframes livebg{
            
            0%   {background-color:rgb(0, 162, 255);}
            50%   {background-color:rgb(0, 150, 255);}
            100%   {background-color:#fff;}
        }
        h1{
            animation-name: live;
            animation-duration: 1.7s;
            animation-iteration-count: infinite;
        }

        body{
            animation-name: livebg;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            animation-delay: 0s;
            animation-timing-function: ease-in-out;
            overflow: hidden;
        }
    </style>
</head>
<body onload = "table();">
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "system.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 1);
    </script>
      <div class="container">
        <div class="content">
        <h1>LIVE </h1>
        <p>LIVE BOOK DISPLAY</p>
        </div>
        
    </div>
    <div id="table">

    </div>
  </body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>