<?php
session_start();
$conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }
if(isset($_POST['x']))
{
    $x=$_POST['x'];
    echo $voit[0];
    $query="DELETE FROM propose p WHERE p.cleprofil=".$_SESSION['id']." and p.clevoit=".$x[0]."";
    pg_query($conn, $query);
}

pg_close($conn);
echo '<script language="Javascript">
	<!--
	document.location.replace("http://localhost:8888/php/voiture.php");
	// -->
	</script>';

?>