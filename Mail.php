<?php 
    $to = $_POST['adresse'];
    $headers = 'From: Youness.chetoui@face.com' . "\r\n" .
                'Reply-To: no-reply@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $subject = $_POST['objet'];
    $message = $_POST['msg'];
    mail($to, $subject, $message, $headers);
 ?>