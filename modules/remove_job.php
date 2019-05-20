<?php
session_start();
ob_start();

include("connect.php");
include("function.php");

$job_id = $_POST['job_id'];
$email = $_SESSION['email'];
$user_id = getId($email);


 $delete_job = mysqli_query($connect,"DELETE FROM  saved_job where id='$job_id' and user_id='$user_id'");
	

	if($delete_job){
	
echo "delete";

    }else{
	echo "Error";
}


?>
