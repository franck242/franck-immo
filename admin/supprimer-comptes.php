<?php
require_once("connexion-bdd.php");

if (isset($_POST['Id_admin'])) {
    $id_appartement = $_POST['Id_admin'];

    // Vérifier si le compte existe avant de le supprimer
    $requete = $connexion->prepare("SELECT * FROM `admin` WHERE Id_admin = ?");
    $requete->execute([$id_admin]);
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    if (!empty($resultat)) {
        // Le compte existe, procéder à la suppression
        $requete = $connexion->prepare("DELETE FROM `admin` WHERE Id_admin = ?");
        $requete->execute([$id_admin]);

header("location:liste-comptes.php");

        echo  "Le compte admin a été supprimé avec succès.";

    } else {
        echo "Aucun résultat n'a été trouvé pour ce compte.";
    }
} else {
    echo "<p style='color: white; font-weight: bold;'>L'ID du compte n'est pas spécifié dans le formulaire.</p>";

}
?>


    
