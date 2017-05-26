<?php session_start(); 

            $conn = pg_pconnect("host =localhost port=5432 dbname=txupit user=postgres password=postgres");
    if (!$conn) {
      echo "Une erreur s'est produite.\n";
      exit;
          }
        
         
        $des=$_POST['desc'];
        $md=$_POST['nvmdp'];
        $tel=$_POST['tel'];
        $adr=$_POST['adresse'];
            
        if(!empty($_POST['desc'])){
    pg_query($conn, "update profil set description='{$des}' where cleprofil='{$_SESSION['id']}'");}
     
             if(!empty($_POST['nvmdp'])){
    pg_query($conn, "update profil set mdp='{$md}' where cleprofil='{$_SESSION['id']}'");
             }
            
                      if(!empty($_POST['adresse'])){
    pg_query($conn, "update profil set adresse='{$adr}' where cleprofil='{$_SESSION['id']}'");
             }
                      if(!empty($_POST['tel'])){
    pg_query($conn, "update profil set tel='{$tel}' where cleprofil='{$_SESSION['id']}'");
             }
echo '<script language="Javascript">
	<!--
	document.location.replace("http://localhost:8888/php/voiture.php");
	// -->
	</script>';
        
 ?>
            