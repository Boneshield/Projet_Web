<!DOCTYPE html>
<?php
$conn = pg_pconnect("host =localhost port=5432 dbname=covoiturage user=php password=test");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }

if(empty($_POST["dep"]) || empty($_POST["ar"]) || empty($_POST["date"]))
{
  echo '<script language="Javascript">
	<!--
	document.location.replace("http://127.0.0.1/projetweb/php/Txupitco.php");
	// -->
	</script>';
}

$depart=$_POST["dep"];
$arrivee=$_POST["ar"];
$date=$_POST["date"];

echo $depart;
echo $arrivee;

//$result = pg_query($conn, "select * from trajet where adressedepart='{$depart}' and adressearrivee='{$arrivee}'");
$result = pg_query($conn, "select distinct * from trajet where adressedepart=upper('{$depart}') and adressearrivee=upper('{$arrivee}') and jourdepart='{$date}'");


$i=0;

while($actuel = pg_fetch_object($result)){
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

pg_free_result($result) ;
?>

	<html lang="fr">
		<head>
			<meta charset="UTF-8" />
<link rel="stylesheet" href="../css/txupit11.css" />

                  <title> Txupit </title>
        </head>
        <body>

            <header>

        <nav>
                <ul>
                <li ><a href="../php/annonce.php" id="a1"> Proposer un trajet </a></li>
                <li><a href="../php/inscirption.php" id="l1"> Inscription </a></li>
                <li><a href="../php/Connexion.php" id="l2"> Connexion </a></li>
                </ul>
            <H1> <a href="../php/Txupit.php">TXUPIT</a> </H1>
        </nav>
             </header>

             <div class="h-field_spacer"></div>
    <?php

        foreach($tab as $id=>$value){
            if($value["nbplacesdispo"] > 0){
                echo '
                <div id="container">
                <form method="post" action="resultat1.php">
                            <div class="z-field_spacer"></div>
                        Adresse départ : '.$value["addressedepart"].' <br>
                              <div class="z-field_spacer"></div>
                         Adresse arrivée : '.$value["addressearrivee"].' <br>
                              <div class="z-field_spacer"></div>
                        Date : '.$value["jourdepart"].'<br>
                              <div class="z-field_spacer"></div>
                        Nombre de places disponibles :'.$value["nbplacesdispo"].'
                              <div class="z-field_spacer"></div>
                              <input type="hidden" name="result" value="'.$value["nbplacesdispo"].'">
                              <input type="hidden" name="cle" value="'.$value["cletrajet"].'">
                              <input type="submit" value="Réserver"></a>
                              </form>
                        </div>';
            }
        }
    ?>

            <footer>
            <ul>

                <li ><a href="#" > A PROPOS DE TXUPIT </a></li>
                <li><a href="#" > NOUS CONTACTER </a></li>
                <li><a href="#" > CGU </a></li>
                </ul>
            </footer>
        </body>
