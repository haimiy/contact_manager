<?php
	require "../db/connection.php";

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$email = mysqli_real_escape_string($conn,$_POST['email']);
	 	$password = mysqli_real_escape_string($conn,$_POST['password']); 

	    $sql = "SELECT email,password from users where email = '$email' and password = SHA('$password')";
		$result = mysqli_query($conn,$sql);

		  	if (mysqli_num_rows($result)>0) {
		  		header("location: ../public/admin_page.php");
		  	}
		  	else{
		  		header("location: ../public/admin_login.php");
		  	}		
	
	}
