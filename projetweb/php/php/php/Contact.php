<!DOCTYPE html>
<?php session_start();  ?>
	<html lang="fr">
		<head>
			<meta charset="UTF-8" />
<link rel="stylesheet" href="/css/contact.css" /> 

                  <title> Txupit </title>
        </head>
        <body>
            
            <header>
 
        <nav>
                <ul>
                <li><a href="/php/Txupit.php" id="l2"> Deconnexion </a></li>
                </ul>
            <H1> <a href="/php/Txupit.php">TXUPIT</a> </H1>  
        </nav> 
             </header>
        
            
<form action="Contact.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" />
    </div>
    <div>
        <p> Mail  :   <?php echo $_SESSION['mail']; ?> </p>
       
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="msg" id="message"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>    
<?php

$mail = 'admintxupit@gmail.com'; // Déclaration de l'adresse de destination.

//=====Déclaration des messages au format texte et au format HTML.

$message = $_POST['msg'];
$mail=$_SESSION['mail'];

//==========
//=====Création de la boundary

$boundary = "-----=".md5(rand());

//==========

//=====Définition du sujet.

$sujet = "Txupit Contact";

//=========

//=====Création du header de l'e-mail.

$header = "From: \"WeaponsB\"<.$mail.>".$passage_ligne;

$header.= "Reply-to: \"WeaponsB\" <admintxupit@gmail.com>".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

 

//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;


 

//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);

//==========

?>
            
            
     
            
            
            <footer>
            <ul>
                <li ><a href="../php/apropose.php" > A PROPOS DE TXUPIT </a></li>
                <li><a href="../php/Contact.php" > NOUS CONTACTER </a></li>
                <li><a href="../php/CGU.php" > CGU </a></li>
                </ul>
                
            </footer>
        </body>