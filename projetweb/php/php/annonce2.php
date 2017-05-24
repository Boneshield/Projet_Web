
<?php session_start();
$conn=pg_connect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
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


pg_query($conn,"insert into trajet (adressedepart,adressearrivee,jourdepart,heuredepart,heurearrivee,nbplacesdispo) values (upper('{$lieudep}') , upper('{$lieuarr}') , '{$datetrj}' , '{$hhd}' , '{$hha}' , '{$nbp}') ");

$ak=pg_query($conn,"select cletrajet from trajet where adressedepart='{$lieudep}' and adressearrivee='{$lieuarr}' and jourdepart='{$datetrj}' and heuredepart='{$hhd}' and heurearrivee='{$hha}'");

echo '<br>';
echo $ak;
echo '<br>';

echo '<br>';

$a=pg_fetch_row($ak);

echo $a[0];



pg_query($conn,"insert into propose (cleprofil,cletrajet) values ('{$_SESSION['id']}','{$a[0]}') ");


echo '<script language="Javascript">
<!--
document.location.replace("http://localhost:8888/php/annonce.php");
// -->
</script>';

?>

