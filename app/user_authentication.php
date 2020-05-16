<?php 

require "../db/connection.php";

 $f_name = mysqli_real_escape_string($conn,$_POST['f_name']);
 $l_name = mysqli_real_escape_string($conn,$_POST['l_name']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $password = mysqli_real_escape_string($conn,$_POST['password']);
 $repeat_password = mysqli_real_escape_string($conn,$_POST['repeat_password']);

 if (isset($_POST['create_account'])) {
 	$sql = "INSERT into users(`f_name`,`l_name`,`email`,`password`,`role_id`,`email_verified_at`,`created_at`) VALUES('$f_name','$l_name','$email',SHA('$password'),2,now(),now())" ;
 	$result = mysqli_query($conn,$sql);
 	header("location: ../public/user/user_login.php");
 }


 ?>