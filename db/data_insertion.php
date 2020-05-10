<?php

include "connection.php";

$sql_gender ="INSERT INTO genders(`gender_name`) VALUES
('Male'),
('Female')";

$sql_role ="INSERT INTO roles(`role_name`) VALUES
('Admin'),
('User')";

$sql_user = "INSERT INTO users(`f_name`,`l_name`,`email`,`password`,`role_id`,`email_verified_at`,`created_at`) VALUES
('Khairat','Issa','Khairat096@gmail.com',SHA('1234'),1,now(),now())";

mysqli_query($conn,$sql_gender);
mysqli_query($conn,$sql_role);
$data = mysqli_query($conn,$sql_user);
echo mysqli_error($conn);

 ?>
