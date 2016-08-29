<?php 
    $mail = trim($_POST['adresse']);
    $header = 'From: Youness.chetoui@face.com' . "\r\n" .
                'Reply-To: no-reply@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $objet = trim($_POST['objet']);
    $message = trim($_POST['msg']);

	if (isset($_POST['envoye']))
	{
    	if (empty($mail) || empty($header) || empty($objet) || empty($message)) //verifie si il y a quelque chose dans les input
		{  
    		echo '<script>alert("Tout les champs doivent être renseignés")</script><br/>
                  <a href="http://localhost/php_challenge1_send_mail/index.php">Retour au formulaire</a>';
		} 
 		else if (mail($mail, $objet, $message, $header)) //envoie le mail et met en place un cookie
        {
            $alert = '<script>alert("E-mail envoyé avec succès")</script><br/>
                      <a href="http://localhost/php_challenge1_send_mail/index.php">Retour au formulaire</a>';
            setcookie("sent", "1", time() + 120);
        }
        else //affiche un message d'erreur si sa ne s'envoi pas
        {
            $alert = '<script>alert("Erreur d\'envoi de l\'e-mail")</script><br/>
                      <a href="http://localhost/php_challenge1_send_mail/index.php">Retour au formulaire</a>';
        }
        
        echo $alert;
  }
 ?>