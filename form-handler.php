<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['sunject'];
$message = $_POST['message'];

$email_from = 'kalichochko@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Name: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n";


$to = 'kalichochko@abv.bg';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n;



mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>             