<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $business = $_POST['business'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $message = $_POST['message'];

  $mailTo = "millwholefoods@gmail.com"; //fix
  $headers = "Contact Enquiry From: ".$mailFrom;
  $txt = "You have recieved an enquiry from ".$name.", ".$country.", ".$state;

  mail();
}

?>
