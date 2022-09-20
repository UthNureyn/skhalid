<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "abbamagaji49@gmail.com"

$headers = "From:  ".$name. "\r\n";

$txt = "You have recieved an e-mail from ".$name ."\r\n Email: ".$email . "\r\n Subject: ".$subject ."\r\n Message: ". $message;

if($email!= NULL){
    mail($to, $txt, $headers);
}
header('Location:thankyou.html');
?>