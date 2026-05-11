<?php

$to = 'recipient@example.com';
$subject = 'Test Email';
$message = 'Hello from PHP';

$senderEmail = 'your_email@example.com'; // must be your own email/domain
$senderName = 'Deepak Sharma';

$headers = 'From: ' . $senderName . ' <' . $senderEmail . '>' . "\r\n" .
           'Reply-To: ' . $senderEmail . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully';
} else {
    echo 'Failed';
}

?>
