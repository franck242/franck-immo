<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="css/liste-appartements.css" />
    <script type="text/javascript" src="dashbord.js"></script>

</head>


<?php


require_once("authentification.php");
forcerUtilisateurConnecte();
$account_admin = $_SESSION['admin'];



?>
<body>

    <div id="mySidenav" class="sidenav">
        <p class="prenom"><span></span>
            <?php echo $account_admin['firstname']; ?>
        </p>
        <a href="dashbord.php" class="menu-a">Dashboard</a>
        <a href="liste-appartements.php" class="menu-a"> Liste des appartements</a>
        <a href="ajouter-appartements.php" class="menu-a"><i class="fa fa-users icons"></i> Ajouter un appartement</a>
        <a href="liste-demande-location.php" class="menu-a"><i class="fa fa-users icons"></i> liste demande location</a>
        <a href="logout.php" class="menu-a"><i class="fa fa-tasks icons"></i> Deconnexion</a>
       
    </div>

  
</body>
</html>