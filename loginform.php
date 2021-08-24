
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<header>
<div class="container-fluid">
	<h3 class="a">Student Result Management System</h3>
	<nav>
		<ul>
		<li><a href="userreg.php">registration</a></li>
		</ul>
	</nav>
</div>
</header>
<div class="title">
	<h1>LOGIN FORM</h1>
</div>
<div class="container">
	<div class="left"><img src="img/a.jpg"></div>
		<div class="right">
			<div class="formbox">
				<form action="login.php" method="post">
					
					<p>Username</p>
					<input type="text" name="uname" value="" placeholder="enter your username">
					<p>password</p>
					<input type="text" name="password" value="" placeholder="enter your password">
					<br><br>
					<button type="submit" value="submit" name="submit">submit</button>
				</form>
			</div>
		</div>
</div>
</body>
</html>
