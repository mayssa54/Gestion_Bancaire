-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 01 mai 2022 à 18:24
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `num_compte` int(11) NOT NULL,
  `lib_compte` varchar(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `solde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`num_compte`, `lib_compte`, `debit`, `credit`, `solde`) VALUES
(21054187, '', 231, 10, 161),
(21132658, '', 0, 0, 0),
(31254770, '', 0, 0, 0),
(41702365, '', 1500, 10, 60),
(54103298, '', 0, 0, 0),
(54123009, '', 0, 0, 0),
(65412514, '', 3912, 10, 632),
(66699981, '', 0, 0, 0),
(89745213, '', 4472, 10, 3392);

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `annee` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `jour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `date`
--

INSERT INTO `date` (`annee`, `mois`, `jour`) VALUES
(2022, 4, 2),
(2022, 4, 2),
(2022, 4, 3),
(2022, 4, 5),
(2022, 4, 6),
(2022, 4, 7),
(2022, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `mouvement`
--

CREATE TABLE `mouvement` (
  `num_mv` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `sens` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mouvement`
--

INSERT INTO `mouvement` (`num_mv`, `montant`, `sens`) VALUES
(1, 150, 'debit'),
(3, 100, 'credit '),
(5, 1400, 'debit'),
(6, 130, 'credit');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `code_op` int(11) NOT NULL,
  `lib_op` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`code_op`, `lib_op`) VALUES
(564, 'debit'),
(1233, 'credit '),
(1234, 'credit '),
(5641, 'credit '),
(6987, 'verif ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `adresse`) VALUES
(1, 'mayssa', '111000', 'mayssa ', 'tunis '),
(5, 'yassine', '555000', 'yassine ', 'tunis'),
(6, 'ahmed', '140140', 'ahmed ', 'tunis '),
(7, 'ali', '541698', 'ali', 'tunis '),
(8, 'mourad ', '301402', 'mourad', 'tunis'),
(9, 'slimen ', '401877', 'slimen ', 'tunis'),
(10, 'fourat ', '801901', 'fourat ', 'tunis'),
(11, 'khaled ', '104107', 'khaled ', 'tunis'),
(12, 'iheb', '901807', 'iheb', 'tunis ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`num_compte`);

--
-- Index pour la table `mouvement`
--
ALTER TABLE `mouvement`
  ADD PRIMARY KEY (`num_mv`);

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`code_op`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mouvement`
--
ALTER TABLE `mouvement`
  MODIFY `num_mv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `operation`
--
ALTER TABLE `operation`
  MODIFY `code_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6988;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
