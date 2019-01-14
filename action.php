<?php

  
  //Email information
  $admin_email = "mashankarcatering@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$name", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us! You'll here back from us soon!";


?>
