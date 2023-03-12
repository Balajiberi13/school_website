<?php
$name=$_POST[''];
$visitor_email=$_POST[''];
$subject=$_POST[''];
$message=$_POST[''];
$email_from ='domain name here';

$email_subject='New Form Submission';

$email_body="User Name: $name.\n".
"User email: $visitor_email.\n".
"subject:$subject.\n";
"User Message: $message.\n";


$to='balajiberi13@gmail.com';

$headers="From:$email_from \r\n";

$headers .="Reply-To: $vivitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location : contact.html");


?>
