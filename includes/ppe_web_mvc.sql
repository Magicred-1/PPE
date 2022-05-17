-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 mai 2022 à 23:44
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
  `villeClient` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `emailClient`, `mdpClient`, `ageClient`, `villeClient`) VALUES
(1, 'Gadiou', 'Djason', 'djasongadiou@gmail.com', '$2y$10$g/fMYVMFHVr8z4VusC7RcegbQPwRqfkKcedzAdLwT89c/ctioiNLO', 21, 'Mitry Mory'),
(2, 'Atlani', 'Samuel', 'samsam@gmail.com', '$2y$10$Dlqmd4e0Gb8g70jAtp4bdu1PIgwm/HyR83BfthgwBMiTAW8LMJDUy', 19, 'Maisons-Alfort'),
(3, 'Boughriet', 'Ryan', 'ryan.boughriet@gmail.com', '$2y$10$VmIU1Kwg1MLPMLvMVeUd0e/wS.EZTnwEzLseDBNYjxiJy4Zeo.742', 22, 'Esbly'),
(4, 'Biogeau', 'Antoine', 'johnnysins@beubeuh.com', '$2y$10$.7OpphsyZY3COLAN.WBT/OKro7b3p5P3uSEfOcMPwIIGYUi4tz5zy', 19, 'Paris'),
(5, 'Biogeau', 'Antoine', 'johnnysins@pornhub.com', '$2y$10$MPhbaOacLTk0/fEiRpRfGej9RdOZwX1xQkOVLFXerSQ3.cLOGqcbm', 19, 'Paris');

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
('2022-05-10 16:16:14', 1, 4),
('2022-05-10 16:44:42', 1, 5),
('2022-05-10 17:52:53', 1, 5),
('2022-05-10 17:53:25', 1, 1),
('2022-05-10 17:55:11', 1, 1),
('2022-05-10 17:55:13', 1, 1),
('2022-05-10 17:55:34', 1, 1),
('2022-05-10 17:55:37', 1, 2),
('2022-05-10 17:55:48', 1, 2),
('2022-05-10 17:55:50', 1, 1),
('2022-05-10 17:56:31', 1, 1),
('2022-05-10 17:56:34', 1, 1),
('2022-05-10 18:08:29', 1, 1),
('2022-05-10 18:08:31', 1, 1),
('2022-05-10 18:08:54', 1, 1),
('2022-05-10 18:08:58', 1, 2),
('2022-05-10 18:09:55', 1, 2),
('2022-05-10 18:09:57', 1, 1),
('2022-05-10 18:10:15', 1, 1),
('2022-05-10 18:10:17', 1, 1),
('2022-05-10 18:11:54', 1, 1),
('2022-05-10 18:12:26', 1, 1),
('2022-05-10 18:12:30', 1, 1),
('2022-05-10 18:13:08', 1, 1),
('2022-05-10 18:13:14', 1, 2),
('2022-05-10 18:24:17', 1, 1),
('2022-05-10 18:25:35', 1, 1),
('2022-05-10 18:26:16', 1, 1),
('2022-05-10 18:26:18', 1, 1),
('2022-05-10 18:27:03', 1, 1),
('2022-05-10 18:27:05', 1, 1),
('2022-05-10 18:27:38', 1, 1),
('2022-05-10 18:30:38', 1, 1),
('2022-05-10 22:20:43', 1, 5),
('2022-05-10 22:22:12', 1, 5),
('2022-05-10 22:22:24', 1, 5),
('2022-05-10 22:22:37', 1, 5),
('2022-05-10 22:23:01', 1, 1),
('2022-05-10 22:28:01', 1, 1),
('2022-05-10 22:32:18', 1, 1),
('2022-05-10 22:32:32', 1, 1),
('2022-05-10 22:32:33', 1, 1),
('2022-05-10 22:32:40', 1, 2),
('2022-05-10 22:35:21', 1, 1),
('2022-05-10 22:35:22', 1, 1),
('2022-05-10 22:53:54', 1, 1),
('2022-05-10 22:55:05', 1, 1),
('2022-05-10 23:09:50', 1, 1),
('2022-05-10 23:09:51', 1, 1),
('2022-05-10 23:09:54', 1, 1),
('2022-05-10 23:09:59', 1, 1),
('2022-05-10 23:10:00', 1, 1),
('2022-05-10 23:10:03', 1, 1),
('2022-05-10 23:28:01', 1, 1),
('2022-05-10 23:29:35', 1, 1),
('2022-05-10 23:31:01', 1, 1),
('2022-05-10 23:31:17', 1, 1),
('2022-05-11 13:00:30', 1, 1),
('2022-05-11 13:06:57', 1, 1),
('2022-05-11 13:07:33', 1, 3),
('2022-05-11 14:49:11', 1, 3),
('2022-05-11 14:49:47', 1, 1),
('2022-05-11 14:49:49', 1, 1),
('2022-05-12 15:06:58', 1, 3),
('2022-05-12 15:07:43', 1, 3),
('2022-05-12 15:07:44', 1, 1),
('2022-05-12 15:08:01', 1, 1),
('2022-05-12 15:08:03', 1, 1),
('2022-05-12 15:09:02', 1, 1),
('2022-05-12 15:09:03', 1, 1),
('2022-05-12 15:09:05', 1, 1),
('2022-05-14 16:17:25', 1, 1),
('2022-05-14 16:17:26', 1, 1),
('2022-05-16 20:57:19', 1, 2),
('2022-05-16 20:57:31', 1, 2),
('2022-05-16 20:57:34', 1, 3),
('2022-05-16 20:57:35', 1, 1);

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
(4, 'Natation', 'La natation', '2022-05-10 00:12:24', '2022-05-10 00:12:24', './assets/img/sports_activities/swimming.jpg'),
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
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
