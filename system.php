<?php
 @include 'config.php';
?>
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
    
     
    <?php
    
}
}
else{
echo '<script>alert("No Book Available")</script>'; 
}

?> 
 
</tr>
   </tbody>
    
  </tbody>
</table>
