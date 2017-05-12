<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="/css/connexion.css" /> 
          <title> Txupit - Connexion </title>
        </head>
        <body>
            
            <header>
 
        <nav>
                <ul>
                <li><a href="/php/inscirption.php" id="l1"> Inscription </a></li>
                <li><a href="/php/Connexion.php" id="l2"> Connexion </a></li>
                </ul>
            <H1> <a href="/php/Txupit.php">TXUPIT</a> </H1>  
        </nav> 
             </header>
            
            <div id="container">
                <h2> CONNECTEZ-VOUS</h2>
                <div id="separation"></div>
            <form action="/php/connexion1.php" method="post">
            <div class="input" name="mail">    <label>  Adresse Mail </label>  <br>
                <div class="z-field_spacer"></div>
            <input type="text" name="email" placeholder="ex:Damso"></div>  <br>
                <div class="z-field_spacer"></div>
            <div class="input" name="mdp">    <label>   Mot de passe  </label>  <br>
            <input type="password" name="mdp" /> </div><br>
                 <div class="z-button_background"></div>
                 <input type="submit" value="Connexion" />
                </form>
            </div>
            
            <footer>
            <ul>
                <li ><a href="#" > A PROPOS DE TXUPIT </a></li>
                <li><a href="#" > NOUS CONTACTER </a></li>
                <li><a href="#" > CGU </a></li>
                </ul>
            </footer>
        </body>