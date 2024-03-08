<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "studiogoldenangle@gmail.com";
    $subject = "New message from your contact form";
    $headers = "From: $email";
    $message = "Name: $name\n\nMessage:\n$message";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thanks.html");
    } else {
        echo "<script>alert('Sorry')</script>";
    }
}
?>