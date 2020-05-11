<?php
	session_start();
	require "../db/connection.php";

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$email = $_POST['email'];
	 	$password = $_POST['password']; 

	    $sql = "SELECT email,password from users where email = 'Khairat096@gmail.com' and password = SHA('1234')";
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