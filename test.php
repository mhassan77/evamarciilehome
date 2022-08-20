<?php



$to = "satinderfreelance@outlook.com";
$subject = "at My subject";
$txt = "Hello world!";
$headers = "From: admin@evamarcillehome.com" . "\r\n" ;

if(mail($to,$subject,$txt,$headers)){ echo 'Mail Sent';}

?>