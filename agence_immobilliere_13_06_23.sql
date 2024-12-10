-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 juin 2023 à 00:44
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agence_immobilliere`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartements`
--

CREATE TABLE `appartements` (
  `Id_appartements` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `superficie` varchar(255) NOT NULL,
  `lits` int(100) NOT NULL,
  `salle_de_bains` int(100) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=libre,1=louer,2=trvaux',
  `description` varchar(255) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `appartements`
--

INSERT INTO `appartements` (`Id_appartements`, `photos`, `categorie`, `superficie`, `lits`, `salle_de_bains`, `status`, `description`, `prix`, `adresse`, `ville`, `pays`) VALUES
(5, 'pexels-chait-goli-1918291.jpg', 'appartement duplex', '120 m²', 3, 1, 0, 'Grand appartement de 120 m² spacieux de 5 pièces dont 3 chambres  ', '1300 euros', '15 rue du marché', 'lyon', 'france'),
(6, 'pexels-john-tekeridis-1428348.jpg', 'appartement triplex', '100 m²', 0, 0, 0, ' grand appartement', '600', '15 rue des bois', 'lyon', 'france'),
(11, 'pexels-vecislavas-popa-1571468.jpg', 'appartement t4', '90 m²', 3, 2, 0, 'appartement moyen', '2000', '10 rue des chemins', 'lyon', 'france'),
(12, 'pexels-vecislavas-popa-1571468.jpg', 'appartement t7', '80 m²', 1, 2, 0, 'appartement moyen', '400', '15 rue des bas', 'lyon', 'france'),
(13, 'pexels-vecislavas-popa-1571460.jpg', 'appartement t5', '70m²', 2, 1, 0, 'petite appartement coquet', '800', '17 rue des arbres', 'lyon', 'france'),
(17, 'pexels-chait-goli-1918291.jpg', 'duplex', '120', 0, 0, 0, 'll!k', '1', 'n;', 'b ', 'b,b');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id_users` bigint(20) UNSIGNED NOT NULL,
  `photos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id_users`, `photos`, `email`, `password`, `firstname`, `lastname`, `role`) VALUES
(1, 'user-solid.svg', 'Jhon.Doe@netcourrier.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'John', 'Doe', 'utilisateur'),
(2, 'user-solid.svg', 'sanji.vinsmoke@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'sanji', 'vinsmoke', 'admin'),
(3, 'user-solid.svg', 'bfbf', '90a347c57d2e7cb4c47eaff26a7b479b38f54cb6', 'bgfbfg', 'fbfbf', 'bfbfb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartements`
--
ALTER TABLE `appartements`
  ADD PRIMARY KEY (`Id_appartements`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_users`),
  ADD UNIQUE KEY `Id_users` (`Id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartements`
--
ALTER TABLE `appartements`
  MODIFY `Id_appartements` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
