-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 18 avr. 2020 à 10:35
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp5`
--

-- --------------------------------------------------------

--
-- Structure de la table `creneaux_horaires`
--

CREATE TABLE `creneaux_horaires` (
  `ID` int(11) NOT NULL,
  `Horaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Client` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `creneaux_horaires`
--

INSERT INTO `creneaux_horaires` (`ID`, `Horaire`, `ID_Client`) VALUES
(16, '8h00 - 8h30', -1),
(17, '8h30 - 9h00', -1),
(18, '9h00 - 9h30', -1),
(19, '9h30 - 10h00', -1),
(20, '10h00 - 10h30', -1),
(21, '10h30 - 11h00', -1),
(22, '11h00 - 11h30', -1),
(23, '11h30 - 12h00', -1),
(26, '13h00 - 13h30', -1),
(27, '13h30 - 14h00', -1),
(28, '14h00 - 14h30', -1),
(29, '14h30 - 15h00', -1),
(30, '15h00 - 15h30', -1),
(31, '15h30 - 16h00', -1),
(32, '16h00 - 16h30', -1),
(33, '16h30 - 17h00', -1),
(34, '17h00 - 17h30', -1),
(35, '17h30 - 18h00', 13);

-- --------------------------------------------------------

--
-- Structure de la table `informations_personnelles`
--

CREATE TABLE `informations_personnelles` (
  `ID_Client` int(11) NOT NULL,
  `Nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Login` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Mdp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Statut` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `informations_personnelles`
--

INSERT INTO `informations_personnelles` (`ID_Client`, `Nom`, `Prenom`, `Tel`, `Login`, `Mdp`, `Statut`) VALUES
(1, 'Satan', 'Verslehaut', '666', 'Satan', '666', 0),
(2, 'Lange Déchu', 'Lucifer', '1010011010', 'Lucifer', '1010011010', 1),
(13, 'TEST', '2.0', '12345', '12345', '12345', 1);

-- --------------------------------------------------------

--
-- Structure de la table `liste_produits`
--

CREATE TABLE `liste_produits` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Produit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Quantite` int(11) NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `liste_produits`
--

INSERT INTO `liste_produits` (`ID`, `Type`, `Produit`, `Quantite`, `prix`) VALUES
(1, 'Alimentaire', 'Jambon blanc fumé', 48, '12'),
(2, 'Alimentaire', 'Pâté frais français', 44, '12'),
(3, 'Animaux', 'Croquettes pour chats', 30, '12'),
(4, 'Animaux', 'Cage pour souris de compagnie', 6, '43'),
(5, 'Entretien', 'Javel', 0, '43'),
(6, 'Entretien', 'Rouleau de peinture', 9, '23'),
(7, 'Divertissement', 'DVD de Camping', 3, '66'),
(11, 'Santé', 'Gel Hydroalcoolique 500ml', 49, '500'),
(10, 'Divertissement', 'DVD de Allad2', 3, '666'),
(12, 'Santé', 'Masque de protection ffp2', 1000000001, '999'),
(13, 'Alimentaire', 'Chips BBQ', 499, '1'),
(14, 'Alimentaire', 'Pâtes - Coquillettes', 50, '35'),
(15, 'Alimentaire', 'Pâtes - Spaghettis', 400, '34'),
(17, 'Truc vraiment bizarre', 'Pizza Ananas', 0, '9999999999'),
(18, 'Alimentaire', 'Jambon Blanc Très Supérieur', 36, '12'),
(19, 'Truc vraiment bizarre', 'Chocolapine', 12, '999'),
(20, 'Alimentaire', 'Lapin au chocolat', 12, '2'),
(21, 'Truc vraiment bizarre', 'Chocolatine', 12, '999'),
(22, 'Alimentaire', 'pain au chocolat', 119, '2'),
(23, 'Alimentaire', 'Petit pain', 123, '1'),
(24, 'Alimentaire', 'Petit pain au chocolat', 280, '1'),
(25, 'Truc vraiment bizarre', 'Pringles gôut ananas', 126, '789'),
(26, 'Truc vraiment bizarre', 'Raviolis sauce chocolat', 112, '2323'),
(27, 'Truc vraiment bizarre', 'Mozarella au Nutella', 10, '333');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `ID_Client` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`ID_Client`, `ID`, `quantite`) VALUES
(3, 5, 2),
(13, 13, 1),
(13, 22, 1),
(12, 1, 4),
(13, 5, 3),
(13, 11, 1),
(9, 17, 2),
(13, 1, 2),
(13, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `Type`) VALUES
(1, 'Alimentaire'),
(2, 'Animaux'),
(3, 'Entretien'),
(4, 'Divertissement'),
(5, 'Divers'),
(6, 'Santé'),
(7, 'Truc vraiment bizarre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `creneaux_horaires`
--
ALTER TABLE `creneaux_horaires`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `informations_personnelles`
--
ALTER TABLE `informations_personnelles`
  ADD PRIMARY KEY (`ID_Client`);

--
-- Index pour la table `liste_produits`
--
ALTER TABLE `liste_produits`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `creneaux_horaires`
--
ALTER TABLE `creneaux_horaires`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `informations_personnelles`
--
ALTER TABLE `informations_personnelles`
  MODIFY `ID_Client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `liste_produits`
--
ALTER TABLE `liste_produits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
