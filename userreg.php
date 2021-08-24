<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.tIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h3>Registration Form</h3></center>
<div class="container-fluid">
    <div class="container">
        <div class="row">
        <form method="POST" action="userinsert.php" >
        <div class="mb-3">
        
            <label for="uname" class="form-label">Name</label>
            <input type="text" class="form-control" name="uname" placeholder="enter your name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="uemail" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Department</label>
        <select name="udepart" class="form-control">
			<option value="select">select</option>
			<option value="maths">Maths</option>
			<option value="commerce">Comerce</option>
			<option value="arts">Arts</option>

		</select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Course</label>
        <select name="course" class="form-control">
			<option value="select">select</option>
			<option value="11th">11th</option>
			<option value="12th">12th</option>
			

		</select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Role</label>
        <select name="role" class="form-control">
			<option value="select">select</option>
			<option value="Teacher">Teacher</option>
			<option value="Student">Student</option>
			

		</select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="enter password">
        </div>
        <button class="btn btn-info" type="submit" value="submit" name="submit">sign in</button>
        </form>
        </div>
        
        </div>
    </div>
</div>
</body>
</html>