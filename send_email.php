<?php
$to = 'axellekeren829@gmail.com';
$subject = 'Automated Email Subject';
$message = 'This is an automated email sent by your PHP script.';
$headers = 'From: no-reply@yourdomain.com' . "\r\n" .
           'Reply-To: no-reply@yourdomain.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Kirim email
if (mail($to, $subject, $message, $headers)) {
    echo 'Automated email sent successfully.';
} else {
    echo 'Failed to send automated email.';
}
?>
