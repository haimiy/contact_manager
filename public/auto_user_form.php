<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<div class="container mx-auto col-4 text-center"  style="margin-top: 110px;">
<div>
<article class="mx-auto col-4 text-center" style="max-width: 500px;">
	<h3 class="mt-3 text-center">Create Account</h3>
	<br>
	<form method="POST" action="../app/user_authentication.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type="text" name="f_name" class="form-control" placeholder="First name" required>
    </div> 

    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type="text" name="l_name" class="form-control" placeholder="Last name" required>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input type="email" name="email" class="form-control" placeholder="Email address" required>
    </div>
		<!-- div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+971</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="" class="form-control" placeholder="Phone number" type="text">
    </div> -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input  type="password" name="password" class="form-control" placeholder="Create password" required>
    </div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input type="password" name="repeat_password" class="form-control" placeholder="Repeat password" required>
    </div>  
    <div class="form-group">
        <button type="submit" name="create_account" class="btn btn-primary btn-block"> Create Account  </button>
    </div>
    <div>
		<strong>Have an account?</strong><a href="user_login.php"> Log In</a>
	</div>     
</form>
</article>
</div>

</div> 
	<script src="../resources/bootstrap/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>