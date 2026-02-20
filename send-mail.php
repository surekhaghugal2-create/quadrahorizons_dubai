<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $mail = new PHPMailer(true);

    try {

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';   // Hostinger SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@quadrahorizons.com'; // Your domain email
        $mail->Password   = 'YOUR_EMAIL_PASSWORD';     // Email password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & Receiver
        $mail->setFrom('info@quadrahorizons.com', 'Quadra Horizons');
        $mail->addAddress('info@quadrahorizons.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Express Interest Form';

        $mail->Body = "
            <h3>New Form Submission</h3>
            <b>Name:</b> $name <br>
            <b>Email:</b> $email <br>
            <b>Contact:</b> $contact
        ";

        $mail->send();

        echo "<script>
            alert('Message Sent Successfully!');
            window.location.href='index.php';
        </script>";

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
