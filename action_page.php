<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Message from Kylling Spree"
    
    
    $mailTo = "alma9000@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
