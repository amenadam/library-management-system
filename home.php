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
    <script src="script/script.js"></script>
    <link rel="stylesheet" href="home-style.css">
    <style>
      #noofbook{
        position: absolute;
        top: 200px;
        left: 210px;
        display: flex;
        gap: 10px;
      }
      #noofbooks{
    width: 200px;
    height: 220px;
    background-color: #313131;
    color: #fff;
    
    transition: 0.7s ease;
    border-radius: 10px;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
}
#noofbooks:hover{
  background-color: #d3d3d3;
  color: #313131;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
}
#noofbooks h3{
  text-align: center;
  font-size: 15px;
  margin-top: 40px;
  padding-bottom: 0;
}
#noofbooks h1{
  text-align: center;
  font-size: 72px;
  padding-top: -10px;
}
#profile-card{
  z-index: 99999;
}


    </style>
    <link rel="icon" href="assets/SOSHGSLOGO.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d05574764c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
    <div class="logo">
      <img src="assets/SOSHGSLOGO.png" alt="">
      <h6>SOS HERMANN GMEINER<br> SCHOOL</h6>
    </div>
    <div class="profile" id="prof">
      <img src="assets/no-image.gif" alt="" onclick="profile.style.display ='none'; profilecard.style.top = '20px';">
      <h6><?php echo $_SESSION['teacher_name'] ?> </h6>
    </div>

    
  </nav>
  <div class="profile-card" id="profile-card">
    <img src="assets/no-image.gif" alt="" >
      <h6><?php echo $_SESSION['teacher_name'] ?> </h6>
      <p>librarist</p>
      <a href="logout.php">logout</a>
      <i class="fa-solid fa-angle-up" onclick="profilecard.style.top ='-400px'; profile.style.display =''; "></i>

    </div>
  <div class="body">
  <div class="col-1">
  <i id="menu" class="fa-solid fa-bars" onclick="side_menu.style.left ='0'; menu_n.style.display ='none';"></i>
    <div class="sidemenu" id="sidemenu">
  <i class="fa-solid fa-xmark" onclick="side_menu.style.left ='-200px'; menu_n.style.display = 'block';"></i>

    <a href="books.php?Grade=9"><i class="fa-solid fa-book"> Books</i> </a>
        <a class="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user"> Students</i></a>
        <a href="IssueBook.php"><i class="fa-solid fa-plus"> Issue Book</i></a>
        <a href="return_issue_book.php"><i class="fa-solid fa-minus"> Return Book</i></a>
        <a href="fault_reg.php"><i class="fa-solid fa-gear"> Problem</i></a>
        <a href="PRINT_QR.php"><i class="fa-solid fa-qrcode"> Print QR CODE</i></a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"> LogOut</i></a>
    </div>
  </div>
  <div class="col-2">
  <h1>Welcome <?php echo $_SESSION['teacher_name'] ?> </h1>
        <p>This is your home page as a teacher.</p>
  </div>
    <div class="table-dev">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Issue Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Id</th>
      <th scope="col">Book Id</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
             
  <?php
  
                                $query = "SELECT * FROM issued_books ";
                                $query_run = mysqli_query($conn, $query);
                                $i =1;
                                
                                
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $bg){
                                        ?>
    <tr>
      <th><?= $i++;?></th>
      <td><?= $bg['issue_id'];?></td>
      <td><?= $bg['Stud_name'];?></td>
      <td><?= $bg['Stud_id'];?></td>
      <td><?= $bg['book_id'];?></td>
    

 
</tr>
<?php
    
  }
  }
  else{
  echo '<h6>No Book Available'; 
  }
  
  ?> 
   </tbody>
    
  </tbody>
</table>
     

    </div>
  </div>

<div id="noofbook">
    <div id="noofbooks">
      <?php
      $sql = "SELECT * from books";

      if ($result = mysqli_query($conn, $sql)) {
      
          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          ?><h3>total Books</h3><?php
          // Display result
          echo "<h1>{$rowcount}";
       }
      ?>
    </div>
  
    <div id="noofbooks">
      <?php
      $sql = "SELECT * from users";

      if ($result = mysqli_query($conn, $sql)) {
      
          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          ?><h3>total users</h3><?php
          // Display result
          echo "<h1>{$rowcount}";
       }
      ?>
    </div>
    <div id="noofbooks">
      <?php
      $sql = "SELECT * from issued_books";

      if ($result = mysqli_query($conn, $sql)) {
      
          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          ?><h3>total borrowed books</h3><?php
          // Display result
          echo "<h1>{$rowcount}";
       }
      ?>
    </div>
    <div id="noofbooks">
      <?php
      $sql = "SELECT * from students";

      if ($result = mysqli_query($conn, $sql)) {
      
          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );
          ?><h3>total students</h3><?php
          // Display result
          echo "<h1>{$rowcount}";
       }
      ?>
    </div>
    
  </div>
  </div>









        <!------Modal ------------->
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        System have not connected to students database
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
    </div>
</body>
<script>
  let side_menu = document.getElementById('sidemenu');
  let menu_n = document.getElementById('menu');
  let profile = document.getElementById('prof');
  let profilecard = document.getElementById('profile-card');
</script>
</html>