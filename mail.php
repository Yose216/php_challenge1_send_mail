<!DOCTYPE html>
    <html>

        <head>
            <title>Send a mail</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        </head>
        
        <body>
            <h1>Formulaire d'envoi de mail</h1>
            <form method="post">
                <label>Adresse : </label> 
				    <input type="mail" name="adresse" placeholder="example@example.com"/><br/>
                <label>objet : </label> 
				    <input type="texte" name="objet" placeholder="objet"/><br/>
                <br/><label>texte : </label> 
				    <textarea type="text" name="msg" maxlength="500" placeholder="Votre message!"></textarea><br/>
                <input type="submit" value ="Valider"/>
            </form>
            <?php 
                $to = $_POST['adresse'];
                $headers = 'From: Youness.chetoui@gmail.com' . "\r\n" .
                'Reply-To: no-reply@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
                $subject = $_POST['objet'];
                $message = $_POST['msg'];
                mail($to, $subject, $message, $headers);
           ?>
        </body>
    </html>