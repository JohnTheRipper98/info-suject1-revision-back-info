-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Sam 08 Mai 2021 à 15:01
-- Version du serveur: 5.5.10
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bd000000`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `nume` varchar(4) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `emaile` varchar(20) NOT NULL,
  `sexe` enum('H','F') NOT NULL,
  `ville` varchar(10) NOT NULL,
  PRIMARY KEY (`nume`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleve`
--

INSERT INTO `eleve` (`nume`, `nome`, `emaile`, `sexe`, `ville`) VALUES
('E101', 'Brahmi', 'brahim@yahoo.fr', 'H', 'Ariana'),
('E124', 'AmineAA', 'amine5@gmail.com', 'H', 'Ben Arous'),
('E243', 'Amal', 'amal@gmail.com', 'F', 'Manouba'),
('E254', 'Zribi', 'zribi@gmail.com', 'F', 'Tunis'),
('E324', 'Malek', 'malek@gmail.com', 'F', 'Ariana'),
('E963', 'john', 'johnnewyak@gmail.com', 'H', 'Manouba');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `codem` varchar(3) NOT NULL,
  `nume` varchar(4) NOT NULL,
  `libellem` varchar(10) NOT NULL,
  `coefm` decimal(3,1) NOT NULL,
  PRIMARY KEY (`codem`),
  KEY `nume` (`nume`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `matiere`
--

INSERT INTO `matiere` (`codem`, `nume`, `libellem`, `coefm`) VALUES
('M25', 'E254', 'TIC', 1.5),
('M39', 'E101', '1BD', 1.5);
