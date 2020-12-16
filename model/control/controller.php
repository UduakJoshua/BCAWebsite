<?php

$msg = '';
$msgClass = '';
$msgFill = '';


// validate the submit buton

if (filter_has_var(INPUT_POST,'submit')) {

    // get form data

    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    if (!empty($name) && !empty($email) && !empty($message)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please enter a valid email address!';
            $msgClass = 'alert-danger';

            
        }else{
            $toEmail = 'adminbca@blessedchildrenacdemy.com';
            $subject = $subject.'from'.$name;
            $body = $message;

            if (mail($toEmail, $subject, $body)) {
                $msg = 'Thank You for contacting Us. We will get back to you shortly.';
                $msgClass = 'alert-success';
                
            }else{
                echo 'message not sent';

            }


        }
       

    }
    else{
        $msg = 'Please fill all input fields';
        $msgClass = 'alert-danger';
    }
    
}


?>