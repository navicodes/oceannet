<?php

// Check if the form has been submitted
if (isset($_POST['send'])) {

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mail_subject = $_POST['subject'];

    // Send the email
    $to = 'dydgtator@gmail.com'; //testing
    //$to = 'info@oceannetwork.co.tz';
    $subject = 'Contact mail: ' . $mail_subject;
    $body = "You have received a new message from the user $name. \n$email \n\nHere is the message:\n$message";

    mail($to, $subject, $body);

    // Redirect the user to a confirmation page
    //header('Location: contact-form-confirmation.php');
    header('Location: ../contact.html');
}
?>