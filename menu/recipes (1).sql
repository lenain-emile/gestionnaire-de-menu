-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 29 jan. 2025 à 13:16
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user_recipes`
--

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `price`, `category`, `image`) VALUES
(4, 'Poulet DG', 'Le poulet DG est un mets traditionnel de la cuisine camerounaise. C\'est un ragoût de poulet frit servi avec un cocktail de frites de plantains, de légumes (carottes, poivrons, haricots verts) et de divers aromates (herbes, bouillon cube). C\'est une recette simple, ne demandant que peu d\'ingrédients exotiques.', 15.00, '1', ''),
(3, 'Poulet boucane', 'Direction les îles avec le fameux poulet boucané qui se cuisine au barbecue ! Des cuisses de poulet, des morceaux de canne à sucre, du citron vert, une sauce chien et autres délices… une recette qui sent bon l’été ! Si elle est facile à faire, il faut la préparer la veille afin que le poulet ait le temps de bien mariner.', 12.00, '1', ''),
(5, 'Couscous', 'Le couscous royal1,2 est une variété de couscous probablement inventée en France3,4, servi avec le couscous la merguez, le poulet et la viande. Certains en rajoutent aussi des boulettes de viande hachée avec.', 18.00, '2', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
