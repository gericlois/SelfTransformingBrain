<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

// Grab form data
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address.');
}

$mail = new PHPMailer(true);

try {
    // SMTP Setup
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'selftransformingbrain@gmail.com'; // Your Gmail
    $mail->Password   = 'your-app-password';               // Use App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender & recipient
    $mail->setFrom('selftransformingbrain@gmail.com', 'Website Contact Form');
    $mail->addReplyTo($email, $name); // User's reply email
    $mail->addAddress('selftransformingbrain@gmail.com'); // Where to send the message

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = "New Inquiry from $name";
    $mail->Body    = "
        <h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Service:</strong> $service</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    $mail->send();
    echo 'Message sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
