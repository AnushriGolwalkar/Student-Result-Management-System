<?php 

include "header.php";
include "studentcon.php";
?>



<table class="table table-striped" style="background: white; ">
    <thead>
      <h2>Student table</h2>
      <tr>  
        <th>id</th>
        <th>english</th>
        <th>Hindi</th>
        <th>Maths</th>
		    <th>Physics</th>
        <th>Chemistry</th>
        <th>Total</th>
        <th>Percentage</th>
        
      </tr>
    </thead>

    <tbody>
       <?php
                     
					          $id = $_GET['id'];
                    $a = "SELECT * from marks where id=$id";
                    $data = mysqli_query($con,$a);
                    while ($result = mysqli_fetch_array($data)) {
  
                    ?>
                    <tr>
                      <td><?php  echo $a = $result['id']?></td>                    
                       <td><?php  echo $b = $result['english']?></td>
                     <td><?php  echo $c = $result['hindi']?></td>
                      <td><?php  echo $d = $result['maths']?></td>
          					  <td><?php  echo $e = $result['physics']?></td>
                       <td><?php  echo $f = $result['chemistry']?></td>
                       <td><?php echo $total = $a+$b+$c+$d+$e+$f?></td>
                       <td><?php echo $total = $total/5?>%</td>

                        

                     
                    </tr>
                    <?php

                    }
                    ?>
                   
    </tbody>
</table>




                   