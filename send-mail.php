<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);

    $to = "info@quadrahorizons.com";   // Yaha apna receiving email daale
    $subject = "New Express Interest Form Submission";

    $message = "
    New Form Submission Details:

    Name: $name
    Email: $email
    Contact: $contact
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
            alert('Thank You! Your message has been sent successfully.');
            window.location.href='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Error! Mail not sent.');
            window.history.back();
        </script>";
    }
}

?>
