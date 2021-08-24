<?php

include 'usercon.php';

if(isset($_POST['submit'])){
	 $name = $_POST['uname'];

	 $email = $_POST['uemail'];
	
	 $dept = $_POST['udepart'];

	 $course = $_POST['course'];

	 $role = $_POST['role'];

	 $pass = $_POST['password'];

$data = "INSERT INTO user(uname,uemail,udepart,course,role,password)values('$name','$email','$dept','$course','$role','$pass')";

	$query = mysqli_query($con,$data);

	
}
header("location:loginform.php")
?>