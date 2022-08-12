<?php
//get data from form 
if (isset($_POST['submit']) ) {
    
    $name = $_POST['name'];
    $city= $_POST['city'];
    $serviceses = $_POST['serviceses'];
    $contact= $_POST['contact'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "tokollotk818@mail.com";
    $subject = "Mail From The Dlamini Property Group";
    $txt ="Name = ". $name . "\r\n  City = " . $city .
    "\r\n  Serviceses = " . $serviceses . "\r\n  Contact = " . $contact .
    "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if ($email!=null ) {
        mail($to, $subject, $txt, $headers);
    }
    //redirect
    header("Location:index.html");

}
?>