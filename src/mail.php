<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'vladislav.borisov.papillo@gmail.com'; 
$mail->Password = '$vlad9709123'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 993; 

$mail->setFrom('vladislav.borisov.papillo@gmail.com'); 
$mail->addAddress('vladislav.borisov.papillo@gmail.com');     
$mail->isHTML(true);                                  

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>