
<!Doctype HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="css/ajouter-appartements.css" />
    <script type="text/javascript" src="dashbord.js"></script>
</head>


<body>

<?php 
require_once ("menu.php"); 
 forcerUtilisateurConnecte();
   
   
   ?>

   
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
    $id_users = $_GET['apt'];


/*Dans ce code , j'ai fait une requête en utilisant un paramètre de liaison "?"
 à la place de l'insertion directe de la variable $id_appartement dans la requête.
 Ensuite, j'ai passé la valeur de $id_appartement à la méthode execute() en utilisant
 un tableau [ $id_appartement ]. Cela protège ma requête contre les attaques par injection SQL.*/ 

require_once("connexion-bdd.php");
$requete = $connexion->prepare("SELECT * FROM users WHERE Id_users = ?  ");
$requete->execute([ $id_users]);
$resultat = $requete->fetch(PDO::FETCH_ASSOC);


if (!empty($resultat)){ 
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

}else{
    echo "Aucun résultat n'a été trouvé pour ce compte.";
}
}
?>
      <div class="container">
    <h2>Modifier un comptes</h2>

    <form action="traitement-modifier-comptes.php?apt=<?php echo $id_users; ?>" enctype="multipart/form-data" method="POST">

        <label for="photos">Photo :</label>
        <input type="file" id="photos" name="photos" accept="image/png, image/jpeg" value="<?php echo isset($photos) ? $photos : ''; ?>" >

        <label for="categorie">Nom :</label>
        <input type="text" id="lastname" name="lastname" placeholder="votre nom" value="<?php echo isset($lastname) ? $lastname : ''; ?>">

        <label for="superficie">Prénom :</label>
        <input type="text" id="firstname" name="firstname" placeholder="votre prenom" value="<?php echo isset($firstname) ? $firstname : ''; ?>" >

        <label for="lits">email :</label>
        <input type="email" id="email" name="email"   placeholder="votre email" value="<?php echo isset($email) ? $email : ''; ?>">

        <label for="salle_de_bain">password :</label>
        <input type="password" id="password" name="password" placeholder="votre mot passe" value="<?php echo isset($password) ? $password : ''; ?>">

        <label for="status">role :</label>
        <input type="text" id="role" name="role" placeholder="le role" value="<?php echo isset($role) ? $role : ''; ?>">

        <label for="prix">Prix :</label>
        <input type="number" id="number" name="prix" placeholder="le prix" value="<?php echo isset($prix) ? $prix : ''; ?>">

        <button type="submit">valider</button>
    </form>
</div>

        </div>

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