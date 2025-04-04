<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $message = $_POST['message'];

    // Email details
    $to = "ezehigreat5@gmail.com.com";
    $subject = "New Donation from $name";
    $message_body = "Name: $name\nEmail: $email\nDonation Amount: $$amount\nMessage: $message";
    $headers = "From: no-reply@yourwebsite.com";

    // Send email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your donation! We will process it shortly.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>
