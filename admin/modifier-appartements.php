<?
require("authentification.php");
// forcerUtilisateurConnecte();
  require_once ("menu.php"); 


?>

<!Doctype HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/ajouter-appartements.css" />
    <script type="text/javascript" src="dashbord.js"></script>
</head>


<body>



 
   
   
   
    <div id="main">

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

<?php 

// Vérifier si l'ID de l'appartement est fourni dans l'URL
if (isset($_GET['apt'])) {
    $id_appartement = $_GET['apt'];


/*Dans ce code , j'ai fait une requête en utilisant un paramètre de liaison "?"
 à la place de l'insertion directe de la variable $id_appartement dans la requête.
 Ensuite, j'ai passé la valeur de $id_appartement à la méthode execute() en utilisant
 un tableau [ $id_appartement ]. Cela protège ma requête contre les attaques par injection SQL.*/ 

require_once("connexion-bdd.php");
$requete = $connexion->prepare("SELECT * FROM appartements  WHERE Id_appartements = ?  ");
$requete->execute([$id_appartement]);
$resultat = $requete->fetch(PDO::FETCH_ASSOC);


if (!empty($resultat)){ 
 $photos = $resultat['photos'];
 $categorie = $resultat['categorie'];
 $superficie = $resultat['superficie'];
 $lits= $resultat['lits'];
 $salle_de_bains = $resultat['salle_de_bains'];
 $status = $resultat['status'];
 $prix = $resultat['prix'];
 $adresse = $resultat['adresse'];
 $ville = $resultat['ville'];
 $pays = $resultat['pays'];

}else{
    echo "Aucun résultat n'a été trouvé pour cet appartement.";
}
}
?>
      <div class="container">
    <h2>Modifier un appartement</h2>

    <form action="traitement-modifier-appartements.php?apt=<?php echo $id_appartement; ?>" enctype="multipart/form-data" method="POST">

        <label for="photos">Photo :</label>
        <input type="file" id="photos" name="photos" accept="image/png, image/jpeg" value="<?php echo isset($photos) ? $photos : ''; ?>" >

        <label for="categorie">Categorie :</label>
        <input type="text" id="categorie" name="categorie" placeholder="la categorie" value="<?php echo isset($categorie) ? $categorie : ''; ?>">

        <label for="superficie">Superficie :</label>
        <input type="text" id="superficie" name="superficie" placeholder="la superficie" value="<?php echo isset($superficie) ? $superficie : ''; ?>" >

        <label for="lits">lits :</label>
        <input type="number" id="lits" name="lits"  min="1" max="5" placeholder="lits" value="<?php echo isset($lits) ? $lits : ''; ?>">

        <label for="salle_de_bain">salle de bains :</label>
        <input type="number" id="salle_de_bain" name="salle_de_bains"  min="1" max="5" placeholder="salle de bains" value="<?php echo isset($salle_de_bains) ? $salle_de_bains : ''; ?>">

        <label for="status">Status :</label>
        <input type="text" id="status" name="status" placeholder="le status" value="<?php echo isset($status) ? $status : ''; ?>">

        <label for="prix">Prix :</label>
        <input type="number" id="number" name="prix" placeholder="le prix" value="<?php echo isset($prix) ? $prix : ''; ?>">

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" placeholder="l'adresse" value="<?php echo isset($adresse) ? $adresse : ''; ?>">

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" placeholder="ville" value="<?php echo isset($ville) ? $ville : ''; ?>">

        <label for="pays">Pays :</label>
        <input type="text" id="pays" name="pays" placeholder="pays" value="<?php echo isset($pays) ? $pays : ''; ?>">

        <button type="submit">valider</button>
    </form>
</div>

        </div>


        <!-- <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Ajouter un Appartement <span>les plus vendus</span></p>
                    <br />
                    <table>
                        <tr>
                            <th>Appartements</th>
                            <th>Ajouter</th>
                            <th>Supprimer</th>
                        </tr>
                        <tr >
                            <td ><img src="img/pexels-john-tekeridis-1428348.jpg" alt=""></td>
                            <td class="icons"><img src="img/circle-plus-solid.svg" alt=""></td>
                            <td class="icons"><img src="img/circle-minus-solid.svg" alt=""> </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div> -->

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

        <footer>
            <h2>© Copyright franck-mabikas. tout droits reserve</h2>

        </footer>

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