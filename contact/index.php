<?php 
if (!session_start()) {
    session_start();
}


$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$message = filter_input(INPUT_POST,'message');

//check for empty fields
if (empty($name) || empty($email) || empty($message)) {
        $errors['fields'] = 'All fields are required. Please fill in each one.';
    }
    
//check CAPTCHA
if ($_SESSION['security_code'] != $_POST['cap_code'] &&
            !empty($_SESSION['security_code'])) {
        $errors['security'] = 'Sorry, the security code you entered did not match the image.';
    }    

    //if there are errors, return to the contcact page and fix them
    if (!empty($errors)) {
        include 'contact.php';
        exit;
    }
    
$formcontent="From: $name \n Message: $message";
$recipient = "arkadiusz7@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$contactmessage = "Thank You! Your message was received."; 
include 'contact.php';

//clear stored data
unset($name);
unset($email);
unset($message);
unset($captcha);