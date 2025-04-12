<?php
$to = "info@eazmchemicals.com";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";
$body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
$body .= "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$body .= "Date: " . date("Y-m-d H:i:s") . "\n";
$body .= "----------------------------------------\n";
$body .= "This email was sent from the contact form on your website.\n";
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>