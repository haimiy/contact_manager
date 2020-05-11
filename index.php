<?php
	require "db/connection.php";

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$username = mysqli_real_escape_string($conn,$_POST['username']);
	 	$password = mysqli_real_escape_string($conn,$_POST['password']); 

	    $sql = "SELECT username,password from users where email='Khairat096@gmail.com' and password=SHA('1234')";
		$result = mysqli_query($conn,$sql);
		  	if (mysqli_num_rows($result)>0) {
		  		echo "Success";
		  	}
		  	else{
		  		echo "Fail";
		  	}		
	}

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container-fluid col-4 mx-auto text-center">
	<form method="POST">
	<img src="img/images.png">
	<div>
		<h2>Admin Login</h2>
		<br>
	</div>
	<div class="form-group">
		<input type="text" class="form-control form-control-lg"  name="username" placeholder="Username" required>
	</div>
	<div class="form-group">
		<input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block" name="Login">Login</button>
	</div>
	</form>
	</div>
	
</body>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</html>