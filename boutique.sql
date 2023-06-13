-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 15 mai 2022 à 13:28
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `Nom`) VALUES
(1, 'Beaute Et Sante'),
(2, 'Vetements Et Chaussures'),
(3, 'Telephone Et Tablette');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `pwdc` varchar(60) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `pwd`, `pwdc`, `tel`, `ville`, `adresse`) VALUES
(1, 'EL Mouden', 'ali', 'hindelmouden52@gmail.com', '123', '123', '0696365272', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(2, 'ali', 'ali', 'ali@gmail.com', '1212', '1212', '3456789', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(3, 'EL Mouden', 'Hind', 'hindelmouden52@gmail.com', '1212', '1212', '34567567', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(4, 'EL Mouden', 'Hind', 'hindelmouden52@gmail.com', '11', '11', '3456789', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(5, 'EL Mouden', 'Hind', 'hindelmouden52@gmail.com', '', '', '3456789', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(6, 'EL Mouden', 'Hind', 'hindelmouden52@gmail.com', '', '', '3456789', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(7, 'tets', 'dzdzdf', 'hindelmouden52@gmail.com', '1212', '1212', '34567567', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(8, 'tets', 'dzdzdf', 'hindelmouden52@gmail.com', '1212', '1212', '34567567', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE'),
(9, 'malak', 'malk', 'hindelmouden52@gmail.com', '12', '12', '34567567', 'SalÃ©', 'NR 14 RUE JABEL ARDOUZ HAY NASR KARIA SALE');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `id_clt` int(11) NOT NULL AUTO_INCREMENT,
  `id_prod` int(33) DEFAULT NULL,
  `mode_paiement` enum('livraison','par cart') NOT NULL,
  `date` timestamp NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id_clt`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id_clt`, `id_prod`, `mode_paiement`, `date`, `quantite`) VALUES
(5, NULL, 'livraison', '2022-05-12 22:54:49', 0),
(29, NULL, 'par cart', '2022-05-15 13:26:53', 99);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `Reference` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `IdCat` int(11) NOT NULL,
  PRIMARY KEY (`Reference`),
  KEY `IdCat` (`IdCat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Reference`, `Nom`, `Prix`, `Image`, `Description`, `IdCat`) VALUES
(1, 'dell-inspiron-15-5000-15-6', 5990, 'images/dell-inspiron-15-5000-15-6.jpg', '<p>Dell&#39;s 15.6-inch, midrange notebook is a bland, chunky block. It has long been the case that the Inspiron lineup lacks any sort of aesthetic muse, and the Inspiron 15 5000 follows this trend. It&#39;s a plastic, silver slab bearing Dell&#39;s logo in a mirror sheen.</p>\r\n\r\n<p>Lifting the lid reveals the 15.6-inch, 1080p screen surrounded by an almost offensively thick bezel and a plastic deck with a faux brushed-metal look. There&#39;s a fingerprint reader on the power button, and the keyboard is a black collection of island-style keys.</p>\r\n', 3),
(2, 'large-dell-inspiron-15-5000-15', 4490, 'images/large-dell-inspiron-15-5000-15.jpg', '<p>15-inch laptop delivering an exceptional viewing experience, a head-turning finish and an array of options designed to elevate your entertainment, wherever you go.</p>', 3),
(3, 'tablet alexa-2017-32 gb-black', 7000, 'images/amazon-fire-hd-8-tablet-alexa-2017-32-gb-black.jpg', '<p>The next generation of our best-reviewed Fire tablet, with up to 12 hours of battery life, a vibrant 8&quot; HD display, a 1.3 GHz quad-core processor, 1.5 GB of RAM, and Dolby Audio. More durable than the latest iPad.</p>\r\n\r\n<p>16 or 32 GB of internal storage and a microSD slot for up to 256 GB of expandable storage.</p>\r\n', 3),
(4, 'apple-9-7-ipad-32-gb-gold', 7500, 'images/apple-9-7-ipad-32-gb-gold.jpg', '<p>9.7 inch Retina Display, 2048 x 1536 Resolution, Wide Color and True Tone Display</p>\r\n\r\n<p>Apple iOS 9, A9X chip with 64bit architecture, M9 coprocessor</p>\r\n\r\n<p>12 MP iSight Camera, True Tone Flash, Panorama (up to 63MP), Four-Speaker Audio</p>\r\n\r\n<p>Up to 10 Hours of Battery Life</p>\r\n\r\n<p>iPad Pro Supports Apple Smart Keyboard and Apple Pencil</p>\r\n', 3),
(5, 'NIVEA Gel douche ', 33, 'images/NIVEA_Gel_douche-Clay-Hibiscus-2x250ml.jpg', 'NIVEA Gel douche - Clay Hibiscus - 2x250ml', 1),
(6, 'Sérum vitamine C', 150, 'images/CHRISTELLE_PARIS.jpg', 'CHRISTELLE PARIS Sérum vitamine C+E+COLLAGEN anti-rides anti-âge pour blanchiment de peau Naturelle', 1),
(7, 'Rouge à Lèvre Mat Liquide', 75, 'images/mybelin.jpg', 'Maybelline New York Maybelline - Rouge à Lèvre Mat Liquide - Longue Tenue - Superstay Matte Ink - 15 Lover 5ml', 1),
(8, 'Anti-cernes correcteur fluide', 83, 'images/Anti.jpg', 'Maybelline New York Maybelline Intant Anti Age l\'effaceur - Anti-cernes correcteur fluide - 04 HONEY - 6,8 ml', 1),
(9, 'Chaussures de sport homme ', 154, 'images/sport.jpg', 'Chaussures de sport homme Sneakers homme Décontractées mens fashionable sneakers', 2),
(10, 'Chaussures de sport Adidas', 435, 'images/Adidas.jpg', 'Adidas Chaussures Homme EG9705 RUNNING Edge XT', 2),
(11, 'Jacket Homme-Automne blanc', 110, 'images/Jacket.jpg', 'Jacket Homme-Automne blanc cassé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `type` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `pwd`, `type`) VALUES
(1, 'admin', '123', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_Categorie_Produit` FOREIGN KEY (`IdCat`) REFERENCES `categorie` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
