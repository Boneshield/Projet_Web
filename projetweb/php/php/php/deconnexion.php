<html>
<title>deconnexion</title>
<?php
session_start();
//détruire une session : se déconnecter
echo "<br>";
if (session_destroy())
{
    echo 'Session détruite !';
    echo '<script language="Javascript">
  	<!--
  	document.location.replace("http://localhost:8888/php/Connexion.php");
  	// -->
  	</script>';
}
else
{
    echo 'Erreur : impossible de détruire la session !';
}
exit();
?>
