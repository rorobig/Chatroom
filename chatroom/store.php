<?php 
date_default_timezone_set('Europe/London');
// echo "thanks for submitting your message";
$today = date("F j, Y, g:i a")."<br>"; 
$mail=$_POST['name']."<br>";
$message=$_POST['message']."<br>";
// echo $mail;
// echo $message;

$file = 'chatlog.txt';
$content= $today.=$mail.=$message;
file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
echo "<br>";
header( "refresh:0.1;url=chat.php" );


 ?>