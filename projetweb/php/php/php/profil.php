<?php session_start();

$conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }

$result = pg_query($conn, "SELECT cletrajet FROM reservation WHERE cleprofil='{$_SESSION["id"]}'");

$raw = pg_fetch_row($result);

$trajet = pg_query($conn, "SELECT * FROM trajet WHERE cletrajet={$raw[0]}");

$i = 0;

while($actuel = pg_fetch_object($trajet)){
      $tab[$i] = array(
                "cletrajet" => $actuel->cletrajet,
                "addressedepart" => $actuel->adressedepart,
                "addressearrivee" => $actuel->adressearrivee,
                "jourdepart" => $actuel->jourdepart,
                "heuredepart" => $actuel->heuredepart,
                "heurearrivee" => $actuel->heurearrivee,
                "nbplacesdispo" => $actuel->nbplacesdispo,
                "nbreservation" => $actuel->nbreservation
               );
        $i++;

}

?>
<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="../css/profil.css" />
          <title> Txupit - Profil </title>
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

                 <div id="co">
                      <p> Bonjour <?php
                          echo $_SESSION["name"];

                ?></p>
            <ul>
                <li> <a href="../php/profil.php">Profil </a></li>
                <li><a href="../php/reservation.php"> Reservation </a></li>
                <li><a href="../php/annonce.php"> Annonce </a></li>
            </ul>
                     </div>

            <div id="container">
                <div id="container2">
                </div>
             </div>
            <div id="acontainer">
                <h2> Description : </h2>
                <div id="separation"></div>
                
             <?php 
                $id=$_SESSION['id'];
                $aq=pg_query($conn,"select description from profil where cleprofil= '{$id}'");
                $o=pg_fetch_row($aq);
                echo $o[0];
            
                ?>
            </div>

            <div id="bcontainer">
            <h3> Dernier Trajet :</h3>
            <div id="separation"></div>
                <p>
                <?php

                   foreach($tab as $value){

                         echo
                     $value["addressedepart"]." ".$value["addressearrivee"]." ".$value["jourdepart"]." ".$value["heuredepart"]." ".$value["heurearrivee"];


                    }

                ?>
                </p>
            </div>

            <div id="bpage">
            <ul>
                
           <li> <a href="../php/modifprofil.php"> Modifier profil</a> </li>
           <li> <a href="../php/voiture.php"> Voiture </a></li>
            </ul>


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
