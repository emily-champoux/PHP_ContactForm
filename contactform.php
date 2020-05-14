<?php
if(isset($_POST['submit'])){

    //Form Variables
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Email
    $mailTo = "example@email.com";
    $headers = "Hi! Let's Work Together";
    $subject = "This is an email from ".$fname." ".$lname;
    $body = "They sent you the following message:\n\n".$message."\n\n".$email;

    //Send Mail
    mail($mailTo, $subject, $body, $headers);
    header("Location:confirmation.html");
  }

    
