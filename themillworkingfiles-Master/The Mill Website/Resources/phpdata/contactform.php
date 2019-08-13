<!-- PLEASE NOTE; WHEN WEBSITE IS HOSTED, THE FOLLOWING PHP CODE WILL SEND ALL ENQUIRIES TO THE SPECIFIED BUSINESS EMAIL ADDRESS AND THUS THE CODE WILL NOT BE VISIBLE -->

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $business = $_POST['business'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $message = $_POST['message'];

  $mailTo = "millwholefoods@gmail.com"; //Server workaround for @gmail adresses implemented
  $headers = "Contact Enquiry From: ".$mailFrom;
  $txt = "You have recieved an enquiry from ".$name.", ".$country.", ".$state;

  mail($mailTo, $headers, $txt);
  header("Location: contactform.php?mailsend");
}

?>

<!-- TO RETURN TO THE WEBSITE, PLEASE CLICK THE BACK ARROW IN GOOGLE CHROME  -->
