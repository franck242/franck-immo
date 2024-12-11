<?php
// ...
session_start();

// Fonction qui vérifie si l'utilisateur est connecté
function estConnecte(): bool
{
    return isset($_SESSION['connecte']) && $_SESSION['connecte'] === true;
}

// Fonction qui force l'utilisateur à se connecter pour accéder à la page admin
function forcerUtilisateurConnecte(): void
{
    if (!estConnecte()) {
        header('Location: /Agence-immobilliere/admin/login.php');
        exit();
    }
}
function verifierCompteUtilisateur($firstname, $email, $password): bool
{
    require_once("connexion-bdd.php");

    try {
        // Utilisation de requêtes préparées pour éviter les injections SQL
        $requete = $connexion->prepare("SELECT * FROM `admin` WHERE `email` = ? AND password = SHA1(?)");
        $requete->execute([$email, $password]);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);

        if (is_array($resultat)) {
            $_SESSION['connecte'] = true;
            $_SESSION['admin'] = $resultat;
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
        return false;
    }
}

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si les champs du formulaire ne sont pas vides
    if (!empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Récupérer les valeurs des champs du formulaire
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Appeler la fonction verifierCompteUtilisateur avec les données du formulaire
        if (verifierCompteUtilisateur($firstname, $email, $password)) {
            header('Location:/Agence-immobilliere/admin/liste-appartements.php');
            exit();
        } else {
            $erreur = "Identifiants incorrects";
            var_dump($erreur);
        }
    }
}

// ...

?>
