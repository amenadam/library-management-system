<?php

@include 'config.php';


if(isset($_POST['send'])){

    $reg_id = $_POST['reg_id'];
    $Name = $_POST['Name'];
    $problem = $_POST['problem'];
    
    
 
 
 
   
 
    
          $insert = "INSERT INTO faults(reg_id, name, message) VALUES('$reg_id','$Name','$problem')";
          
        
          mysqli_multi_query($conn, $insert);
          echo '<script>alert("No Book Available")</script>'; 
          header('location:index.php');
       }
    


 
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register Problems</title>
    <link rel="stylesheet" href="CSS/fault.css">
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <h1>Register problem</h1>
            <input type="" value="<?=rand(0000,9999);?>" hidden name="reg_id"> 
            <input type="text" name="Name" placeholder="Enter Your name" required>
            <textarea name="problem" id="" req></textarea>
            <input type="submit" value="send" name="send">
        </form>
    </div>
    
</body>
</html>