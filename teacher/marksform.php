<?php include "header.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>marksform</title>
	
</head>
<body>
<header>

</header>
<div class="title">
	<h1 style="color: black;"> Students Marks Filling Form</h1>
</div>
<div class="container" style="height: 440px;">
<center>
		<div  class="formbox;">
			
		<?php
                    include "teachercon.php";
					$id = $_GET['id'];
                    $a = "SELECT * from user where id=$id";
                    $b = mysqli_query($con,$a);
                    while ($result=mysqli_fetch_array($b)) {
					
                    ?>
					

				<form action="marks.php" method="post">
					
					<input type="text" name="id" value="<?php  echo $result['id']?>">
					<h4>English</h4>
					
					<input type="text" name="english" value="" placeholder="enter marks">
					<h4>Hindi</h4>
					<input type="text" name="hindi" value="" placeholder="enter marks">
					<h4>Maths</h4>
					<input type="text" name="maths" value="" placeholder="enter marks">
					<h4>Physics</h4>
					<input type="text" name="physics" value="" placeholder="enter marks">
					<h4>Chemistry</h4>
					<input type="text" name="chemistry" value="" placeholder="enter marks">
					<br><br>
					<button type="submit" value="  submit  " name="submit" style="background-color: black; color:white">submit</button>
				</form>
		</div>
</center>
				<?php
					}
					?>
		</div>
</div>
</div>
</body>
</html>
