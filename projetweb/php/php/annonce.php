<?php session_start(); ?>
<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="../css/annonce.css" />
            <link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" href="../css/jquery-ui.theme.css" />
<script type=text/javascript src="../jquery/jquery.js"></script>
<script type=text/javascript src="../jquery/jquery-ui.js"></script>
<script type=text/javascript src="../jquery/main.js"></script>
          <title> Txupit - Annonce </title>
        </head>
        <body>

            <header>
  <meta charset="utf-8">
        <nav>
                <ul>
                <li><a href="../php/deconnexion.php" id="l2"> Deconnexion </a></li>
                </ul>
            <H1> <a href="../php/Txupit.php">TXUPIT</a> </H1>
        </nav>


             </header>
                 <div id="co">
                      <p> Bonjour <?php session_start();
                          echo $_SESSION["name"]; ?></p>
            <ul>
                <li> <a href="../php/profil.php">Profil </a></li>
                <li><a href="../php/reservation.php"> Reservation </a></li>
                <li><a href="../php/annonce.php"> Annonce </a></li>
            </ul>
                     </div>

            <div id="container">
                <h2> CREEZ VOTRE ANNONCE </h2>
                <div id="separation"></div>
                <div id="container2">
                 <div class="z-field_spacer"></div>

            <form method="post" action="../php/annonce2.php">

            <div class="input">    <label>  Date Trajet </label>
            <input type="text" name="dtr" placeholder="01/05/2017" id="datepicker" ></div>
                     <div class="z-field_spacer"></div>
           <label>   Lieu de départ  </label>
            <input type="text" name="ldep" id="ldep" /> <br>
                     <div class="z-field_spacer"></div>
            <label>   Horaire départ  </label>
                    <input name="hd" type="number" min="0" max="23" value="0" step="1"/>
                    <label>Heure(s)</label>
                    <input name="md" type="number" min="0" max="59" value="0" step="1"/>
                    <label>Min(s) </label>
                    <div class="z-field_spacer"></div>
           <label> Lieu Arrivé </label> <input name="la" type="text" name="email"  id="email"/>
                    <div class="z-field_spacer"></div>
            <label> Horaire Arrivé </label> <input name="ha" type="number" min="0" max="23" value="0" step="1"/>
                    <label>Heure(s)</label>
           <input name="ma" type="number" min="0" max="59" value="0" step="1"/> <label>Min(s) </label>
                    <div class="z-field_spacer"></div>
          <label>Nombre de place(s) </label>  <input type="number" name="nbp" min="0" max="6" value="0" step="1"/>
                    <div class="z-field_spacer"></div>
                <input type="submit" value="Valider" />

            </form>
                </div>
             </div>
            <div class="spacer"></div>
            <div id="acontainer">
                <h2> ANNONCE EN COURS </h2>
                <div id="separation"></div>

                <?php 
               $conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }
                $z=pg_query($conn,"select * from trajet t,profil p, propose r where t.cletrajet=r.cletrajet and r.cleprofil=p.cleprofil and p.cleprofil='{$_SESSION['id']}' ");
                $x=pg_fetch_row($z);
                 $nbtraj = pg_num_rows($z);
                
            
               // echo $x[1]." ".$x[2]." ".$x[3];
                
                
                for($i=0;$i<$nbtraj;$i++)
                    {
                        echo"<tr> <input type='checkbox' name='x[]' value=".$x[0]." /> <label> $x[1] $x[2] $x[3] </label>   </tr>";
                        echo "<br><br>";
                       $x=pg_fetch_row($z);}
                
                    
 // "select * from voiture v, conduire c, profil p  where v.clevoit=c.clevoit and c.cleprofil=p.cleprofil and //p.cleprofil='{$_SESSION['id']}'");
                    
             ?>
                
                

                    <input type="submit" value="supprimer" />

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
