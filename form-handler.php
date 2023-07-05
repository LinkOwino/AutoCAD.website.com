<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'autocadfreelance.org website.com';

$email_subject = 'new form submission';

$email_body = "username: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $subject.\n".
                "User message : $message\n".;


$ to = 'jolink345@gmail.com';

$headers = "from: $email_from \r\n";

$ headers. = "reply-to: visitor_email \r\n";

mail($ to, $email_subject, $email_body, $headers)

header("Location: contact.html");



?>