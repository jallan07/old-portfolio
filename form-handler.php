<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$email_from = "contact@joshallan.dev";
$email_subject = "New Form Submission from Josh Allan | Dev";

$email_body = "First Name: $first_name.\n".
                "Last Name: $last_name.\n".
                "Phone: $phone.\n".
                ".\n".
                "Message: $message.\n";

$to = "allan.josh07@gmail.com";

$headers = "From: $email_from \r\n";
$headers = "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")


?>