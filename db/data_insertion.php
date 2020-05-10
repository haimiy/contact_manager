<?php 

include "connection.php";

$sql ="INSERT INTO genders(`gender_id`,`gender_name`) VALUES
('Male'),
('Female')";

$sql ="INSERT INTO roles(`role_id`,`role_name`) VALUES
('Admin'),
('User')";

$sql = "INSERT INTO users(`user_id`,`f_name`,`l_name`,`email`,`password`,`
role_id`,`is_verified`,`is_active`,`email_verified_at`,`created_at`) VALUES
('Khairat','Issa','Khairat096@gmail.com',SHA('1234'),1,NULL(),)";

$result = mysqli_query($conn,$sql);

 ?>