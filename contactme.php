<?php   
    if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = "variablecodecrafters@gmail.com"; // Replace with your recipient's email address
    $subject = "Client Data";
    $message = "Name: $name\nEmail: $email";

    $headers = "From: sender@example.com"; // Replace with your sender's email address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Data submitted successfully. Thank you!";
    } else {
        echo "Failed to send data.";
    }   
?>
