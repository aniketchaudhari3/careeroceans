<?php

include("modules/connect.php");



    $check = mysqli_query($connect,"SELECT * FROM email");

    while($row = mysqli_fetch_assoc($check)){

$to= $row['email'];
echo $to;

/*

    $subject = "CareerOceans | BestJobs";

$link "Hey";
 
$headers .= "Organization: CareerOceans\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$headers .= "From: newsletter@careeroceans.cf";
    
    
        if (mail($to,$subject,$link,$headers))
        {
            echo 'Sent check Mail Box.';
    
    }else{

    echo "fail".mysqli_error($connect);
  
      }
    

*/


 }
 
?>
