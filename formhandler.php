<?php
 $name = $_POST['name']; 
 $visitor_email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['message']; 

// $email_from = 'info@pearsonendeavor.com';

$email_subject = 'New Form submission';

$email-body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "phone: $phone.\n".
                "User Message: $message.\n";

$to = "info@azcelladigital.com";

$headers = "from: $to \r\n";

$headers.= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email-body,$headers);

//redirect to the 'thank you' page
header('Location: thank-you.html');
?>