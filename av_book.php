<?php

@include 'config.php';





 
 
 ?>
   <?php

        ?>
        

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Book - <?=
    $tik_id = mysqli_real_escape_string($conn, $_GET['book_id']);
    
   
    $tik_id?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap');
</style>
   <?php 
                                    $con = mysqli_connect("localhost","root","","LMS_db");

                                    if(isset($_GET['book_id']))
                                    {
                                        $book_id = $_GET['book_id'];

                                        $query = "SELECT * FROM books WHERE book_id='$book_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                             ?>
</head>
<body id="body">
   
<div class="container">

   <div class="content" id="ticket" >
     
      <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Book Found";
                                        }
                                    }
                                   
                                ?>
                                <?php
@include 'config.php';




?>
      <?php 
                                    $con = mysqli_connect("localhost","root","","LMS_db");

                                    if(isset($_GET['book_id']))
                                    {
                                        $book_id = $_GET['book_id'];

                                        $query = "SELECT * FROM books WHERE book_id='$book_id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?><?php
                                                
                                                require_once 'phpqrcode/qrlib.php';
$path ='images/';
$qrcode = $path.$row['book_id'].".png";
QRcode :: png($row['book_id'], $qrcode, 'H', 4, 4);
echo "<img src='".$qrcode."'>";
                                                
                                                ?>
                                             
                                            
                                                <div class="form-group mb-3">
                                                    <label for="">Book Id</label><br>
                                                    <input type="text" value="<?= $row['book_id']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Grade </label>
                                                    <input type="text" value="<?= $row['Grade']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Subject</label>
                                                    <input type="text" value="<?= $row['subject']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Type</label>
                                                    <input type="text" value="<?= $row['type']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Available</label>
                                                    <input type="text" value="<?= $row['Available']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <button onclick="printPage()">print</button>
                                            </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No book Found";
                                        }
                                    }
                                   
                                ?>
   </div>
  </div>






    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    function printPage(){
        
            var body = document.getElementById('body').innerHTML;
            var ticket = document.getElementById('ticket').innerHTML;
            document.getElementById('body').innerHTML = ticket;
            window.print();
        }

    
</script>
</body>
</html>