<?php 

require_once("../db/connection.php");

if (isset($_GET['DeleteId'])) {
	
	$id = $_GET['DeleteId'];

	$sql = "DELETE from users id = '".$id."'";

	$result = mysqli_query($conn,$sql);

	if ($result) {
		header("location: ../public/admin/manage_user.php");
	}

	else{
		echo "Not successfull deleted!";
	}
}
else{
	header("location: ../public/admin/manage_user.php");
}

 ?>