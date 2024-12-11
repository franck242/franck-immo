<?php
require_once("connexion-bdd.php");

if (isset($_POST['id_appartement'])) {
    $id_appartement = $_POST['id_appartement'];

    // Vérifier si l'appartement existe avant de le supprimer
    $requete = $connexion->prepare("SELECT * FROM appartements WHERE Id_appartements = ?");
    $requete->execute([$id_appartement]);
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);

    if (!empty($resultat)) {
        // L'appartement existe, procéder à la suppression
        $requete = $connexion->prepare("DELETE FROM appartements WHERE Id_appartements = ?");
        $requete->execute([$id_appartement]);

header("location:liste-appartements.php");

        echo "L'appartement a été supprimé avec succès.";

    } else {
        echo "Aucun résultat n'a été trouvé pour cet appartement.";
    }
} else {
    echo "ID de l'appartement non spécifié dans le formulaire.";
}
?>
