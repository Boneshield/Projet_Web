<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="UTF-8" />
<link rel="stylesheet" href="/css/txupit1.css" /> 
<link rel="stylesheet" href="/css/jquery-ui.css" /> 
<link rel="stylesheet" href="/css/jquery-ui.theme.css" /> 
<script type=text/javascript src="/jquery/jquery.js"></script>
<script type=text/javascript src="/jquery/jquery-ui.js"></script>
<script type=text/javascript src="/jquery/main.js"></script>
                  <title> Txupit </title>
        </head>
        <body>
            
            <header>
 
        <nav>
                <ul>
                <li ><a href="/php/annonce.php" id="a1"> Proposer un trajet </a></li>
                <li><a href="/php/inscirption.php" id="l1"> Inscription </a></li>
                <li><a href="/php/Connexion.php" id="l2"> Connexion </a></li>
                </ul>
            <H1> <a href="/php/Txupit.php">TXUPIT</a> </H1>  
        </nav> 
             </header>
            <article>
            <div id="img1">
            <h1> Selectionnez votre trajet </h1>
            <p> BONNE ROUTE !</p>
            
                <form method="post" action="traitement.php">
                 
                <div class="c"> <input type="text" name="lieu départ" placeholder ="Lieu départ" /> </div>
                 <div class="c">   <input type="text" name="lieu arrivé " placeholder="Lieu arrivé" /></div>
                 <div class="c">   <input type="text" name="lieu départ" placeholder="ex:01/10/17" id="datepicker" /></div>
                <a href="#" id="a2"> Rechercher </a>
                </form>
            </div>
                     
            </article>
            <footer>
            <ul>
                <li ><a href="#" > A PROPOS DE TXUPIT </a></li>
                <li><a href="#" > NOUS CONTACTER </a></li>
                <li><a href="#" > CGU </a></li>
                </ul>
            </footer>
        </body>