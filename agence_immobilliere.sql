-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 16 juin 2023 à 05:51
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
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` bigint(20) UNSIGNED NOT NULL,
  `photos` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`Id_admin`, `photos`, `firstname`, `email`, `password`) VALUES
(2, 'user-solid.svg', 'sanji', 'sanji.vinsmoke@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

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
(5, 'pexels-chait-goli-1918291.jpg', 'Lyon-Carnot', ' superficie 120 m²', 3, 1, 0, 'Grand appartement de 120 m² spacieux de 5 pièces dont 3 chambres  ', '1400 euros', '15 rue du marché', 'Lyon', 'France'),
(6, 'pexels-john-tekeridis-1428348.jpg', 'appartement triplex', '100 m²', 0, 0, 0, ' grand appartement', '600', '15 rue des bois', 'lyon', 'france'),
(11, 'pexels-pixabay-275484.jpg', 'appartement t4', '90 m²', 3, 2, 0, 'appartement moyen', '2000', '10 rue des chemins', 'lyon', 'france'),
(12, 'pexels-vecislavas-popa-1571468.jpg', 'appartement t7', '80 m²', 1, 2, 0, 'appartement moyen', '400', '15 rue des bas', 'lyon', 'france'),
(13, 'pexels-vecislavas-popa-1571460.jpg', 'appartement t5', '70m²', 2, 1, 0, 'petite appartement coquet', '800', '17 rue des arbres', 'lyon', 'france'),
(17, 'pexels-vecislavas-popa-813692.jpg', 'duplex', '120', 1, 1, 0, 'll!k', '1', 'n;', 'b ', 'b,b');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Id_reservation` int(11) NOT NULL,
  `Id_appartements` int(11) NOT NULL,
  `date_depart` date NOT NULL,
  `date_retour` date NOT NULL,
  `civilite` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `animaux` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Id_reservation`, `Id_appartements`, `date_depart`, `date_retour`, `civilite`, `firstname`, `lastname`, `email`, `adresse`, `code_postal`, `ville`, `telephone`, `animaux`) VALUES
(5, 5, '2023-06-20', '2023-06-21', 'monsieur', 'eustass', 'kid', 'eustass.kid@gmail.com', '15 rue des marrais', '68000', 'mulhouse', '0142589636', 'lezard'),
(6, 5, '2023-06-22', '2023-06-24', 'monsieur', 'eustass', 'kid', 'eustass.kid@gmail.com', '15 rue des marrais', '68000', 'mulhouse', '0142589635', 'lezard');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`),
  ADD UNIQUE KEY `Id_users` (`Id_admin`);

--
-- Index pour la table `appartements`
--
ALTER TABLE `appartements`
  ADD PRIMARY KEY (`Id_appartements`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id_reservation`),
  ADD KEY `Id_appartements` (`Id_appartements`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `appartements`
--
ALTER TABLE `appartements`
  MODIFY `Id_appartements` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Id_appartements`) REFERENCES `reservation` (`Id_reservation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
