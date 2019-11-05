-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : a70j0.myd.infomaniak.com
-- Généré le :  mar. 05 nov. 2019 à 08:57
-- Version du serveur :  5.7.26-log
-- Version de PHP :  7.2.24

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
  `id_movie` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`ID`, `id_movie`, `username`, `comment`, `date`) VALUES
(15, 420818, 'kimao', 'je préfere l\'original', '2019-10-30'),
(16, 1622, 'kimao', 'tro cool !!!', '2019-10-30'),
(17, 475557, 'Nico', 'Haloween?', '2019-10-30'),
(18, 420809, 'admin', 'super film', '2019-10-31'),
(19, 475557, 'Karim', 'Terrrrible Filme', '2019-10-31'),
(20, 10296, 'Karim', 'Hooligane', '2019-10-31'),
(21, 475557, 'LolaLove', '<3\r\n', '2019-10-31'),
(22, 475557, 'kevin', 'love movie', '2019-10-31'),
(23, 1412, 'Flya', 'C\'est pas trop Arrow ça les gars.... va falloir me corriger tout ça pour lundi!', '2019-10-31'),
(24, 420818, 'bunyamin', 'à voir..', '2019-10-31'),
(25, 420818, 'Jules', 'pas topce film', '2019-11-02'),
(26, 481084, 'bunyamin', 'm+ansur', '2019-11-02'),
(27, 420809, 'admin', 'pas top ce film', '2019-11-04');

-- --------------------------------------------------------

--
-- Structure de la table `comment_series`
--

CREATE TABLE `comment_series` (
  `id` int(3) NOT NULL,
  `id_serie` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
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
  `rank` int(2) NOT NULL DEFAULT '2',
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`user_id`, `name`, `lastname`, `email`, `username`, `password`, `rank`, `avatar`) VALUES
(1, 'admin', 'Kornflix', 'admin@kornflix.be', 'admin', '$2y$10$9CS4r4iFLfhva.5xvQAEOeLm4ig/Im0YMo3fRqcDSiAGMNCQJFV6G', 1, 'avatar/_Bearded_Man-17-512.png'),
(2, 'Serbest', 'Bunyamin', 'bunyamin.srbst@gmail.com', 'bunyamin', '$2y$10$9CS4r4iFLfhva.5xvQAEOeLm4ig/Im0YMo3fRqcDSiAGMNCQJFV6G', 2, ''),
(3, 'Ryckaert', 'Kevin', 'ryckaertkevin@gmail.com', 'kevin', '$2y$10$Wg73FbcG1JChfy1uBTOUI.FBr2/YmM764n3pcPJ6qhDDBJksmRmG6', 2, ''),
(8, 'Hanon', 'MikhaÃ¯l', 'mike.hanon@gmail.com', 'kimaosama', '$2y$10$UjAKZA.kx0Lb8fmMRaUZcejYrUUOS28dQbHkBgnNg44.l4rBIKNJi', 2, ''),
(9, 'personne', 'paul', 'personne@paul.com', 'personne', '$2y$10$N2zR4HmB0DpsJk5f09IW7OrcUe/dTGawQGaI6mLcv/KEMddu66CTC', 2, ''),
(10, 'Petrovska', 'Yuri', 'tomtom@gmail.com', 'Yurifuri', '$2y$10$u5VENuMZ7/B1/8HuU8V7oeNigPokW9JmMKWsaIupEFcgkvL/JFzOi', 2, ''),
(12, 'Benloulou', 'Karim', 'Karim@ben.be', 'Karim', '$2y$10$xxF9VHHu67O1z8A53H44leA1si2yvdAN3ZxKKCxgVCQ0K9LaMWkXm', 2, ''),
(13, 'Vanpipe', 'Lola', 'lola@msn.be', 'LolaLove', '$2y$10$u6IMNlfc.zda.KN8AbD.a.VH4zhYMGHRQhS19ii.atKUi5ukP/oJ.', 2, ''),
(14, 'Flya', 'Dutchma', 'Flya.Dutchma@hotmail.com', 'Flya', '$2y$10$Wo8MbR2r.7Bmk8rDHNc1ru40UqX1sgmoirXHmhF1lYk8mOGc6fPF2', 2, ''),
(15, 'Jules', 'Jules', 'jules@jules.com', 'Jules', '$2y$10$2TMQk4IVV8GbEgO.ECOP8u5uMWCWr.w3q2rLo72kTISBNoHPoIkRm', 2, ''),
(16, 'Nico', 'Nico', 'nico@gmail.com', 'Nico', '$2y$10$CsUtyrfUfIk0zE1OH15Ce.kD6UcvrLuo59BWqZ7Wh4a2onhEoaOH6', 2, 'avatar/screenshot1.png');

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
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `username`, `email`, `subject`, `message`) VALUES
(1, 'mike', 'mike.hanon@gmail.com', 'jfiamemfjqem', 'ceci est un test'),
(2, 'mike', 'mike.hanon@gmail.com', 'jfiamemfjqem', 'ce ci est un message');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `comment_series`
--
ALTER TABLE `comment_series`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
