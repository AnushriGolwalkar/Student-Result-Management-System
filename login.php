<?php
session_start();
include('usercon.php');
if (isset($_POST['submit'])) {
  
  echo $name=$_POST['uname'];
  echo $pass=$_POST['password'];
  # code...
  $a = "SELECT * from user where uname='$name' && password='$pass'";
  $query = mysqli_query($con,$a);

  $total = mysqli_num_rows($query);
  $data = mysqli_fetch_array($query);
 
  if ($total==1) {

  $role = $data['role'];
  if ($role=='Teacher'){
    echo $_SESSION['id']= $data['id'];
      header('location:teacher/teacherdashboard.php'); 
  }
  elseif ($role == 'Student') {
     echo $_SESSION['id']= $data['id'];
     header('location:student/studentdashboard.php'); 
  }
  
  else
  {
    $_SESSION['error'] = 'Invalid Username and Password';
  header('location:loginform.php');
}
  
}
}

?>

