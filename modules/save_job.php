<?php
session_start();
ob_start();

include("connect.php");
include("function.php");
$job_json = $_POST['job_json'];
$email = $_SESSION['email'];
$user_id = getId($email);


 $save_job = mysqli_query($connect,"INSERT into saved_job values('0','$user_id','$job_json')");
	

	if($save_job){
	
echo "Saved";

    }else{
	echo "Error".mysqli_error($connect);
}


?>
