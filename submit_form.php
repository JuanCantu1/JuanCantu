<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all the fields.";
        exit;
    }

    // Set the recipient email address
    $recipient = 'cantujuan086@gmail.com';

    // Set the email subject
    $subject = 'New Contact Form Submission';

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message: $message\n";

    // Build the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($recipient, $subject, $email_content, $headers)) {
        echo "Thank you for contacting me. I will get back to you soon!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
