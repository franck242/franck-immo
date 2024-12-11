
<!Doctype HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/liste-appartements.css" />
    <script type="text/javascript" src="dashbord.js"></script>
</head>


<body>

    <div id="main">

    <?php
   
require_once("menu.php");




if (isset($_POST['delete_id'])) {
    $id_appartement = $_POST['delete_id'];

    // Effectuez les opérations de suppression de l'appartement avec l'ID spécifié
    // Remplacez ce bloc de code par la logique de suppression réelle de l'appartement dans votre application

    // Exemple de suppression factice
    // require("connexion-bdd.php");
    // $requete = $connexion->prepare("DELETE FROM appartements WHERE Id_appartements = :id");
    // $requete->bindParam(':id', $id_appartement);
    // $requete->execute();
} 

   ?>

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">☰ Menu</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">☰ Menu</span>
            </div>

            <div class="col-div-6">
                <!-- <div class="profile">

            <img src="images/user.png" class="pro-img" />
            <p>Manoj Adhikari <span>UI / UX DESIGNER</span></p>
        </div> -->
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />

        <div class="col-div-3">
            <div class="box">
                <p>6<br /><span>Appartements</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>88<br /><span>Clients</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>99<br /><span>Orders</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>78<br /><span>Tasks</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />

        <!-- impotation images de bdd -->

        <?php

        ?>

        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Liste Appartements </p>
                    <br />

                    <table>
                        <tr>
                            <th>Photos</th>
                            <th>Categorie</th>
                            <th>Superficie</th>
                            <th>Lits</th>
                            <th>Salle de bains</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Adresse</th>
                            <th>ville</th>
                            <th>Pays</th>
                            <th>Actions</th> <!-- Nouvelle colonne -->
                        </tr>

                        <?php
                        require("connexion-bdd.php");
                        $requete = $connexion->prepare("SELECT * FROM appartements");
                        $requete->execute();
                        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
                        

                        // vérifier les données existant dans un tableau associatif
                        if (is_array($resultat) && count($resultat) > 0) {

                            foreach ($resultat as $elt)  {    ?>
                                <tr>
<!-- j'affiche l'image correspondant a l'appartement en question -->
<!-- e code $resultat as $elt est utilisé dans une boucle pour parcourir les éléments du tableau $resultat. Chaque élément du tableau est temporairement assigné à la variable $elt lors de chaque itération de la boucle.

En d'autres termes, le code $resultat as $elt permet de parcourir chaque élément du tableau $resultat un par un et d'effectuer des opérations spécifiques sur chaque élément à l'intérieur de la boucle. La variable $elt peut être utilisée à l'intérieur de la boucle pour accéder aux valeurs de chaque élément du tableau. -->
                                    <td> <?php
                                        $id_appartement = $elt['Id_appartements'];
                                        echo " <a href='modifier-appartements.php?apt=$id_appartement'><img src='uploads-images/" 
                                        . $elt['photos'] . "' alt=''></a>"; ?></td>

                                    <td><?php echo $elt['categorie']; ?></td>
                                    <td><?php echo $elt['superficie']; ?></td>
                                    <td><?php echo $elt['lits']; ?></td>
                                    <td><?php echo $elt['salle_de_bains']; ?></td>
                                    <td>
                                        <?php 
                                    if( $elt['status']==0){
                                        echo"libre";
                                        
                                    }elseif($elt['status']==1){
                                        echo"louer";

                                    }else{
                                        echo"travaux";
                                    }
                                         ?>
                                    </td>
                                    <td><?php echo $elt['description']; ?></td>
                                    <th><?php echo $elt['prix']; ?></th>
                                    <td><?php echo $elt['adresse']; ?></td>
                                    <td><?php echo $elt['ville']; ?></td>
                                    <td><?php echo $elt['pays']; ?></td>
                                    <td> <!-- Nouvelle colonne -->
                                        <form method="post" action="supprimer-appartements.php"> <!-- L'action est définie dans un fichier supprimer-appartement.php -->
                                            <input type="hidden" name="id_appartement" value="<?php echo $id_appartement; ?>"> <!-- Champ caché pour stocker l'ID de l'appartement -->
                                            <input type="submit" value="Supprimer"> <!-- Bouton de soumission pour supprimer l'appartement -->
                                        </form>
                                    </td>
                                </tr>

                            <?php  }


                        } else {
                            echo "<tr> <td colspan=7> aucune donnée dans la base données </td></tr> ";
                        }

                        ?>



                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Total Sale <span>Sell All</span></p>

                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 70% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="clearfix"></div>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(".nav").click(function () {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".prenom").css('visibility', 'hidden');
            $(".prenom span").css('visibility', 'visible');
            $(".prenom span").css('margin-left', '-10px');
            $(".menu-a").css('visibility', 'hidden');
            $(".menu").css('visibility', 'visible');
            $(".menu").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });

        $(".nav2").click(function () {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".prenom").css('visibility', 'visible');
            $(".menu-a").css('visibility', 'visible');
            $(".menu").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });

    </script>

</body>

</html>
