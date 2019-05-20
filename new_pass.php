<?php
include("modules/connect.php");

$newpass= mysqli_real_escape_string($connect,$_POST["password"]);
$email= mysqli_real_escape_string($connect,$_POST["email"]);

$change = mysqli_query($connect,"UPDATE users SET pass ='$newpass' WHERE email='$email'");

if($change){
header("location:login.php");
}else{
    echo "error";
}
?>