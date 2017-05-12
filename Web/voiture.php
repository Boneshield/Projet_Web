<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="/css/voiture.css" /> 
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
            <p> Bonjour "nom utilisateur"</p>   
                 <div id="co">    
                      <p> Bonjour <?php session_start();
                          echo $_SESSION["name"]; ?></p>
            <ul>
                <li> <a href="/html/profil.html">Profil </a></li>
                <li><a href=""> Reservation </a></li>
                <li><a href=""> Annonce </a></li>
            </ul>
                     </div>
            
            <div id="container">
                <h2> Voiture </h2>
                <div id="separation"></div>
           
                <table>
                <tr> <input type="checkbox" name="v1"/> <label>Audi R6 </label>   </tr>
                     <div class="z-field_spacer"></div>
                <tr> <input type="checkbox" name="v2"/> <label>Fiat 500 </label>   </tr>
                     <div class="z-field_spacer"></div>
                </table> 
                
                <input type="submit" value="supprimer" />
             </div>
            
            
            <div id="acontainer">
                <h2> Ajouter une voiture </h2>
                <div id="separation"></div>
            <label> Marque </label><input type="text" name="marque"/>
                <div class="z-field_spacer"></div>
          <label>   Modele</label> <input type="text" name="modele"/>
                <div class="z-field_spacer"></div>
          <label>   Nombre de bagage(s)</label> <input type="number" min="1" max="10" name="bagage"/>
                <div class="z-field_spacer"></div>
           <label> Nombre de place(s) </label><input type="number" min="1" max="4" name="place"/>    
                    <input type="submit" value="Ajouter" />

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
        