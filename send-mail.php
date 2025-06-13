<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "youremail@example.com"; // Change to your email
    $subject = "New Contact Form Submission";

    $message = "Name: " . htmlspecialchars($_POST['fname']) . "\n";
    $message .= "Email: " . htmlspecialchars($_POST['email']) . "\n";
    $message .= "Phone: " . htmlspecialchars($_POST['phone']) . "\n";
    $message .= "Services: " . htmlspecialchars($_POST['services']) . "\n";
    $message .= "Subject: " . htmlspecialchars($_POST['subject']) . "\n";
    $message .= "Message:\n" . htmlspecialchars($_POST['message']);

    $headers = "From: " . $_POST['email'] . "\r\n" .
               "Reply-To: " . $_POST['email'] . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your message was sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
