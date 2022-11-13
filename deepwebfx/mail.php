<?php 
$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$errorMessage = "<script>document.writeln(errorMessage)</script>";

$formcontent = "From : $name \n Message : $message \n Contant : $phone";
$mailTo = "deepagrawal01072000@gmail.com";
$subject = "Contact Form Submission";
$mailheader = "From : $email \r \n";

if($errorMessage != "") {
    echo $errorMessage;
}
else {
    mail($mailTo,$subject,$formcontent,$mailheader);
echo"Thank You <br> You have done it!";
}

?>