<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">


  <!-- lien js boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <title>Agence immobillière</title>
</head>

<body>

  <!-- navbar -->
  <div id="#Accueil">
    <nav>
      <ul>
        <li class="icons-accueil"><a href="#Accueil">Franck immo</a></li>
        <li><a href="#Appartements">Appartements</a></li>
      </ul>

    </nav>
  </div>

  <!-- carrousel -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active hauteur-images-caroussel">
        <img class="d-block w-100" src="img/pexels-john-tekeridis-1428348.jpg" alt="First slide">
        <div class="carousell-caption">
          <p>Franck immo</p>
   
        </div>
      </div>
      <div class="carousel-item hauteur-images-caroussel">
        <img class="d-block w-100" src="img/pexels-pixabay-275484.jpg" alt="Second slide">
        <div class="carousell-caption">
          <p>Franck immo</p>
        </div>
      </div>
      <div class="carousel-item hauteur-images-caroussel">
        <img class="d-block w-100" src="img/pexels-vecislavas-popa-813692.jpg" alt="Third slide">
        <div class="carousell-caption">
          <p>Franck immo</p>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>




  <div class="section-Appartements" id="Appartements">
    <!-- CE CONTENEUR NE DOIT S'OUVRIR QU'UNE FOIS, PAS DANS LA BOUCLE FOREACH -->

    <?php

    require("admin/connexion-bdd.php");
    $requete = $connexion->prepare("SELECT * FROM appartements  where status = 0");
    $requete->execute();
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

    // vérifier les données existant dans un tableau associatif
    if (is_array($resultat) && count($resultat) > 0) {

      foreach ($resultat as $elt) { ?>


        <!-- j'affiche l'image correspondant a l'appartement en question -->
        <!-- e code $resultat as $elt est utilisé dans une boucle pour parcourir les éléments du tableau $resultat. Chaque élément du tableau est temporairement assigné à la variable $elt lors de chaque itération de la boucle.

En d'autres termes, le code $resultat as $elt permet de parcourir chaque élément du tableau $resultat un par un et d'effectuer des opérations spécifiques sur chaque élément à l'intérieur de la boucle. La variable $elt peut être utilisée à l'intérieur de la boucle pour accéder aux valeurs de chaque élément du tableau. -->



        <!-- Photos Appartements -->

        <!--  <div class="section-Appartements" id="Appartements"> CE CONTENEUR DOIT ENGLOBER TOUS LES APPARTEMENTS - DÉPLACÉ AVANT LE FOREACH - À ENLEVER D'ICI -->

        <div class="photos">
          <?php
          $id_appartement = $elt['Id_appartements'];
          echo " <a href='detail-appartements.php?apt=$id_appartement'><img src='img/" . $elt['photos'] . "' alt=''></a>"; ?><!-- </td> FERMETURE TD QUI NE CORRESPOND À RIEN : À ENLEVER -->


          <h3>
            <?php echo $elt['categorie']; ?>
          </h3>
          <p class="icons"><img src="admin/uploads-images/superficie.svg">
            <?php echo $elt['superficie']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/bed-solid.svg">
            <?php echo $elt['lits']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/bath-solid.svg">
            <?php echo $elt['salle_de_bains']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/house-solid.svg">
            <?php echo $elt['description']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/location-dotsolid-euros.svg">
            <?php echo $elt['prix']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/location-dot-solid.svg">
            <?php echo $elt['adresse']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/location-dot-solid-(2).svg">
            <?php echo $elt['ville']; ?>
          </p>
          <p class="icons"><img src="admin/uploads-images/earth-africa-solid.svg">
            <?php echo $elt['pays']; ?>
          </p>

        </div><!-- FERMETURE DIV CLASS PHOTOS, POUR CHAQUE APPARTEMENT -->

      <?php }


    } else {
      // ATTENTION : UTILISER <tr> ET <td> N'EST PAS COHÉRENT EN-DEHORS D'UNE <table> - À MODIFIER
      echo "<tr> <td colspan=7> aucune donnée dans la base données </td></tr> ";
    }

    ?>
  </div>

  <!-- </div> MAL PLACÉ, À ENLEVER D'ICI -->





  <footer class="footer-section">
    <div class="container">
      <div class="footer-cta pt-5 ">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Adresse</h4>
                <span>franck-immo, 8 rue du berger 69000 Lyon</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Telephone</h4>
                <span>0381475263</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text icons">
                <h4>E-Mail</h4>
                <span>franck-immo-contact@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>

</body>

</html>