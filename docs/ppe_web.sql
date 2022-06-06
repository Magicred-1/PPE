-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 juin 2022 à 12:17
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
-- Base de données : `ppe_web_mvc`
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
  `villeClient` varchar(64) NOT NULL,
  `isAdmin` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `emailClient`, `mdpClient`, `ageClient`, `villeClient`, `isAdmin`) VALUES
(1, 'Gadiou', 'Djason', 'djasongadiou@gmail.com', '$2y$10$slf0tld/Gt9z5a6AQ1xW2.dneN3lmBAPDMd5QADvwuipFVq04RYOu', 21, 'Mitry Mory', NULL),
(2, 'Atlani', 'Samuel', 'samsam@gmail.com', '$2y$10$Dlqmd4e0Gb8g70jAtp4bdu1PIgwm/HyR83BfthgwBMiTAW8LMJDUy', 19, 'Maisons-Alfort', NULL),
(3, 'Boughriet', 'Ryan', 'ryan.boughriet@gmail.com', '$2y$10$k50EZ.wnlVOBk.gsneHqm.zegkKcX0YIv9eQUVfAwKBkdfW4Hwgk2', 22, 'Paris', NULL),
(6, 'Haddadi', 'Areslane', 'haddadi.areslane@gmail.com', '$2y$10$3ZOJz0AHsI4/AV5FkAFXPe3e.5QSVo2NfOT1gfgTOYF4ovjzKKucm', 19, 'Aubervilliers', NULL),
(7, 'Myxa', 'Caracal', 'myxa@gmail.com', '$2y$10$6uPKGagdsHJPZBXCxz8vBuAWknlt5/jFVk7XPEvQcgC/XN47/xn.6', 20, 'Paris', NULL),
(8, 'Oussama', 'Dabachil', 'oussama.dabachil@gmail.com', '$2y$10$3NcF30.MuSGTNXWtBMX2rOWrfJb.J6hwlcVbm.vpP5vSxABIK/Wde', 20, 'Agadir', NULL),
(9, 'Ryan', 'Vaugarni', 'ryan.vaugarni@gmail.com', '$2y$10$D6aZUiHahZl27eUIlHAoKeigUq/bvGPvW4ts2bHAV8o4Aw.RqfhDK', 19, 'Sartrouville', b'1'),
(10, 'Andrieu', 'Quentin', 'quentin.andrieu@gmail.com', '$2y$10$bb8mPhoAHKigOESuaE/Q9.mMmQXIGRZmPWbbteJLE2bpB.fdhkdk.', 19, 'Paris', NULL);

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
('2022-06-02 15:02:21', 9, 3),
('2022-06-03 15:37:02', 9, 5),
('2022-06-03 15:37:05', 9, 4),
('2022-06-03 15:37:08', 9, 3),
('2022-06-03 15:37:10', 9, 3),
('2022-06-03 15:37:13', 9, 2),
('2022-06-03 15:37:16', 9, 1),
('2022-06-03 15:37:51', 9, 2),
('2022-06-03 15:37:55', 9, 2),
('2022-06-03 15:38:56', 9, 3),
('2022-06-03 15:39:54', 9, 2),
('2022-06-03 15:39:59', 9, 1),
('2022-06-03 15:40:22', 9, 2),
('2022-06-03 15:40:30', 9, 2),
('2022-06-03 15:40:40', 9, 5),
('2022-06-03 15:41:54', 9, 3),
('2022-06-03 15:43:29', 9, 3),
('2022-06-03 15:43:39', 9, 5),
('2022-06-03 15:44:30', 9, 2),
('2022-06-03 15:44:36', 9, 1),
('2022-06-03 15:44:41', 9, 5),
('2022-06-03 22:59:29', 9, 2),
('2022-06-03 22:59:46', 9, 2),
('2022-06-03 23:01:01', 9, 2),
('2022-06-03 23:01:14', 9, 2),
('2022-06-03 23:12:04', 10, 3),
('2022-06-03 23:12:07', 10, 5),
('2022-06-03 23:12:10', 10, 4),
('2022-06-03 23:12:13', 10, 4),
('2022-06-03 23:12:15', 10, 3),
('2022-06-03 23:12:18', 10, 2),
('2022-06-03 23:12:20', 10, 1),
('2022-06-03 23:26:54', 10, 2),
('2022-06-03 23:27:52', 10, 4),
('2022-06-03 23:28:08', 10, 3),
('2022-06-03 23:30:49', 10, 3),
('2022-06-03 23:34:10', 10, 3),
('2022-06-03 23:34:50', 10, 2),
('2022-06-03 23:36:07', 10, 4),
('2022-06-03 23:40:13', 10, 5),
('2022-06-03 23:40:16', 10, 5),
('2022-06-06 11:12:03', 9, 5),
('2022-06-06 11:14:09', 9, 5),
('2022-06-06 12:05:28', 9, 1),
('2022-06-06 12:12:54', 9, 5),
('2022-06-06 12:15:44', 9, 1),
('2022-06-06 12:16:44', 9, 1);

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
(1, 'Basketball', 'Le basket-ball ou basketball est un sport collectif qui se joue à la main avec un ballon.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './assets/img/sports_activities/basketball.jpg'),
(2, 'Deadlift', 'Le soulevé de terre est un exercice polyarticulaire de force et de musculation.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './assets/img/sports_activities/lifting.jpg'),
(3, 'Running', 'Le running (terme anglais signifiant courir) est une pratique libre de la course à pied.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './assets/img/sports_activities/running.jpg'),
(4, 'Natation', 'La natation sportive consiste à parcourir dans une piscine', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './assets/img/sports_activities/swimming.jpg'),
(5, 'Escalade', 'Le running (terme anglais signifiant courir) est une pratique libre de la course à pied.', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './assets/img/sports_activities/climbing.jpg');

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
  ADD PRIMARY KEY (`dateConsultation`),
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
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `idEvenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
