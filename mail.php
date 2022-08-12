<?php
//get data from form 

$name = $_POST['name'];
$city= $_POST['city'];
$services = $_POST['services'];
$contact= $_POST['contact'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "tokollo@thedlaminipropertygroup.com";
$subject = "Client Enquiry";
$txt ="Name = ". $name . "\r\n  City = " . $city .
"\r\n  services = " . $services . "\r\n  Contact = " . $contact .
"\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@thedlaminipropertygroup.com";
if ($email!=null ) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:index.html");
?>
