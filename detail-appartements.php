<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

html{
    height: 100vh;
}

   body {
        background-color: #272c4a;

    }

    .section-detail-appartement{
        width:100%;
        height:150vh !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    
    }

    nav {
background-color: #1b203d;
height: 50px;
width: 100%;
height: 100%;
}

nav ul {
display: flex;
justify-content: center;
list-style: none;
gap: 20px;
font-size: 25px;
margin: 0;
padding: 0;
}

nav a {
text-decoration: none;
color: white;
}



.se-connecter{
justify-content: flex-end;
}


nav a:hover {
text-decoration: none;

}


    h1 {
        text-align: center;
    }

    .loué {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .diapo_description {
     
        width: 40vw;
    
        background-color: #f3f3f3;
        box-shadow: 0px 0px 10px 10px #959595;
        border-radius: 10px;
        height: 140vh;
        padding-top: 15px;
       
    }

   .contenu-principale{
   
        display: flex;
       /* align-items: center; */
        justify-content: center;
        gap: 50px;
        margin-top: 80px;
   }


    .slideshow-container {
       
        position: relative;
        margin-right: 20px;
       
    }

    .slide {
        display: none;
        width: 700px;
    }

    .slide:first-child {
        display: block;
    }

    .thumbnails {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .thumbnail {
        width: 80px;
        margin: 0 5px;
        cursor: pointer;
    }

    .thumbnail img {
        width: 100%;
        height: auto;
    }

    .appartement-info {
        float: right;
        width: 300px;
        margin-left: 10%;
    }

    .appartement-description {
        margin-top: 20px;
        clear: both;
    }

    .block-img{
        height: 300px;
        width: 600px;
        border: black 3px solid;
        margin-left: 30px;

    }

    .block-img img{
        width: 100%;
        height: 100%;
    }

    .icons img{
      width:10%;
      height:10%; 
      margin-right: 10px;
    }

    .information{
        width: 300px;
    }

    .titre{
        width: 40%;
        position: absolute;
    }

    .description{
      width: 100%;
      
      display: flex;
      flex-direction: column;
      align-items: start;
      justify-content: end;
      margin-left: 30px;

      
    }

    .formulaire-contact {
height: 55%;
/* width: 80%; */
background-color: #272c4a;
display: flex;
justify-content: center;
align-items: center;
padding: 20px;
color: white;
padding-bottom: 80px;

}

    
.formulaire-contact input[type="text"],input[type="email"], input[type="text"],input[type="number"]  {
width: 95%;
padding: 10px;
font-size: 16px;
background-color: #f3f3f3;
border: none;
border-radius: 5px;
margin-bottom: 20px;
}

.formulaire-contact input[type="submit"] {
width: 50%;
padding: 10px;
font-size: 16px;
background-color: #636e9a;
border: none;
color: white;
border-radius: 5px;
cursor: pointer;
}


button, input {
overflow: visible;
}
button, input, optgroup, select, textarea {
margin: 0;
font-family: inherit;
font-size: inherit;
line-height: inherit;
}



</style>
    

    <body>
    <div id="Accueil">
    <nav>
      <ul>
        <li class="icons-accueil"><a href="index.php">Franck immo</a></li>
        <li><a href="#Appartements">Appartements</a></li>
        <li><a href="admin/login.php">Se connecter</a></li>
        <!-- <li><a href="#Contact">Contact</a></li> -->
      </ul>

    </nav>
  </div>
  
       
            <?php

require("admin/connexion-bdd.php");
if (isset($_GET['apt'])) {
    $id_appartement = $_GET['apt'];
 // Récupérer l'ID de l'appartement à affiche
$requete = $connexion->prepare("SELECT * FROM appartements WHERE Id_appartements = :id");
$requete->bindParam(':id', $id_appartement);
$requete->execute();
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

// vérifier les données existant dans un tableau associatif
if (is_array($resultat) && count($resultat) > 0) {
  
  foreach ($resultat as $elt)  {    ?>
      

          <!-- j'affiche l'image correspondant a l'appartement en question -->
          <!-- e code $resultat as $elt est utilisé dans une boucle pour parcourir les éléments du tableau $resultat. Chaque élément du tableau est temporairement assigné à la variable $elt lors de chaque itération de la boucle.

En d'autres termes, le code $resultat as $elt permet de parcourir chaque élément du tableau $resultat un par un et d'effectuer des opérations spécifiques sur chaque élément à l'intérieur de la boucle. La variable $elt peut être utilisée à l'intérieur de la boucle pour accéder aux valeurs de chaque élément du tableau. -->
        


<!-- Photos Appartements -->

<!--  <div class="section-Appartements" id="Appartements"> CE CONTENEUR DOIT ENGLOBER TOUS LES APPARTEMENTS - DÉPLACÉ AVANT LE FOREACH - À ENLEVER D'ICI -->
<div class="section-detail-appartement">



            <div class=" diapo_description">
            <div class="titre"><h1><?php echo $elt['categorie']; ?></h1></div>

                <div class="contenu-principale">

          
 <div class="block-img">

 <?php
             $id_appartement = $elt['Id_appartements'];
             echo " <a href='detail-appartements.php?apt=$id_appartement'><img src='img/" . $elt['photos'] . "' alt=''></a>"; ?>
</div>


<div class="information">


         <p class="icons"><img src="img/superficie.svg"><?php echo $elt['superficie']; ?></p>
         <p class="icons"><img src="img/bed-solid.svg"><?php echo $elt['lits']; ?></p>
         <p class="icons"><img src="img/bath-solid.svg"><?php echo $elt['salle_de_bains']; ?></p>
        
         <!-- <option ><?php echo $elt['status']; ?></option> -->
         <p>Prix <?php echo $elt['prix']; ?></p>
         <p>Adresse <?php echo $elt['adresse']; ?></p>
         <p><?php echo $elt['ville']; ?></p>
         <p><?php echo $elt['pays']; ?></p>
       

</div>

</div>

<div class="description">
<p ><?php echo $elt['description'];} ?></p>
    
</div>

<div class="formulaire-contact">



    <!-- formulaire de conexion -->
<?php $id_appartement=$elt['Id_appartements'] ;?>
    <form action="demande-location.php" method="POST">
    <input type="hidden" name="apt" id="apt" value ="<?php echo $id_appartement;?>">
    <h3>Demande de location</h3>

    <label for="start">Date départ</label>
    <input type="date" id="start" name="date_depart" min="2023-06-19" max="2023-12-31" value="<?php echo isset($date_depart) ? $date_depart : ''; ?>">

    <label for="end">Date arrivé</label>
    <input type="date" id="end" name="date_retour" min="2023-06-19" max="2023-12-31" value="<?php echo isset($date_retour) ? $date_retour : ''; ?>">


    <label><b>Civilité</b></label>
    <select name="civilite" id="civilite">
        <option value="monsieur" <?php echo isset($civilite) && $civilite === 'monsieur' ? 'selected' : ''; ?>>Monsieur</option>
        <option value="madame" <?php echo isset($civilite) && $civilite === 'madame' ? 'selected' : ''; ?>>Madame</option>
    </select>

    <label><b>Prénom</b></label>
    <input type="text" placeholder="Entrer votre prénom" name="firstname" value="<?php echo isset($firstname) ? $firstname : ''; ?>" required>

    <label><b>Nom</b></label>
    <input type="text" placeholder="Entrer votre nom" name="lastname" value="<?php echo isset($lastname) ? $lastname : ''; ?>" required>

    <label><b>Email</b></label>
    <input type="email" placeholder="Entrer votre email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>

    <label><b>Adresse</b></label>
    <input type="text" placeholder="Entrer votre adresse" name="adresse" value="<?php echo isset($adresse) ? $adresse : ''; ?>" required>

    <label><b>Code postal</b></label>
    <input type="number" max="99999" min="1" placeholder="Entrer votre code postal" name="code_postal" value="<?php echo isset($code_postal) ? $code_postal : ''; ?>" required>

    <label><b>Ville</b></label>
    <input type="text" placeholder="Entrer votre ville" name="ville" value="<?php echo isset($ville) ? $ville : ''; ?>" required>

    <label><b>Téléphone</b></label>
    <input type="number" placeholder="Entrer votre numéro" name="telephone" value="<?php echo isset($telephone) ? $telephone : ''; ?>" required>

    <label><b>Animaux</b></label>
    <input type="text" placeholder="quel animaux avez vous ?" name="animaux" value="<?php echo isset($animaux) ? $animaux : ''; ?>" required>

    <input type="submit" id="submit" value="Valider">
</form>




  </div>

  
 <?php  }


} else {
  // ATTENTION : UTILISER <tr> ET <td> N'EST PAS COHÉRENT EN-DEHORS D'UNE <table> - À MODIFIER
 echo "<tr> <td colspan=7> aucune donnée dans la base données </td></tr> ";
}

?>

         

               
</div>      
</div>

       


        <!-- <script>
            // JavaScript code for slideshow functionality
            var slides = document.getElementsByClassName("slide");
            var thumbnails = document.getElementsByClassName("thumbnail");

            for (var i = 0; i < thumbnails.length; i++) {
                thumbnails[i].addEventListener("click", function () {
                    var clickedIndex = Array.from(thumbnails).indexOf(this);
                    for (var j = 0; j < slides.length; j++) {
                        slides[j].style.display = "none";
                    }
                    slides[clickedIndex].style.display = "block";
                });
            }
        </script> -->


        <!-- Ce code utilise du HTML et du CSS pour créer une mise en page avec un diaporama d'images,
        des options de sélection, des caractéristiques d'appartement et une description.
        Le diaporama est géré en utilisant JavaScript pour afficher les images en grand format
         lorsqu'on clique sur les miniatures correspondantes. Assurez-vous de remplacer les noms
          des fichiers d'images (photo1.jpg, photo2.jpg, etc.) par les noms réels de vos propres images. -->
    </body>

</html>