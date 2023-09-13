<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobile_number"];
    $emailSubject = $_POST["email_subject"];
    $message = $_POST["message"];

    // You can perform actions with the form data here, such as sending an email or saving it to a database.

    // Example: Sending an email
    $to = "your@email.com";
    $subject = $emailSubject;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $messageBody = "Name: $fullName\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Phone: $mobileNumber\n";
    $messageBody .= "Subject: $emailSubject\n";
    $messageBody .= "Message:\n$message";

    mail($to, $subject, $messageBody, $headers);
}
?>
