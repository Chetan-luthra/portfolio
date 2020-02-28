<?php
    $name = $_POST['name'];
    $senderEmail = $_POST['email'];
    $message = $_POST['message'];
    $emailSubject = $_POST['subject'];

    $emailFrom = 'cluthra5@gmail.com';
    $emailBody = "User Name : $name.\n"."User Email: $senderEmail.\n"."User Message: $message.\n";
    $to = "chetanluthra9998@gmail.com";
    $headers = "From: $emailFrom \r\n";
    $headers .="Reply-To: $senderEmail \r\n";
    mail($to,$emailSubject,$emailBody,$headers);
    header("location: index.php");
?>