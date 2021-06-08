
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "shakilahmmed9990@gmail.com";
$subject = "Mail From Website"
$headers = "From: ".$name. "\r\n" .
"CC: legendcreator999@gmail.com";


$txt = "You have received an e-mail from" .$name ."\r\nEmail: " .$email ."\r\n
    Message: ". $message;
if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}    
header('Location:thankyou.html');

?>




















?>