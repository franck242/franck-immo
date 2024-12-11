<?php
        $serveur = "localhost";
        $login = "root";
        $passwordbdd = "";   
        $connexion = new PDO("mysql:host=$serveur;dbname=agence_immobilliere", $login, $passwordbdd);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       

        ?>