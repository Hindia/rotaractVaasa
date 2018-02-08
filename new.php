<?php
//if "email" variable is filled out, send email
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
    }
  else {
  
  //Email information
  $admin_email = "rotaractvaasa.viestinta@gmail.com";
  $email_subj = "New Comment on website"
  $email_body = "$name said :$comment.\n You can reach $name at $email";
  $to="rotaractvaasa.viestinta@gmail.com";
  $header="From $admin_email\r\n";
  //send email
  mail($to, $email_subj, $email_body,$header);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  echo "Failed";
  
?>