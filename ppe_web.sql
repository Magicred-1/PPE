-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 10 mai 2022 à 16:21
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ppe_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(64) NOT NULL,
  `prenomClient` varchar(64) NOT NULL,
  `emailClient` varchar(64) NOT NULL,
  `mdpClient` varchar(64) NOT NULL,
  `ageClient` tinyint(4) NOT NULL,
  `villeClient` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `emailClient`, `mdpClient`, `ageClient`, `villeClient`) VALUES
(1, 'Gadiou', 'Djason', 'djasongadiou@gmail.com', '$2y$10$FgP97LZhSK.WGjNUo7IiE.ibd75LnDDqNp4jodhyH5FcXpHTI409a', 21, 'Mitry Mory'),
(2, 'Atlani', 'Samuel', 'samsam@gmail.com', '$2y$10$Dlqmd4e0Gb8g70jAtp4bdu1PIgwm/HyR83BfthgwBMiTAW8LMJDUy', 19, 'Maisons-Alfort');

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `dateConsultation` datetime NOT NULL,
  `idClient` int(11) NOT NULL,
  `idEvenement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `date`
--

INSERT INTO `date` (`dateConsultation`, `idClient`, `idEvenement`) VALUES
('2022-05-10 14:38:22', 1, 1),
('2022-05-10 14:38:53', 1, 5),
('2022-05-10 14:42:25', 1, 2),
('2022-05-10 14:45:17', 1, 1),
('2022-05-10 14:45:47', 1, 1),
('2022-05-10 14:49:01', 1, 1),
('2022-05-10 14:49:31', 1, 1),
('2022-05-10 15:26:08', 1, 1),
('2022-05-10 15:26:19', 1, 5),
('2022-05-10 15:34:04', 1, 5),
('2022-05-10 15:34:53', 1, 1),
('2022-05-10 15:34:57', 1, 2),
('2022-05-10 15:36:05', 1, 2),
('2022-05-10 15:38:26', 2, 1),
('2022-05-10 15:39:56', 2, 2),
('2022-05-10 15:39:59', 2, 2),
('2022-05-10 15:42:18', 2, 2),
('2022-05-10 15:43:38', 2, 2),
('2022-05-10 15:52:17', 2, 2),
('2022-05-10 15:53:56', 2, 2),
('2022-05-10 15:54:43', 2, 2),
('2022-05-10 15:57:31', 2, 2),
('2022-05-10 15:57:52', 2, 2),
('2022-05-10 16:10:03', 2, 3),
('2022-05-10 16:16:14', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idEvenement` int(11) NOT NULL,
  `nomEvenement` varchar(100) DEFAULT NULL,
  `descEvenement` varchar(100) DEFAULT NULL,
  `date_creation_evenement` datetime DEFAULT NULL,
  `date_modification_evenement` datetime DEFAULT NULL,
  `imageEvenement` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `nomEvenement`, `descEvenement`, `date_creation_evenement`, `date_modification_evenement`, `imageEvenement`) VALUES
(1, 'Basketball', 'Le basket-ball ou basketball est un sport collectif qui se joue à la main avec un ballon.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './asset/img/sports_activities/basketball.jpg'),
(2, 'Deadlift', 'Le soulevé de terre est un exercice polyarticulaire de force et de musculation.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './asset/img/sports_activities/lifting.jpg'),
(3, 'Running', 'Le running (terme anglais signifiant courir) est une pratique libre de la course à pied.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './asset/img/sports_activities/running.jpg'),
(4, 'Natation', 'La natation', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './asset/img/sports_activities/swimming.jpg'),
(5, 'Escalade', 'Le running (terme anglais signifiant courir) est une pratique libre de la course à pied.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './asset/img/sports_activities/climbing.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idEvenement` (`idEvenement`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idEvenement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `idEvenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `date`
--
ALTER TABLE `date`
  ADD CONSTRAINT `date_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE,
  ADD CONSTRAINT `date_ibfk_2` FOREIGN KEY (`idEvenement`) REFERENCES `evenement` (`idEvenement`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
