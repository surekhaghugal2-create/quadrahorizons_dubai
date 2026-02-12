<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name   = htmlspecialchars($_POST['name']);
    $email  = htmlspecialchars($_POST['email']);
    $code   = htmlspecialchars($_POST['code']);
    $mobile = htmlspecialchars($_POST['mobile']);

    $to = "surekhaghugal2@gmail.com"; // your Gmail
    $subject = "New Express Interest Form";

    $message = "
    New enquiry received:

    Name: $name
    Email: $email
    Mobile: $code $mobile
    ";

    $headers  = "From: Quadra Horizon <no-reply@localhost>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Email sent successfully'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Email sending failed'); window.history.back();</script>";
    }
}
?>
