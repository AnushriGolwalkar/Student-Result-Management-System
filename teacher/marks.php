<?php 

include 'teachercon.php';

if(isset($_POST['submit'])){

 $sid =  $_POST['id'];
 $english = $_POST['english'];
 $hindi = $_POST['hindi'];
 $maths = $_POST['maths'];
 $physics = $_POST['physics'];
 $chemistry = $_POST['chemistry'];

$data = "INSERT INTO marks(id,english,hindi,maths,physics,chemistry)values($sid,$english,$hindi,$maths,$physics,$chemistry)";


$query = mysqli_query($con,$data);
}

echo ('Marks submitted sucssesfully!');

?>