

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div id="container">

        <!-- formulaire de conexion -->


        <form action="authentification.php" method="POST">
            <h1>Connexion</h1>

            <label><b>prenom</b></label>
            <input type="text" placeholder="Entrer votre prenom" name="firstname" required>

            <label><b>Adresse mail de l'utilisateur</b></label>
            <input type="email" placeholder="Entrer  votre email" name="email" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

            <input type="submit" id='submit' value='Valider'>

        </form>

</body>

</html>