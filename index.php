<?php
    @include 'config.php';

    session_start();


    if(isset($_POST['submit'])){

        $Id_no = $_POST['Id_no'];
        $pass = $_POST['Password'];
     
        $select = " SELECT * FROM users WHERE ID_Number = '$Id_no' && password = '$pass' ";
     
        $result = mysqli_query($conn, $select);
     
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
      
            if($row['user_type'] == 'teacher'){
      
               $_SESSION['teacher_name'] = $row['name'];
               header('location:home.php');
      
            }elseif($row['user_type'] == 'developer'){
      
                $_SESSION['teacher_name'] = $row['name'];
                header('location:developer/dev-terminal.php');
       
             }elseif($row['user_type'] == 'admin'){
      
                $_SESSION['admin_name'] = $row['name'];
                header('location:admin.php');
       
             }
           
         }else{
            $error[] = 'incorrect ID or password!';
         }
      
      };



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LibraryMS</title>
    <link rel="icon" href="assets/SOSHGSLOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            overflow: hidden;
        }
         
       h2, h1{
        color: rgb(0, 162, 255);
        margin-top: 100px;
       }
       .login-container{
    background-color: #dddddd;
    width: 100%;
    height: 100vh;
    display: flex;
    padding-left: 250px;
    padding-top: 60px;
}
.login-container .login-content{
    background-color: #fff;
    width: 400px;
    height: 500px;
    display: flex;
    flex-direction: column;
    top: 60px;
    left: 300px;    
    align-items: center;
}
.login-container .login-content input {
    width: 300px;
    height: 30px;
    text-align: center;
    margin-top: 15px;
    border: none;
    background-color:  #dddddd;
    color: rgb(0, 162, 255);
    border-radius: 15px;
}
.login-container .login-content  a{
    text-align: center;
}
.login-container .login-content  .login-button{
    background-color: rgb(0, 162, 255);
    color: #fff;
}
.login-container .login-image img{
    height: 500px;
    width: 400px;
}
#error-msg{
    color: crimson;
}

    </style>
</head>
<body>  

    <div class="login-container">
     
       <div class="login-content">
        <h1>Login</h1>
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span id="error-msg" class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <form method="POST">
            
        
        
        
            <div class="">
  <input type="text" class="form-control" id="" placeholder="Enter Your Id no." name="Id_no">
</div>
<div class="">
  <input type="password" class="form-control" id="" placeholder="Password" name="Password">
</div>
            <input type="submit" name="submit" class="login-button"><br>
            <a href="fault_reg.php">Have trouble to login?</a>
        
        
        
        
        </form>
       </div>
      <div class="login-image">
        <img src="images/bg-3.jpg" alt="">
      </div>
    </div>

        
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>