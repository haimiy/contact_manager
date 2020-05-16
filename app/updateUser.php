<?php 
require_once("../db/connection.php");

if (isset($_POST['btn_edit'])){

	$id = $_GET['GetId'];
	$f_name = $_POST['f_name'];
 	$l_name = $_POST['l_name'];
 	$email = $_POST['email'];
 	$password =$_POST['password'];
 	$repeat_password = $_POST['repeat_password'];

 	$sql = "UPDATE users SET f_name = '".$f_name."' , l_name = '".$l_name."' , email = '".$email."', password = '".$password."' WHERE id = '".$id."'";

 	$result = mysqli_query($conn, $sql);

 	if ($result) {
 		header("location: ../public/admin/manage_user.php ");
 	}
 	else{
 		echo "Data not updated" .mysqli_error();
 	}
}else{
	header("location: ../public/admin/manage_user.php ");
}



 ?>