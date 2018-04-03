-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 03 avr. 2018 à 10:38
-- Version du serveur :  5.7.20
-- Version de PHP :  7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `esporthq`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudonyme` varchar(25) NOT NULL,
  `motdepasse` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudonyme`, `motdepasse`) VALUES
(1, 'sudo', 'sudoroot'),
(2, 'nadine', 'nadine');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `idEquipe` int(11) NOT NULL,
  `idJeu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `composition` text NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`idEquipe`, `idJeu`, `nom`, `composition`, `logo`) VALUES
(1, 1, 'FaZe', 'karrigan\r\nolofmeister\r\nGuardiaN\r\nNiKo\r\nrain', 'logo-faze.jpg'),
(2, 1, 'Cloud9', 'Skadoodle\r\nRUSH\r\ntarik\r\nautimatic\r\nStewie2K', 'logo-cloud9.jpg'),
(3, 1, 'SK', 'FalleN\r\nfer\r\nboltz\r\ncoldzera\r\nTACO', 'logo-sk.jpg'),
(4, 2, 'Fnatic', 'sOAZ\r\nBroxah\r\nCaps\r\nRekkles\r\nHylissang\r\nBwipo\r\nJesiz', 'logo-fnatic.jpg'),
(5, 2, 'G2 Esports', 'Wunder\r\nJankos\r\nPerkz\r\nHjarnan\r\nWadid\r\nSacre', 'logo-g2-esport.jpg'),
(6, 3, 'Dallas Fuel', 'OGE\r\nRascal\r\naKm\r\nCusta\r\nTaimou\r\nEFFECT\r\nSeagull\r\nMickie\r\ncocco\r\nchipshajen\r\nHarryHook', 'logo-dallas-fuel.jpg'),
(7, 3, 'San Francisco Shock', 'Architect\r\nmoth\r\niddqd\r\nbabybay\r\nDanteh\r\nNevix\r\nnomy\r\ndhaK\r\nsleepy', 'logo-san-francisco-shock.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `idJeu` int(11) NOT NULL,
  `description` text NOT NULL,
  `editeur` text NOT NULL,
  `nom` text NOT NULL,
  `anneePublication` date NOT NULL,
  `cashPrizeMax` decimal(10,2) NOT NULL,
  `spectateursMax` int(11) NOT NULL,
  `dernierTournoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`idJeu`, `description`, `editeur`, `nom`, `anneePublication`, `cashPrizeMax`, `spectateursMax`, `dernierTournoi`) VALUES
(1, 'Counter-Strike: Global Offensive est un jeu de tir à la première personne multijoueur en ligne basé sur le jeu d&#39;équipe.', 'Valve Corporation', 'Counter-Strike: Global Offensive', '2012-08-21', '1100000.00', 1897741, 'ELEAGUE Major: Boston'),
(2, 'Que vous jouiez en solo ou en coopération avec des amis, League of Legends est un jeu de stratégie/action et hautement compétitif, couçu pour ceux qui aiment se battre pour la victoire.', 'Riot Games', 'League of Legends', '2009-10-27', '5070000.00', 106210010, 'LPL Spring 2018'),
(3, 'Overwatch est un jeu vidéo de tir en vue subjective, en équipes et en ligne.', 'Blizzard Entertainment', 'Overwatch', '2016-05-25', '3500000.00', 2654222, 'Overwatch League - Inaugural Season');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudonyme` varchar(25) NOT NULL,
  `motdepasse` varchar(25) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `genre` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`idEquipe`);

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`idJeu`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `idEquipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `idJeu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
