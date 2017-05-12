<?php
$conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }

$depart=$_POST["dep"];
$arrivee=$_POST["ar"];
$date=$_POST["date"];

echo $date;

echo $depart;
echo $arrivee;

//$result = pg_query($conn, "select * from trajet where adressedepart='{$depart}' and adressearrivee='{$arrivee}'");
//$result = pg_query($conn, "SELECT DISTINCT * FROM trajet WHERE adressedepart='{$depart}' AND adressearrivee='{$arrivee}';");
$result = pg_query($conn, "select * from trajet where adressedepart = 'Toulouse' and adressearrivee = 'Agen' and jourdepart='01/07/2017' ");

echo pg_num_rows($result);


$i=0;

while($actuel = pg_fetch_object($result)){
    $tab[$i] = array(
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





    foreach($tab as $id=>$value){

        echo '<div id="container"> 
                    <div class="z-field_spacer"></div>
                Adresse départ : '.$value["addressedepart"].' <br>
                      <div class="z-field_spacer"></div>
               <ul><li> Adresse arrivée : '.$value["addressearrivee"].' </li><br>
                      <div class="z-field_spacer"></div>
                    <li>  <a href="#" class="Button">Réserver</a></li> <ul>
                Date : '.$value["jourdepart"].'<br>
                      <div class="z-field_spacer"></div>
                Nombre de places disponibles :'.$value["nbplacesdispo"].' 
                      <div class="z-field_spacer"></div>
                      <a href="#" class="Button">Réserver</a>
                </div>';
    }





?>