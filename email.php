<?php 

$name = "";
$email = "";
$message = "";
$success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
       $name = $_POST["name"];
       $email = $_POST["email"];
       $message = $_POST["message"]; 

$formcontent = "From : ".$name."\nEmail : ".$email."\nMessage : ".$message;
$mailTo = "deepagrawal01072000@gmail.com";
$subjectf = "Contact Details";
$mailheader = "From : ".$email." \r \n";

mail($mailTo,$subjectf,$formcontent,$mailheader);
  echo "<script>alert('Message Sent, Thanks For Contacting');window.location.href='index.html';</script>";
 }

?> 