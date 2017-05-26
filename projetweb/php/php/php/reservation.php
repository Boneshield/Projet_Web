<!DOCTYPE html>
	<html lang="fr">
        <head>
            <link rel="stylesheet" href="../css/reservation.css" />
          <title> Txupit - Reservation </title>
        </head>
        <body>

            <header>

        <nav>
                <ul>
                <li><a href="" id="l2"> Deconnexion </a></li>
                </ul>
            <H1> <a href="../php/Txupit.php">TXUPIT</a> </H1>
        </nav>


             </header>
                 <div id="co">
                      <p> Bonjour <?php session_start();
                          echo $_SESSION["name"]; ?> </p>
            <ul>
                <li> <a href="../php/profil.php">Profil </a></li>
                <li><a href="../php/reservation.php"> Reservation </a></li>
                <li><a href="../php/annonce.php"> Annonce </a></li>
            </ul>
                     </div>

            <div id="container">
            <H2> Trajet Reservé </H2>
            <div id="separation"></div>

            </div>

               <footer>
            <ul>
                <li ><a href="../php/apropose.php" > A PROPOS DE TXUPIT </a></li>
                <li><a href="../php/Contact.php" > NOUS CONTACTER </a></li>
                <li><a href="../php/CGU.php" > CGU </a></li>s
                </ul>
            </footer>
        </body>
</html>
