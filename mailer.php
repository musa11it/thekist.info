<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path if you're using Composer

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com'; // Your Gmail address
    $mail->Password = 'your-email-password'; // Your Gmail password or App password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('your-email@gmail.com', 'Your Name');
    $mail->addAddress($email); // The recipient's email address

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Password Reset Request';
    $mail->Body = 'Click on this link to reset your password: <a href="' . $reset_link . '">Reset Password</a>';

    // Send the email
    $mail->send();
    echo 'Password reset link has been sent to your email.';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
