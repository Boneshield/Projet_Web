<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="../css/inscription.css" />
          <title> Txupit - Inscription </title>
        </head>
        <body>

            <header>

        <nav>
                <ul>
                <li><a href="../php/Connexion.php" id="l2"> Connexion </a></li>
                </ul>
            <H1> <a href="../php/Txupit.php">TXUPIT</a> </H1>
        </nav>
               
                 

             </header>

            <div id="container">
                <h2> INSCRIVEZ-VOUS</h2>
                <div id="separation"></div>
                <div id="container2">
                    <form method="post" action="../php/inscription1.php">
                 Homme <input type="radio" name="sexe" value="homme"> Femme <input type ="radio" name ="sexe" value="femme">
                <div class="z-field_spacer"></div>
                   Nom <input type="texte" name="nom"> Prenom <input type ="texte" name ="prenom">
                 <div class="z-field_spacer"></div>
            <div class="input">    <label>  Numero etudiant </label>
            <input type="text" name="numetu" placeholder="ex:Damien" ></div>
                     <div class="z-field_spacer"></div>
           <label>   Mot de passe  </label>
            <input type="password" name="mdp" id="mdp" /> <br>
                     <div class="z-field_spacer"></div>
            <label>   Confirmation du mot de passe  </label>
            <input type="password" name="mdp2"  id="mdp2"/> <div id="mdp22" >Mot de passe différent</div>
                    <div class="z-field_spacer"></div>
           <label> Email </label> <input type="mail" name="adrm" id="email"/>
                    <div class="z-field_spacer"></div>
            <label> Date de naissance </label> <input type="text" name="naiss"  id="datenaiss"/>
                    <div class="z-field_spacer"></div>
                    <input type="submit" value="Inscription" />
                    </form>
                </div>
             </div>
            <footer>
            <ul>
               <li ><a href="../php/apropose.php" > A PROPOS DE TXUPIT </a></li>
                <li><a href="../php/Contact.php" > NOUS CONTACTER </a></li>
                <li><a href="../php/CGU.php" > CGU </a></li>
                </ul>
            </footer>
        </body>

       
        <script src="../jquery/jquery.js"></script>
        
        <script>
        //permet d'afficher du texte en fonction de la différence entre les champs des
        //mots de passes. Les fonctions s'execute lorsque la souris sort du champ
        //de remplissage. Le texte est caché de base si les conditions de différences sont remplies le texte s'affiche
        // message d'erreur  
       $("#mdp22").hide();
       $("#mdp2").mouseout(function(event){
             if($("#mdp").val() != $("#mdp2").val())
            {
                $("#mdp22").show();
                 $("#mdp2").css("backgroundColor", "#ff123f");

            }else{
                $("#mdp22").hide();
                $("#mdp2").css("backgroundColor", "#ffffff");

            }

       })

        </script>
