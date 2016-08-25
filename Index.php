<!DOCTYPE html>
    <html>

        <head>
            <title>Send a mail</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="CSS/Styles.css">
        </head>
        
        <body>
            <h1 class="col-lg-offset-4">Formulaire d'envoi de mail</h1>
            
                <br/><form method="post" class="col-lg-offset-3">
                        <label>E-mail : </label> 
				            <input type="email" name="adresse" placeholder="example@example.com"/><br/>
                    <br/><label>Objet : </label> 
				            <input type="texte" name="objet" placeholder="objet"/><br/>
                    <br/><label>Texte : </label><br/> 
				            <textarea type="text" name="msg" maxlength="500" placeholder="Votre message!" rows="8" cols="60"></textarea><br/>
                    <br/><button class="btn btn-success col-lg-2 col-lg-offset-2" type="submit" value ="Valider">Envoi</button>
                    </form>
            <?php include("Mail.php") ?>
            
        </body>
    </html>