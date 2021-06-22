<?php

$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'kreeftbryan@gmail.com';

$email_subject = "New form Submission";

$email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

$to = "b.kreeft@student.alfa-college.nl";

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact/contact.html");

?>
