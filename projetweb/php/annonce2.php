
<?php
$conn=pg_connect("host=localhost port=5432 dbname=covoiturage user=php password=test");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }

$datetrj=$_POST["dtr"];
$lieudep=$_POST["ldep"];
$hd=$_POST["hd"];
$md=$_POST["md"];
$hhd=$hd.":".$md;
echo $hhd;
$lieuarr=$_POST["la"];
$ha=$_POST["ha"];
$ma=$_POST["ma"];
$hha=$ha.":".$ma;
$nbp=$_POST["nbp"];


 $_SESSION["depart"] = $lieudep;
 $_SESSION["arrivee"] = $lieuarr;
 $_SESSION["hdep"] = $hhd;
 $_SESSION["har"] = $hha;
 $_SESSION["date"] = $datetrj;


//pg_query($conn,"insert into trajet (adressedepart,adressarrivee,jourdepart,heuredepart,heurearrivee,nbplacesdispo) values '$lieudep','$lieuarr,'$datetrj','$hhd','$hha','$nbp'");


pg_query($conn,"insert into trajet (cletrajet,adressedepart,adressearrivee,jourdepart,heuredepart,heurearrivee,nbplacesdispo) values (upper('{$lieudep}') , upper('{$lieuarr}') , '{$datetrj}' , '{$hhd}' , '{$hha}' , '{$nbp}') ");


echo '<script language="Javascript">
<!--
document.location.replace("http://127.0.0.1/projetweb/php/annonce.php");
// -->
</script>';

?>
