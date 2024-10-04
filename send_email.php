<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email destination
    $to = "vincenthie369@gmail.com";
    $headers = "From: " . $email;

    // Email content
    $email_subject = "Contact Form Submission: " . $subject;
    $email_body = "You have received a new message from the contact form.\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Phone: $phone\n" .
                  "Subject: $subject\n\n" .
                  "Message:\n$message";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Message sent successfully.');</script>";
    } else {
        echo "<script>alert('Message failed to send. Please try again later.');</script>";
    }
}
?>
