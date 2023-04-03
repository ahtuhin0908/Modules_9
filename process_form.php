<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Send email to the contact email address
    $to = "contact@example.com";
    $subject = "Contact Form Submission: " . $subject;
    $body = "Name: " . $name . "\n" . "Email: " . $email . "\n\n" . "Message: \n" . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
