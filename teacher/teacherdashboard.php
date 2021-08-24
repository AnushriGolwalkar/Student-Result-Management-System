
<?php 

include "header.php"?>

<center>
<table class="table table-striped" style="background: white; width:85%;">
    <thead>
      <h2>Student table</h2>
      <tr>  
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
		<th>Course</th>
        <th>Role</th>
        
      </tr>
    </thead>
    <tbody>
       <?php
                     include "teachercon.php";
					
                    $a = "SELECT * from user where role='student' ";
                    $b = mysqli_query($con,$a);
                    while ($result=mysqli_fetch_array($b)) {
  
                    ?>
                    <tr>
                      <td><?php  echo $result['id']?></td>                    
                       <td><?php  echo $result['uname']?></td>
                     <td><?php  echo $result['uemail']?></td>
                      <td><?php  echo $result['udepart']?></td>
					  <td><?php  echo $result['course']?></td>
                       <td><?php  echo $result['role']?></td>
                        

                     <td>
        
        <a href="marksform.php?id=<?php echo $result['id']?>" class="btn btn-primary">Marks filling form</a>
        <a href="edit.php?id=<?php echo $result['id']?>" class="btn btn-danger">Edit Marks</a>
                     </td>
                    </tr>
                    <?php

                    }
                    ?>
                   
    </tbody>
  </table>
</center>