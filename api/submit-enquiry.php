<?php
include("../config/db.php");

$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO enquiries (name, email, phone)
        VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql)) {
  echo "<script>alert('Thank you! We will contact you soon.');window.location.href='../';</script>";
} else {
  echo "Error";
}
?>
