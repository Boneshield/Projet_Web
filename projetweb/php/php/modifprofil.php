<?php session_start(); ?>
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
            <p></p>   
                 <div id="co">    
                      <p>  Bonjour <?php 
                          echo $_SESSION["name"]; ?></p>
            <ul>
                <li> <a href="../php/profil.php">Profil </a></li>
                <li><a href="../php/reservation.php"> Reservation </a></li>
                <li><a href="../php/annonce.php"> Annonce </a></li>
            </ul>
                     </div>
            
             <input class="champ" type="text"> 
            <div id="container">
                <div id="container2">
                 <p> Ajouter une photo : </p>
                 <input type="file" name="photo"/>

                </div>
             </div>
            <form method="post" action="modifprofil.php">
            <div id="acontainer">
                <h2> Description : </h2>
                <div id="separation"></div> 
                <textarea name="desc"></textarea>
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
           <li> <input type="submit"  name="eng" value="Enregistrer" id="submit">  </li>
           <li> <a href="../php/voiture.php" class="eg" name="voiture"> Voiture </a></li>
            </ul>
                
            </div>
                </form>
            
            
            <?php 
            $conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
          }
        
         
        $des=$_POST['desc'];
        $md=$_POST['nvmdp'];
        $tel=$_POST['tel'];
        $adr=$_POST['adresse'];
            
        if(!empty($_POST['desc'])){
    pg_query($conn, "update profil set description='{$des}' where cleprofil='{$_SESSION['id']}'");}
     
             if(!empty($_POST['nvmdp'])){
    pg_query($conn, "update profil set mdp='{$md}' where cleprofil='{$_SESSION['id']}'");
             }
            
                      if(!empty($_POST['adresse'])){
    pg_query($conn, "update profil set adresse='{$adr}' where cleprofil='{$_SESSION['id']}'");
             }
                      if(!empty($_POST['tel'])){
    pg_query($conn, "update profil set tel='{$tel}' where cleprofil='{$_SESSION['id']}'");
             } ?>
            

            
            

            
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
        