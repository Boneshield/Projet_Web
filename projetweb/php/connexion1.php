<?php
session_start();

$mail= $_POST["email"];
$mdp= $_POST["mdp"];

$_SESSION['mail'] = $_POST["email"];


    $conn = pg_pconnect("host =localhost port=5432 dbname=covoiturage user=php password=test");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }


    $resulta = pg_query($conn, "SELECT  * FROM profil where mdp='{$mdp}' and mail='{$mail}'");
    $raw = pg_fetch_row($resulta);
echo var_dump($raw);
   $name="$raw[2] $raw[1]";
    $id="$raw[0]";

$_SESSION['id']=$id;
 $_SESSION['name'] = $name;

$result = pg_query($conn, "SELECT  count (*) FROM profil where mdp='{$mdp}' and mail='{$mail}'");
    if (!$result) {
      echo "Une erreur s'est produite.\n";
      exit;}

$row = pg_fetch_row($result);
      echo "Redirection en cours";
   if($row[0] == 1){

echo '<script language="Javascript">
<!--
document.location.replace("http://127.0.0.1/projetweb/php/Txupitco.php");
// -->
</script>';
   }
else{
   '<script language="Javascript">
<!--
document.location.replace("http://127.0.0.1/projetweb/php/Connexion.php");
// -->
</script>';

}




?>
