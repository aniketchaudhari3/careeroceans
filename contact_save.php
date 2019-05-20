
<?php 


include_once("modules/connect.php");

$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$msg = $_POST['msg'];
if($name && $email){
$insert_order = mysqli_query($connect,"INSERT into  contact values('0','$name','$email','$sub','$msg')");
 
if(!$insert_order){
  echo "fail".mysqli_error($connect);
}else{

echo "Thankyou! We will contact you soon.";

}
}else{

    echo "Please fill all the fields";
}

?>
