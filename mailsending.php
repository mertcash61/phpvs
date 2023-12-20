<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \ Email: $Email\ Subject: $subject \ Message: $message"
$recipient = "libertycallproductions@yahoo.COM";
$subject = "Contact Form";
$mailheader = "from: $email \r\n"
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your message has been submitted! Thank You!" . " " . "<a href='form.html style='text-decoration:none;color:#ff0099;'> </a>";
?>
