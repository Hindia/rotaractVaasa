<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$formcontent=" From: $name \n Email: $email \n phone: $phone \n";
$recipient = "rotaractvaasa.viestinta@gmail.com";
$subject = "Volunteer!!";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You. You are just AWESOME. We will get back to you the soonest!" . " \n" . "<a href='index.html'>home</a>";
?>