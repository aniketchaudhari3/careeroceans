<?php



function getId($email){
include("connect.php");
$get_id = mysqli_query($connect,"SELECT * from users where email='$email'");

$get = mysqli_fetch_array($get_id);
return $get['id'];

}

function getData($email,$field){
include("connect.php");
$get_id = mysqli_query($connect,"SELECT * from users where email='$email'");

$get = mysqli_fetch_array($get_id);
return $get[$field];

}

?>
