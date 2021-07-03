<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    
    $email_form = 'freeweekhasstarted@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "user Email: $visitor_email.\n".
                        "user Message: $message.\n";


    $to = "nemiebokab@gmail.com";

    $headers = "Form: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>