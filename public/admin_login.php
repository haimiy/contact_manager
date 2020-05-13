
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/login_style.css">

</head>
<body>
	<div class="container-fluid col-4 mx-auto text-center">
	<form method="POST" action="../app/admin_authentication.php">
	<img src="../resources/img/images.png">
	<div>
		<h2>Admin Login</h2>
		<br>
	</div>
	<div class="form-group">
		<input type="email" class="form-control form-control-lg"  name="email" placeholder="Enter your email" required>
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
	<script src="../resources/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</html>