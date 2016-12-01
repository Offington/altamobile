<?php
$name = $_POST['name'];
$org = $_POST['org'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Organisation: $org \n EMail: $email \n Phone: $phone \n Message: $message";
$recipient = "newman.gerry@gmail.com";
$subject = "From Alta Ireland Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You. We'll Be In Copntact!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
