<?php
$name=$_POST['name'];
$visitor_enail =$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'info@hellocoding.com';

$email_subject = 'New Form Submission'

$email_body = "User Name : $name. \n"
                "User Email : $visitor_name. \n"

                "Subject : $subject. \n"
                "User Message : $message. \n";

$to = 'ahmadowais41@gmail.com';

$headers ="From : $email_from \r\n";

$headers .= "Reply-to :$visitor_enail \r\n";

mail($to,$email_subject,$email_body,$headers );

header("Location: contact.html");

?>