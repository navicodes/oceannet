<?php

// Check if the form has been submitted
if (isset($_POST['send'])) {

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send the email
    $to = 'dygytator@gmail.com';
    $subject = 'New message from contact form';
    $body = "You have received a new message from the user $name.\n\nHere is the message:\n$message";

    mail($to, $subject, $body);

    // Redirect the user to a confirmation page
    //header('Location: contact-form-confirmation.php');
    header('Location: ../contact.html');
}
?>