-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2024 at 11:29 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp1-site_marchand`
--

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id_material` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `description`) VALUES
(1, 'Acier inoxydable'),
(2, 'Argent');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `prix` int NOT NULL,
  `id_material` int NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantite` int NOT NULL,
  PRIMARY KEY (`id_produit`) USING BTREE,
  KEY `fk_produit_material1_idx` (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `type`, `description`, `prix`, `id_material`, `image`, `quantite`) VALUES
(1, 'Collier', 'Magnifique collier de perles, délicat et de haute qualité.', 87, 1, '1.jpeg', 13),
(2, 'Boucle', 'Magnifique boucle d\'oreille conçue par un artiste, après avoir passé un mois en Amazonie.', 65, 1, '2.jpeg', 10),
(3, 'Collier', 'Si votre place est la mer, cette belle pièce a été faite pour vous.', 104, 2, '3.jpeg', 5),
(4, 'Boucle', 'Boucle d\'oreille qui apporte l\'importance de l\'asymétrie et de la symétrie. Tout dépend de votre point de vue.', 2, 1, '4.jpeg', 2),
(30, 'Collier', 'Travail pratique finale', 2, 1, 'WhatsApp Image 2021-09-14 at 2.34.57 PM (1).jpeg', 1),
(31, 'Collier', 'Apprenez le portugais tous les jeudis matin. Le coût du cours sera de 10 CAD pour une heure de conversation.', 3, 1, 'WhatsApp Image 2021-09-14 at 2.34.58 PM.jpeg', 5),
(32, 'Collier', 'Travail pratique finale', 4, 1, 'WhatsApp Image 2021-09-15 at 2.31.58 PM (1).jpeg', 4);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
