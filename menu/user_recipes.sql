-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 jan. 2025 à 23:34
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
-- Structure de la table `protéine`
--

DROP TABLE IF EXISTS `protéine`;
CREATE TABLE IF NOT EXISTS `protéine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Protéine` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `protéine`
--

INSERT INTO `protéine` (`id`, `Protéine`) VALUES
(1, 'Oeuf dur'),
(2, 'Jambon blanc'),
(3, 'Poulet rôti'),
(4, 'crevette'),
(5, 'Surimi'),
(6, 'Jambon cru');

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
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `price`, `category`, `image`) VALUES
(4, 'Poulet DG', 'Le poulet DG est un mets traditionnel de la cuisine camerounaise. C\'est un ragoût de poulet frit servi avec un cocktail de frites de plantains, de légumes (carottes, poivrons, haricots verts) et de divers aromates (herbes, bouillon cube). C\'est une recette simple, ne demandant que peu d\'ingrédients exotiques.', 15.00, '1', ''),
(3, 'Poulet boucane', 'Direction les îles avec le fameux poulet boucané qui se cuisine au barbecue ! Des cuisses de poulet, des morceaux de canne à sucre, du citron vert, une sauce chien et autres délices… une recette qui sent bon l’été ! Si elle est facile à faire, il faut la préparer la veille afin que le poulet ait le temps de bien mariner.', 12.00, '1', ''),
(5, 'Couscous', 'Le couscous royal1,2 est une variété de couscous probablement inventée en France3,4, servi avec le couscous la merguez, le poulet et la viande. Certains en rajoutent aussi des boulettes de viande hachée avec.', 18.00, '2', '');

-- --------------------------------------------------------

--
-- Structure de la table `salades`
--

DROP TABLE IF EXISTS `salades`;
CREATE TABLE IF NOT EXISTS `salades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_de_salades` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `salades`
--

INSERT INTO `salades` (`id`, `type_de_salades`) VALUES
(1, ' laitue batavia'),
(2, 'laitue iceberg'),
(3, 'laitue mélange'),
(4, ' laitue feuille de chêne'),
(5, 'La mâche'),
(6, 'épinard');

-- --------------------------------------------------------

--
-- Structure de la table `topping`
--

DROP TABLE IF EXISTS `topping`;
CREATE TABLE IF NOT EXISTS `topping` (
  `id` int NOT NULL AUTO_INCREMENT,
  `topping` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `topping`
--

INSERT INTO `topping` (`id`, `topping`) VALUES
(1, 'Tomates'),
(2, 'Brocolis'),
(3, 'Coleslaw'),
(4, 'Olives'),
(5, 'Chou rouge\r\n'),
(6, 'Carotte râpée\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
