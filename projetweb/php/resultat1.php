 <?php
session_start();
echo var_dump($_SESSION);
$conn = pg_pconnect("host =localhost port=5432 dbname=covoiturage user=php password=test");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
    }


         if(isset($_POST['result'])){
            $modifplace = $_POST['result'] - 1 ;

            pg_query($conn, "UPDATE trajet SET nbplacesdispo = {$modifplace} WHERE cletrajet ={$_POST["cle"]}");
            pg_query($conn, "Insert into reservation (cleprofil,cletrajet) values ('{$_SESSION["id"]}',{$_POST["cle"]})");
            }


echo '<script language="Javascript">
<!--
document.location.replace("http://127.0.0.1/php/profil.php");
// -->
</script>';
    ?>
