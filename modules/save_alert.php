<?php
session_start();
ob_start();

include("connect.php");
$email = $_SESSION['email'];
$status = 1;

 $save_alert = mysqli_query($connect,"INSERT into email values('0','$email','$status')");
	

	if($save_alert){
	
echo "Saved";

    }else{
	echo "Error".mysqli_error($connect);
}


?>
