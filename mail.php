<?php

include("modules/connect.php");

$to= mysqli_real_escape_string($connect,$_POST["email"]);
$code = substr($to,2,-10);
$code_encode = base64_encode($code);


    $check = mysqli_query($connect,"SELECT * FROM users where email = '$to'");
    while($row = mysqli_fetch_assoc($check)){
  $id = $row['id'];
    }

    $id_dumy = "91".$id."58";

echo "<br>";

if(!$check){

    echo "fail".mysqli_error($connect);
}

$count = mysqli_num_rows($check);

if($count == 1){

    $subject = "Recover Password";
    $link = "<html>
    <head>
      <title>Reset Password</title>
    </head>
    <body>
    Reset Link Is here <a href='https://careeroceans.cf/reset.php?dGVq=$code_encode&ii=$id_dumy&dGVqtt=$code_encode'> Reset Password</a>;
    </body>
    </html>";

 
$headers .= "Organization: CareerOceans\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$headers .= "From: resetpassword@careeroceans.cf";
    
    
        if (mail($to,$subject,$link,$headers))
        {
            echo 'Link has been sent check Mail Box.'.$link;
        }else{
            echo 'failed';
        }
    

}else{
    echo "User name does not exist in database";
}

   
?>
