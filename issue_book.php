<?php
    @include 'config.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/SOSHGSLOGO.png" type="image/x-icon">
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
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
        <h1>Books </h1>
        <p>Choose Grade level</p>

        
     
        <a href="IssueBook.php">Issue Book</a>
        <div></div><br>
       

        
        </div>
        
    </div>
    


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Issue Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Id</th>
      <th scope="col">Book Id</th>
      <th scope="col"> Action</th>
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
      <td><a href="ret_book.php?book_id=<?= $bg['book_id']?>">return book</a></td>
    
     
    <?php
    
}
}
else{
echo '<script>alert("all books are in the Library")</script>'; 
}

?> 
 
</tr>
   </tbody>
    
  </tbody>
</table>
<a href="fault_reg.php">Register Problem</a>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>