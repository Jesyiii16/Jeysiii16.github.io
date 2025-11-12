<?php

    $name = $_GET['name'];
    $visitor_email = $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];
    
    

    $email_from = 'https://jesyiii16.github.io/Jeysiii16.github.io/';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User subject: $subject.\n".
                        "User Message: $message.\n";

    $to = "johncarlosuntalan@yahoo.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
    

?>

