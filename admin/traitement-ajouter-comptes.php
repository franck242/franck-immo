<?php


require_once("connexion-bdd.php");
$upload_file_name ="";
// require_once ("traitement-upload-images.php");



// traitement des données du formulaire

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];


// fontionnalité permettant de creer un compte

// requête insertion dans la table user 
$requete = $connexion->prepare("INSERT INTO users (photos,lastname,firstname,
 email,`password`,`role`) values (?,?,?,?,?,?)");

 $requete->execute([$upload_file_name,$lastname, $firstname, $email, sha1($password), $role]);
       
header("location:/Agence-immobilliere/admin/liste-comptes.php");
?>

