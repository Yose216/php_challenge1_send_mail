<?php 
    $to = $_POST['adresse'];
    $headers = 'From: Youness.chetoui@face.com' . "\r\n" .
                'Reply-To: no-reply@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $subject = $_POST['objet'];
    $message = $_POST['msg'];

	if (isset($_POST['envoye']))
	{
    	if (empty($to) || empty($headers) || empty($subject) || empty($message))
		{  
    		echo '<strong> les champs doivent être renseignés</strong>';
		} 
 		else if (mail($to, $subject, $message, $headers))
        {
            $alert = '<strong>E-mail envoyé avec succès</strong>';
            setcookie("sent", "1", time() + 120);
        }
        else
        {
            $alert = '<strong>Erreur d\'envoi de l\'e-mail</strong>';
        }
        
        echo $alert;
  }
 ?>