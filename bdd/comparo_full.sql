-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 07 mars 2023 à 13:25
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `comparo_full`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Michel'),
(2, 'René'),
(3, 'Paul');

-- --------------------------------------------------------

--
-- Structure de la table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `tour_operator_id` int(11) NOT NULL,
  `image1` TEXT(255) NOT NULL,
  `image2` TEXT(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `location`, `price`, `tour_operator_id`, `image1`,`image2`) VALUES
(1, 'Rome', 1650, 2, 'assets/images/rome-1.jpg', 'assets/images/rome-2.jpg'),
(2, 'London', 1100, 2, 'assets/images/london-1.jpg', 'assets/images/london-2.jpg'),
(3, 'Monaco', 1390, 1, 'assets/images/monaco_1.jpg', 'assets/images/monaco-2.jpg'),
(4, 'Paris', 1190, 3, 'assets/images/paris-1.jpg', 'assets/images/paris-2.jpg'),
(5, 'New York ', 2390, 2, 'assets/images/newYork-1.jpg', 'assets/images/newYork-2.jpg'),
(6, 'Venise', 1590, 1, 'assets/images/venise-1.jpg', 'assets/images/venise-2.jpg'),
(7, 'Amsterdam', 2890, 1, 'assets/images/amsterdam-1.jpg', 'assets/images/amsterdam-2.jpg'),
(8, 'Hong Kong', 2390, 2, 'assets/images/hongKong-1.jpg', 'assets/images/hongKong-2.jpg'),
(9, 'Japon', 2390, 3, 'assets/images/japon-1.jpg', 'assets/images/japon-2.jpg'),
(10, 'Mexico', 90, 2, 'assets/images/mexico-1.jpg', 'assets/images/mexico-2.jpg'),
(11, 'Los Angeles', 2390, 3, 'assets/images/losAngeles-1.jpg', 'assets/images/losAngeles-2.jpg'),
(12, 'Muraille de Chine', 12390, 3, 'assets/images/murailleChine-1.JPG', 'assets/images/murailleChine-2.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `tour_operator_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id`, `message`, `tour_operator_id`, `author_id`) VALUES
(1, "Super voyage, prestation au top !!", 2, 1),
(2, "Tout est inclus dans le prix, c'est cool, je recommande", 3, 3),
(3, "Un peu cher, mais ça vaut le coup", 2, 3),
(4, "arnaque!!!! a fuire!!!", 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `tour_operator_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`id`, `value`, `tour_operator_id`, `author_id`) VALUES
(1, 5, 2, 1),
(2, 4, 3, 3),
(3, 1, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tour_operator`
--

CREATE TABLE `tour_operator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `logo` TEXT(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tour_operator`
--

INSERT INTO `tour_operator` (`id`, `name`, `link` , `logo`) VALUES
(1, 'Salaun Holidays', 'https://www.salaun-holidays.com/', "assets/logo/salaun-holidays.jpg"),
(2, 'Fram', 'https://www.fram.fr/', "assets/logo/fram.jpg"),
(3, 'Heliades', 'https://www.heliades.fr/', "assets/logo/heliades.jpg");

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
