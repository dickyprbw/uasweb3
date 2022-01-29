<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$tel = $_POST ['tel'];
$message = $_POST ['message'];

$to = "sastraw27@gmail.com";

$subject = "Tropical Agro";
$txt = "Name = " . $name . "\r\nEmail = " . $email . "\r\nPhone = " . $tel . "\r\nMessage = " . $message;
$headers = "From: Email From Tropical Agro";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thanku.html");
}



?>