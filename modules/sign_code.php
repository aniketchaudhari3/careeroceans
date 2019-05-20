<?php
session_start();
ob_start();

include("connect.php");
$name  = mysqli_real_escape_string($connect,$_POST['name']);
$last = mysqli_real_escape_string($connect,$_POST['last']);
$email =  mysqli_real_escape_string($connect,$_POST['email']);
$pass =  mysqli_real_escape_string($connect,$_POST['password']);
$dept = mysqli_real_escape_string($connect,$_POST['department']);
if($email && $pass){

 $check_query = mysqli_query($connect,"SELECT * from users where email='$email'");
   $row_count=mysqli_num_rows($check_query);

if($row_count ===1){

echo "Data Is Present";

}else{

$insert = mysqli_query($connect,"INSERT INTO users values('0','$name','$last','$email','$pass','$dept')");

if($insert){

$_SESSION['email'] = $email;
header("location:../home.php");

}else{

echo "error".mysqli_error($connect);
}

}

}	



?>
