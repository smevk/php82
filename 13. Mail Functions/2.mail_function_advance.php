<?php
$to = "recipient@example.com";
$subject = "Test Email with Attachments";
$message = "This is a test email with attachments.";

// Set the From address
$from = "sender@example.com";

// Set the CC recipients
$cc = "cc@example.com";

// Set the email headers
$headers = "From: $from\r\n";
$headers .= "CC: $cc\r\n";

// Generate a unique boundary for the email parts
$boundary = md5(time());

// Set the MIME version and Content-Type headers
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

// Define the email parts
$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n";
$body .= "\r\n";
$body .= $message;
$body .= "\r\n";

// Attach a file
$attachmentPath = "path/to/attachment.pdf";
$attachmentName = "attachment.pdf";
$fileContent = file_get_contents($attachmentPath);
$fileContent = chunk_split(base64_encode($fileContent));
$body .= "--$boundary\r\n";
$body .= "Content-Type: application/pdf; name=\"$attachmentName\"\r\n";
$body .= "Content-Disposition: attachment; filename=\"$attachmentName\"\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n";
$body .= "\r\n";
$body .= $fileContent;
$body .= "\r\n";

$body .= "--$boundary--\r\n";

// Send the email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>