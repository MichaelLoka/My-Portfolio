<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose the email message
$to = 'michael.loka.2001@gmail.com';
$subject = 'New form submission';
$emailMessage = "New form submission:\nName: $name\nEmail: $email\nMessage: $message";

// Send the email using PHP's mail() function
$headers = "From: $email";
$mailSent = mail($to, $subject, $emailMessage, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    // Redirect back to the thank you page after successful submission
    header("Location: thank_you_page.html");
    exit();
} else {
    // Handle the case when the email failed to send (you can redirect to an error page or display an error message)
    echo "Failed to send the email. Please try again later.";
}
?>
