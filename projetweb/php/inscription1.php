<?php

$conn=pg_connect("host=localhost port=5432 dbname=covoiturage user=php password=test");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }


$sexe=$_POST["sexe"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$numetu=$_POST["numetu"];
$mdp=$_POST["mdp"];
$naissance=$_POST["naiss"];
$mail=$_POST["adrm"];
echo $mail;


pg_query($conn,"insert into profil (nom,prenom,numetu,mdp,datenaissance,mail,sexe) values ('{$nom}','{$prenom}','{$numetu}' ,'{$mdp}' , '{$naissance}','{$mail}','{$sexe}')");


echo '<script language="Javascript">
<!--
document.location.replace("http://127.0.0.1/projetweb/php/Connexion.php");
// -->
</script>';
?>
