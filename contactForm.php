<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $send_to = "kim.lancaster@protonmail.com";
    $subject = "Email from Cupcake website";
    $mail_header = "From: " .$name. "<" .$email. ">\r\n";
    $full_message = "You have recieved an email from: " .$name. "\n" .$phone. "\n\n" .$message;
    
    mail($send_to, $subject, $full_message, $mail_headers) or die("Error");
    header("Location: ../../index.html#contact?mailsend");
}