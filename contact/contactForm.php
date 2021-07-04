<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'kreeftbryan@gmail.com';

$email_subject = "Personal message";

$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n";

$to = "b.kreeft@student.alfa-college.nl";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.php");
