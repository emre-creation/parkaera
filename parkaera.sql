-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 26 Octobre 2015 à 14:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `parkaera`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE IF NOT EXISTS `capteurs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rue` varchar(200) NOT NULL,
  `cp` varchar(6) NOT NULL,
  `ville` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `relais` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `capteurs`
--

INSERT INTO `capteurs` (`id`, `rue`, `cp`, `ville`, `latitude`, `longitude`, `relais`) VALUES
(1, 'rue de la fonderie', '68100', 1, 47.739899, 7.330876, 1),
(2, 'rue de la fonderie', '68100', 1, 47.740083, 7.331118, 1);

-- --------------------------------------------------------

--
-- Structure de la table `relais`
--

CREATE TABLE IF NOT EXISTS `relais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rue` varchar(200) NOT NULL,
  `cp` varchar(6) NOT NULL,
  `ville` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `relais`
--

INSERT INTO `relais` (`id`, `rue`, `cp`, `ville`, `latitude`, `longitude`) VALUES
(1, 'rue de la fonderie', '68100', 1, 47.739937, 7.330898);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(100) NOT NULL,
  `motdepass` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifiant` (`identifiant`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `identifiant`, `motdepass`, `mail`, `tel`, `timestamp`) VALUES
(1, 'efirst', '62b8c0b4de4a02c7be4f6eff67d8b6b5', 'emregenc52@gmail.com', '0643693524', 1445850307),
(9, 'efirsts', '62b8c0b4de4a02c7be4f6eff67d8b6b5', 'emregencs52@gmail.com', '0343693524', 1445864029);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE IF NOT EXISTS `villes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`) VALUES
(1, 'Mulhouse');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
