<?php

$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'b.kreeft@student.alfa-college.nl';

$email_subject = "New form Submission";

$email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

$to = ; "kreeftbryan@gmail.com"

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
