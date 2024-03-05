<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['mail'];
$message= $_POST['message'];
 echo "$message";
$to = "moussah17@gmail.com";
$subject = "from T7WISSA website ";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html");
?>