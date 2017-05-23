<?php session_start(); 

$conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }
$result = pg_query($conn, "select clevoit from voiture ");
$row = pg_fetch_row($result);
echo $row[0];
$_SESSION['idvoit']=$row[0];

?>
<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="../css/voiture.css" /> 
          <title> Txupit - Connexion </title>
        </head>
        <body>
            
            <header>
 
        <nav>
                <ul>
                <li><a href="" id="l2"> Deconnexion </a></li>
                </ul>
            <H1> <a href="../php/Txupit.php">TXUPIT</a> </H1> 
        </nav> 
            
            
             </header>
            <p> Bonjour "nom utilisateur"</p>   
                 <div id="co">    
                      <p> Bonjour <?php session_start();
                          echo $_SESSION["name"]; ?></p>
            <ul>
                <li> <a href="../php/profil.php">Profil </a></li>
                <li><a href=""> Reservation </a></li>
                <li><a href=""> Annonce </a></li>
            </ul>
                     </div>
            
            <div id="container">
                <h2> Voiture </h2>
                <div id="separation"></div>
           
                <table>
                        <?php
        $modele = $_POST['modele'];
        $places = $_POST['place'];
        $marque = $_POST['marque'];
        $nbb = $_POST['bagage'];

                    
        if(isset($_POST['Ajouter']))
        {
            pg_query($conn, "insert into voiture (modele,places,marque,nbbaggage) values('{$modele}','{$places}','{$marque}','{$nbb}') ");
        }
        $aa= pg_query($conn, "select clevoit from voiture where modele='{$modele}'");
        $clv = pg_fetch_row($aa);
        pg_query($conn, "insert into conduire (cleprofil,clevoit) values ('{$_SESSION['id']}','{$clv[0]}')");
       
    
        $vv=pg_query($conn, "select * from voiture v, conduire c, profil p  where v.clevoit=c.clevoit and c.cleprofil=p.cleprofil and p.cleprofil='{$_SESSION['id']}'");
        $voit=pg_fetch_row($vv);
        $nbvoit = pg_num_rows($vv);
        echo "Vous avez $nbvoit voitures : ";
        //select * from voiture v, conduire c, profil p  where v.clevoit=c.clevoit and c.cleprofil=p.cleprofil;
        ?>
                     <div class="z-field_spacer"></div>
                
                <form method="post" action="../php/deletevoiture.php">
                    <?php
                    for($i=0;$i<$nbvoit;$i++)
                    {
                        echo"<tr> <input type='checkbox' name='voit[]' value=".$voit[0]." /> <label> $voit[3] $voit[1] </label>   </tr>";
                        echo "<br><br>";
                        $voit=pg_fetch_row($vv);
                    } ?>
                    <div class="z-field_spacer"></div>
                <input type="submit" value="supprimer" />
                    </form> 
                    </table> 
             </div>
                
            
            <div id="acontainer">
                  <form method="post" action="../php/voiture.php">
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
        
   
        
        
        <script src="../jquery/jquery.js"></script>
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
        