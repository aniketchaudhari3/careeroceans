<?php
session_start();
ob_start();

include("connect.php");

$email =  mysqli_real_escape_string($connect,$_POST['email']);
$pass =  mysqli_real_escape_string($connect,$_POST['pass']);

if($email && $pass){

 $check_query = mysqli_query($connect,"SELECT * from users where email='$email' and pass='$pass'");
   $row_count=mysqli_num_rows($check_query);


if($row_count ===1){

$_SESSION['email'] = $email;
header("location:../home.php");


}else{

echo "<center><h1>Wrong details!</h1><br><h4>Please enter correct details</h4>";
echo "<a href='/login'>Login</a></center>";
}

}	



?>
