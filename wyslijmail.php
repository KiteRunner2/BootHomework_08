<?php
if (!empty($_POST)){
    // echo $_POST["name"];
    // echo $_POST["subject"];
    // echo $_POST['message'];
    // echo $_POST['email'];
    if (mail("przemek@rudzki.ca", "Contact request notification: {$_POST['subject']}", "{$_POST['message']}", "From: {$_POST['email']}")){
        echo('ok');
    } else
    {
        echo 'error sending email!';
    }
    
}

?>
