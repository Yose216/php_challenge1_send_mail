<?php 
    $to = $_POST['adresse'];
    $headers = 'From: Youness.chetoui@face.com' . "\r\n" .
                'Reply-To: no-reply@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $subject = $_POST['objet'];
    $message = $_POST['msg'];

	if (isset($_POST['envoye']))
	{
    	if (empty($to) || empty($headers) || empty($subject) || empty($message)) //verifie la presence de contenue
		{  
    		echo '<script>alert("Tout les champs doivent être renseignés")</script><br/>
                  <a href="http://localhost/php_challenge1_send_mail/index.php">Retour au mail</a>';
		} 
 		else if (mail($to, $subject, $message, $headers)) //envoie le mail et met en place un cookie
        {
            $alert = '<script>alert("E-mail envoyé avec succès")</script><br/>
                      <a href="http://localhost/php_challenge1_send_mail/index.php">Retour au mail</a>';
            setcookie("sent", "1", time() + 120);
        }
        else
        {
            $alert = '<script>alert("Erreur d\'envoi de l\'e-mail")</script><br/>
                      <a href="http://localhost/php_challenge1_send_mail/index.php">Retour au mail</a>';
        }
        
        echo $alert;
  }
 ?>