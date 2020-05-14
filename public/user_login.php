
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/login_style.css">

</head>
<body>
	<div class="container-fluid col-4 mx-auto text-center">
	<form method="POST" action="../app/admin_authentication.php">
	<img src="../resources/img/images.png">
	<div>
		<h2>User Login</h2>
		<br>
	</div>
	<<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
		<input type="email" class="form-control form-control-lg"  name="email" placeholder="Enter your email" required>
	</div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
			<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
		<input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block" name="Login">Login</button>
	</div>
	<div>
		<strong>Not registered?</strong><a href="auto_user_form.php">Create Accounts</a>
	</div>
	</form>
	</div>
	
</body>
	<script src="../resources/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</html>