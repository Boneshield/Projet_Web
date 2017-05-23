<?php
session_start();
$conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }
if(isset($_POST['voit']))
{
    $voit=$_POST['voit'];
    echo $voit[0];
    $query="DELETE FROM conduire c WHERE c.cleprofil=".$_SESSION['id']." and c.clevoit=".$voit[0]."";
    pg_query($conn, $query);
}

pg_close($conn);
echo '<script language="Javascript">
	<!--
	document.location.replace("http://localhost:8888/php/voiture.php");
	// -->
	</script>';

?>