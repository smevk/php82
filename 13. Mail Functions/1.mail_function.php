<?php
// SMTP configuration for Mailtrap
$smtpHost = 'smtp.mailtrap.io';
$smtpPort = 587;
$smtpUsername = 'your-mailtrap-username';
$smtpPassword = 'your-mailtrap-password';

// Recipient and sender details
$recipientEmail = 'recipient@example.com';
$senderEmail = 'sender@example.com';

// Message details
$subject = 'Test Email';
$message = 'This is a test email.';

// Create the email headers
$headers = [
    'From' => $senderEmail,
    'To' => $recipientEmail,
    'Subject' => $subject,
    'Cc' => 'cc@example.com', // Add CC recipients if needed
];

// Set the SMTP configuration
ini_set('SMTP', $smtpHost);
ini_set('smtp_port', $smtpPort);
ini_set('sendmail_from', $senderEmail);
ini_set('sendmail_path', "/usr/sbin/sendmail -t -i");

// Set the authentication credentials if required
if (!empty($smtpUsername) && !empty($smtpPassword)) {
    ini_set('SMTPAuth', true);
    ini_set('smtp_username', $smtpUsername);
    ini_set('smtp_password', $smtpPassword);
}

// Send the email
mail($recipientEmail, $subject, $message, $headers);
?>