<?php
$to      = 'zinmyoswe.2017@gmail.com';
$subject = 'Laravel Sport Store';
$message = 'Welcome to our Sport Store';
$headers = 'From: overmidnight12@gmail.com' . "\r\n" .
    'Reply-To: overmidnight12@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 