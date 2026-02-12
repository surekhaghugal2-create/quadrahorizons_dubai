<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $mobile  = $_POST['mobile'];   // ✅ NEW
    $message = $_POST['message'];

    $to = "surekhaghugal2@gmail.com";  // 🔴 CHANGE THIS
    $subject = "New Contact Form Message";

    $body  = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mobile: $mobile\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Email sent successfully'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Email failed'); window.history.back();</script>";
    }
}
?>
