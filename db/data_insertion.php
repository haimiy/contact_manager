<?php 

include "connection.php";

$sql =mysql_query($conn,"INSERT INTO genders(`gender_id`,`gender_name`) VALUES
(001,'Male'),
(002,'Female')");

$sql =mysql_query($conn,"INSERT INTO roles(`role_id`,`role_name`) VALUES
(001,'Admin'),
(002,'User')");

$sql =mysql_query($conn,"INSERT INTO users(`user_id`,`f_name`,`l_name`,`email`,`password`,`
role_id`,`is_verified`,`is_active`,`email_verified_at`,`created_at`) VALUES
(001,'Khairat','Issa','Khairat096@gmail.com','1234',001,'true','')");

 ?>