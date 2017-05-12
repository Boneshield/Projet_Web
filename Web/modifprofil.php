<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="/css/modifprofil.css" /> 
          <title> Txupit - Connexion </title>
        </head>
        <body>
            
            <header>
 
        <nav>
                <ul>
                <li><a href="" id="l2"> Deconnexion </a></li>
                </ul>
            <H1> <a href="/php/Txupit.php">TXUPIT</a> </H1> 
        </nav> 
            
            
             </header>
            <p> Bonjour <?php session_start();
                          echo $_SESSION["name"]; ?></p>   
                 <div id="co">    
                      <p> Bonjour "nom utilisateur"</p>
            <ul>
                <li> <a href="">Profil </a></li>
                <li><a href=""> Reservation </a></li>
                <li><a href=""> Annonce </a></li>
            </ul>
                     </div>
            
             <input class="champ" type="text"> 
            <div id="container">
                <div id="container2">
                 <p> Ajouter une photo : </p>
                 <input type="file" name="photo"/>

                </div>
             </div>
            <div id="acontainer">
                <h2> Description : </h2>
                <div id="separation"></div> 
                <textarea></textarea>
            </div>
            
            <div id="bcontainer">
             <h2> Informations </h2>
                <div id="separation"></div>
                <div id="dcontainer">   
            Email <input type="text" name="email"> 
                <div class="z-field_spacer"> </div>
            Téléphone  <input type="text" name="tel"> 
                <div class="z-field_spacer"> </div>
                </div>
            <div id="ccontainer">
            Adresse <input type="text" name="adresse">
            <div class="z-field_spacer" > </div>
            Nouveau mot de passe <input type="text" name="nvmdp">
                <div class="z-field_spacer" > </div>
            </div> 
            </div>
            
            <div id="bpage">
            <ul>
           <li> <input type="submit"  name="eng" value="Enregistrer">  </li>
           <li> <a href="#" class="eg" name="voiture"> Voiture </a></li>
            </ul>
            </div>
            <footer>
            <ul>
                <li ><a href="#" > A PROPOS DE TXUPIT </a></li>
                <li><a href="#" > NOUS CONTACTER </a></li>
                <li><a href="#" > CGU </a></li>
                </ul>
            </footer>
        </body>
        
        <script src="/jquery/jquery.js"></script>
        <script>
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
        