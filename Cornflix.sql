-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : a70j0.myd.infomaniak.com
-- Généré le :  mer. 30 oct. 2019 à 16:45
-- Version du serveur :  5.7.26-log
-- Version de PHP :  7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `a70j0_bdd_ehanon`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `id_movie` int(7) NOT NULL,
  `username` varchar(100) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comment_series`
--

CREATE TABLE `comment_series` (
  `id` int(3) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `user_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`user_id`, `name`, `lastname`, `email`, `username`, `password`, `rank`) VALUES
(1, 'admin', 'Kornflix', 'admin@kornflix.be', 'admin', '$2y$10$9CS4r4iFLfhva.5xvQAEOeLm4ig/Im0YMo3fRqcDSiAGMNCQJFV6G', 1),
(2, 'Serbest', 'Bunyamin', 'bunyamin.srbst@gmail.com', 'bunyamin', '$2y$10$9CS4r4iFLfhva.5xvQAEOeLm4ig/Im0YMo3fRqcDSiAGMNCQJFV6G', 2),
(3, 'Ryckaert', 'Kevin', 'ryckaertkevin@gmail.com', 'kevin', '$2y$10$9CS4r4iFLfhva.5xvQAEOeLm4ig/Im0YMo3fRqcDSiAGMNCQJFV6G', 2),
(8, 'Hanon', 'MikhaÃ¯l', 'mike.hanon@gmail.com', 'kimaosama', '$2y$10$UjAKZA.kx0Lb8fmMRaUZcejYrUUOS28dQbHkBgnNg44.l4rBIKNJi', 2),
(9, 'personne', 'paul', 'personne@paul.com', 'personne', '$2y$10$N2zR4HmB0DpsJk5f09IW7OrcUe/dTGawQGaI6mLcv/KEMddu66CTC', 2);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `comment_series`
--
ALTER TABLE `comment_series`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `comment_series`
--
ALTER TABLE `comment_series`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
