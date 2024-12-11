

<?php

require_once("connexion-bdd.php");

// Vérifier si l'ID de l'appartement est fourni dans l'URL
if (isset($_GET['apt'])) {
    $id_users = $_GET['apt'];

    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $requete = $connexion->prepare("UPDATE users SET lastname = ?, firstname = ?, email = ?, `password` = ?, `role` = ?, WHERE Id_users = ?");
        $requete->execute([$lastname, $firstname, $email, $password, $role, $id_users]);

        // Gérer la modification de la photo
        if ($_FILES['photos']['size'] > 0) {
            $targetDir = "uploads-images/";
            $targetFile = $targetDir . basename($_FILES["photos"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Vérifier si le fichier est une image réelle
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["photos"]["tmp_name"]);
                if ($check !== false) {
                    echo "Le fichier est une image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "Le fichier n'est pas une image.";
                    $uploadOk = 0;
                }
            }

            // Vérifier si le fichier existe déjà
            if (file_exists($targetFile)) {
                echo "Désolé, le fichier existe déjà.";
                $uploadOk = 0;
            }

            // Vérifier la taille du fichier
            if ($_FILES["photos"]["size"] > 500000) {
                echo "Désolé, le fichier est trop volumineux.";
                $uploadOk = 0;
            }

            // Autoriser uniquement certains formats de fichiers
            $allowedFormats = array("jpg", "jpeg", "png");
            if (!in_array($imageFileType, $allowedFormats)) {
                echo "Désolé, seuls les fichiers JPG, JPEG et PNG sont autorisés.";
                $uploadOk = 0;
            }

            // Vérifier si $uploadOk est défini à 0 par une erreur
            if ($uploadOk == 0) {
                echo "Désolé, votre fichier n'a pas été téléchargé.";
            } else {
                // Si tout est ok, télécharger le fichier
                if (move_uploaded_file($_FILES["photos"]["tmp_name"], $targetFile)) {
                    echo "Le fichier " . basename($_FILES["photos"]["name"]) . " a été téléchargé.";

                //   requête sql pour la colonne photos
                $requete = $connexion->prepare("UPDATE appartements SET photos = ? WHERE Id_appartements = ?");
                $upload_file_name = basename($_FILES["photos"]["name"]);
                $requete->execute  ([$upload_file_name, $id_user]);

                } else {
                    echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
                }
            }
        }

        header("location:liste-appartements.php");
        exit();
    }
}






?>




