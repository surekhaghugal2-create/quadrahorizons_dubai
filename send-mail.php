<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     $name   = $_POST['name'];
//     $email  = $_POST['email'];
//     $code   = $_POST['code'];
//     $mobile = $_POST['mobile'];

//     $mail = new PHPMailer(true);

//     try {
//         $mail->isSMTP();
//         $mail->Host       = 'smtp.gmail.com';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'surekhaghugal2@gmail.com'; 
//         $mail->Password   = 'YOUR_APP_PASSWORD';       
//         $mail->SMTPSecure = 'tls';
//         $mail->Port       = 587;

//         $mail->setFrom('surekhaghugal2@gmail.com', 'Quadra Horizon');
//         $mail->addAddress('surekhaghugal2@gmail.com');

//         $mail->isHTML(true);
//         $mail->Subject = 'New Express Interest Form';
//         $mail->Body = "
//             <b>Name:</b> $name <br>
//             <b>Email:</b> $email <br>
//             <b>Mobile:</b> $code $mobile
//         ";

//         $mail->send();
//         echo "<script>alert('Email sent successfully'); window.location='index.php';</script>";

//     } catch (Exception $e) {
//         echo "<script>alert('Mailer Error'); window.history.back();</script>";
//     }
// }
?>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
   

    // Create email content
    $to = "info@quadrahorizons.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nContact: $contact";

    // Set headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Attempt to send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
      }
}
?>
