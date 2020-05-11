<?php
	require "../db/connection.php";

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$username = mysqli_real_escape_string($conn,$_POST['username']);
	 	$password = mysqli_real_escape_string($conn,$_POST['password']); 

	    $sql = "SELECT username,password from users where username='email' and password=password";
		$result = mysqli_query($conn,$sql);
		  	if (mysqli_num_rows($result)>0) {
		  		echo "Success";
		  		header("location: ../public/admin_page.php");
		  	}
		  	else{
		  		echo "Fail";
		  		header("location: ../public/admin_login.php");
		  	}		
	}

	?>