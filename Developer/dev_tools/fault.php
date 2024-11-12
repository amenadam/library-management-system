<?php
    @include 'config.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problems registerd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fault.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Registration ID</th>
      <th scope="col">Name</th>
      <th scope="col">Message</th>
      <th scope="col">Registration Date</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
             
  <?php
  
    $query = "SELECT * FROM faults";
    $query_run = mysqli_query($conn, $query);
    $i =1;
    {
      foreach($query_run as $bg){
        ?>
        if(mysqli_num_rows($query_run) > 0)
    <tr>
      <th><?= $i++;?></th>
      <td><?= $bg['reg_id'];?></td>
      <td><?= $bg['name'];?></td>
      <td><?= $bg['message'];?></td>
      <td><?= $bg['dateupdated'];?></td>
      <td><a href="solved.php?reg_id=<?= $bg['reg_id'];?>">Detail</a></td>
     
    </tr>
    <?php
}
}
else{
echo '<script>alert("No fault Available")</script>'; 
}
?>
   </tbody>
    
  </tbody>
</table>
</body>
</html>