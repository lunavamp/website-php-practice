<?php 
$email = $_POST['email'];  
$message = $_POST['message'];

$error = '';
if(trim($email) == ''){
    $error = 'Email cannot be empty';
} else if(trim($message) == ''){
    $error = 'Please, write your message';
} else if(strlen($message) < 10){
    $error = 'Message length must be more than 10 characters';
}

if($error != ''){
    echo $error;
    exit;
}

$subject = '=?utf-8?B?'.base64_encode('Text message').'?=';  
$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'Content-type: text/plain; charset=utf-8' . "\r\n";

mail('admin@website.com', $subject, $message, $headers);

header('Location: /contact.php');
exit;  
?>
