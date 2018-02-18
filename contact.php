<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent=" From: $name \n Email: $email \n Comment: $comment \n";
$recipient = "rotaractvaasa.viestinta@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You, We will get back to you ASAP!" . " \n" . "<a href='index.html'>home</a>";
?>
