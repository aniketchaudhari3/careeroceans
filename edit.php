
<?php 
session_start();

include_once("modules/connect.php");
include("modules/function.php");
$email = $_SESSION['email'];
$id = getId($email);

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email'];
$dept = $_POST['dept'];

$insert_order = mysqli_query($connect,"UPDATE users set name = '$name' , lastname = '$last' ,  department = '$dept' where id='$id'");
 
if(!$insert_order){
  echo "fail".mysqli_error($connect);
}else{



}


?>
