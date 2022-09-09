-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 sep. 2022 à 16:48
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
-- Base de données : `stampee`
--

-- --------------------------------------------------------

--
-- Structure de la table `condition`
--

DROP TABLE IF EXISTS `condition`;
CREATE TABLE IF NOT EXISTS `condition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `condition` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `condition`
--

INSERT INTO `condition` (`id`, `condition`) VALUES
(1, 'Gomme originale: timbres qui n\'ont pas été utilisés auparavant.'),
(2, 'Regommé: fait pour améliorer la condition d\'un timbre.'),
(3, 'Neuf sans gomme: timbres que n\'ont aucune gomme ou colle sur leurs revers.'),
(4, 'Gomme articulé: Un timbre qui a sauvé les traces de mont articulé.'),
(5, 'Utilisation postale: article philatélique qui a sa gomme originale qui n\'a été jamais utilisée et collé.');

-- --------------------------------------------------------

--
-- Structure de la table `enchere`
--

DROP TABLE IF EXISTS `enchere`;
CREATE TABLE IF NOT EXISTS `enchere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix_plancher` double NOT NULL,
  `pieces` int(11) NOT NULL,
  `archive` tinyint(1) DEFAULT NULL,
  `timbre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_enchere_timbre1_idx` (`timbre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enchere`
--

INSERT INTO `enchere` (`id`, `date_debut`, `date_fin`, `prix_plancher`, `pieces`, `archive`, `timbre_id`) VALUES
(1, '2022-10-17', '2022-11-28', 3005, 6, 0, 1),
(2, '2020-06-15', '2020-07-21', 525, 4, 0, 3),
(3, '2021-02-12', '2021-04-25', 2042, 5, 0, 1),
(4, '2022-03-10', '2022-05-22', 5483, 3, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image_principale` tinyint(1) NOT NULL,
  `timbre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_timbre_idx` (`timbre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prix` double DEFAULT NULL,
  `enchere_id` int(11) NOT NULL,
  `usager_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_offre_enchere1_idx` (`enchere_id`),
  KEY `fk_offre_usager1_idx` (`usager_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `timbre`
--

DROP TABLE IF EXISTS `timbre`;
CREATE TABLE IF NOT EXISTS `timbre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `date_creation` year(4) DEFAULT NULL,
  `pays_origine` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `certificat` varchar(10) DEFAULT NULL,
  `condition_id` int(11) NOT NULL,
  `usager_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_timbre_condition1_idx` (`condition_id`),
  KEY `fk_timbre_usager1_idx` (`usager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `timbre`
--

INSERT INTO `timbre` (`id`, `nom`, `date_creation`, `pays_origine`, `description`, `dimensions`, `certificat`, `condition_id`, `usager_id`) VALUES
(1, 'Canada VF Mint Rare Pair', 1922, 'Canada', 'Canada #30a Very Fine Mint Rare Pair, Perf 11.5 x 12, Full Original Gum, Lightly Hinged, With Certificate.', '5cm x 4cm', 'CH95874325', 2, 3),
(3, 'First Official U.S. Airmail Flight 24¢ Jenny', 1918, 'États-Unis', 'Carmine rose et bleu', '5.5cm x 4.3cm', 'US98247355', 2, 3),
(11, 'Newfoundland #222a XF Mint Imperf Block Ungummed As Issued', 1987, 'Canada', 'Newfoundland Extra Fine Mint Imperf Block Ungummed As Issued On Watermarked Paper', '5cm x 4cm', 'BH1101524Z', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

DROP TABLE IF EXISTS `usager`;
CREATE TABLE IF NOT EXISTS `usager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `privilege` varchar(45) NOT NULL,
  `pays_residence` varchar(50) NOT NULL,
  `date_register` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usager`
--

INSERT INTO `usager` (`id`, `username`, `password`, `nom`, `prenom`, `privilege`, `pays_residence`, `date_register`) VALUES
(1, 'abcde@gmail.com', '12345', 'Margot', 'Bernaud', 'client', 'Chine', '2022-05-20'),
(2, 'test@hotmail.com', '12345', 'Juan', 'Pablo', 'client', 'Canada', '2022-07-14'),
(3, 'stampee@gmail.com', '12345', 'Stampee', 'Reginald', 'admin', 'Angleterre', '2022-06-16');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enchere`
--
ALTER TABLE `enchere`
  ADD CONSTRAINT `fk_enchere_timbre1` FOREIGN KEY (`timbre_id`) REFERENCES `timbre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_timbre` FOREIGN KEY (`timbre_id`) REFERENCES `timbre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `fk_offre_enchere1` FOREIGN KEY (`enchere_id`) REFERENCES `enchere` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_offre_usager1` FOREIGN KEY (`usager_id`) REFERENCES `usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `timbre`
--
ALTER TABLE `timbre`
  ADD CONSTRAINT `fk_timbre_condition1` FOREIGN KEY (`condition_id`) REFERENCES `condition` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_timbre_usager1` FOREIGN KEY (`usager_id`) REFERENCES `usager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
