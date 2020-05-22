-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 01 juin 2019 à 21:18
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `burger_code`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'HTML / CSS'),
(2, 'Javascript'),
(3, 'Jquery'),
(4, 'Bootstrap'),
(5, 'PHP / SQL'),
(6, 'WordPress'),
(7, 'C#'),
(8, 'Python'),
(9, 'Symfony'),
(10, 'IONIC');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `contexte` text NOT NULL,
  `date_debut` varchar(50) NOT NULL,
  `date_fin` varchar(50) NOT NULL,
  `technologie` varchar(50) NOT NULL,
  `competence` text NOT NULL,
  `bilan` text NOT NULL,
  `cahier_de_recette` varchar(250) NOT NULL,
  `guide_utilisateur` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `contexte`, `date_debut`, `date_fin`, `technologie`, `competence`, `bilan`, `cahier_de_recette`, `guide_utilisateur`, `image`, `category`) VALUES
(1, 'Site de voyage', 'Création d\'un site de voyage statique.', 'Cette réalisation est un projet personnel effectuée en autonomie avec le MOOC.', '10/09/2017', '28/09/2017', 'HTML 5 et CSS 3', 'Connaissance du langage de balisage HTML et le langage informatique CSS', 'Consolider mes acquis en mettant en application le HTML ET CSS vue sur les MOOC et en cours.', '', '', 'SiteVoyage.PNG', 1),
(2, 'Snake', 'Création du jeu de serpent', 'Cette réalisation est un projet personnel effectuée en Autonomie avec le MOOC', '10/10/2017', '28/10/2017', 'HTML 5 et JavaScript', 'Connaissance du langage de programmation de scripts JavaScript', 'Consolider mes acquis en mettant en application le JavaScript vue sur les MOOC.', '', '', 'Jeuduserpent.png', 2),
(3, 'Top 5', 'Création d\'un site top 5 des actrices', 'Cette réalisation est un projet personnel  effectuée en autonomie avec le MOOC', '01/12/2017', '12/12/2017', 'HTML 5, CSS 3, Javascript et Jquery', 'Connaissance du le langage de balisage  HTML, \r\ndu langage informatique CSS, \r\ndu langage de programmation de scripts JavaScript \r\net de la bibliothèque de Javascript: Jquery', 'Consolider mes acquis en mettant en application le HTML, CSS, Javascript et Jquery vue sur les MOOC.', '', '', 'SiteTop5.PNG', 3),
(4, 'Portfolio 1.2', 'Création du portefeuille de compétence version 1.2', 'Cette réalisation est un projet personnel effectuée en autonomie avec le MOOC', '01/12/2018', '10/03/2019', 'HTML, CSS, Javascript et Bootstrap', 'Connaissance du langage de balisage HTML\r\ndu langage informatique CSS, du langage de programmation de scripts Javascript\r\net la collection d\'outil design Bootstrap\r\n\r\n', 'Consolider mes acquis en mettant en application la collection d\'outil design\r\nBootstrap sur mon portefeuille de competence vue le MOOC.', '', '', 'portfolio12.PNG', 4),
(5, 'Cross Saint Vincent', 'Création d\'un site dynamique de cross pour le lycée Saint Vincent', 'Cette réalisation est un projet personnel effectuée en autonomie.', '18/10/2017', '30/10/2017', 'HTML, CSS, PHP, SQL ', 'Participation à un projet de développement\r\nConnaissance du langages de programmation libre PHP et du langage de requete structure SQL', 'Consolider mes acquis en mettant en application PHP et SQL vue en cours.', '', '', 'SiteCross.PNG', 5),
(6, 'GL Organisation', 'Creation d\'un site evenementiel en WordPress ', 'Cette réalisation est un projet en groupe effectuée en autonomie', '10/05/2017', '01/06/2017', 'WordPress', 'Connaissance du langage de programmation libre PHP et du systeme de gestion de contenu WordPress.', 'Consolider mes acquis en mettant en application le PHP et WordPress vue sur les MOOC et en cours.', '', '', 'wordpress.PNG', 6),
(7, 'Stage 1', 'Creation d\'un site dynamique pour l\'entreprise GFI', 'Cette réalisation est un projet en groupe effectuée en autonomie', '04/06/2018', '29/06/2018', 'HTML, CSS, Javascript, PHP, SQL', 'Connaissance des langages informatiques et de programmation HTML, CSS, PHP, Javascript et du langage informatique de donnée SQL', 'Consolider mes acquis en mettant en application les langages informatique, pour l\'entreprise GFI, vue en cours et sur les MOOC.', '', '', '', 5),
(8, 'Stage 2', 'Création d\'une application pour l\'association Coallia', 'Cette réalisation est un projet en groupe effectuée avec mon tuteur de stage', '04/01/2019', '01/03/2019', 'WEBDEV, Javascript, SQL', 'Connaissance du langage de donnee SQL\r\nainsi que des bases en programmation.', 'Consolider mes acquis en mettant en application SQL et la programmation vue en cours et sur les MOOC.', '', '', '', 7),
(9, 'Mastermind', 'Creation du jeu Mastermind', 'Cette réalisation est un projet personnel effectuée en autonomie avec l\'aide du professeur', '20/10/2017', '18/11/2017', 'Python', 'Connaissance du langage de programmation interprété Python et en algorithme ', 'Consolider mes acquis en mettant en application le langage python vu en cours', '', '', 'MasterMind.PNG', 8),
(10, 'Portfolio v1.0', 'Premiere version de mon portefeuille de competence ', 'Cette réalisation est un projet personnel effectuée en autonomie', '20/11/2017', '30/11/2017', 'HTML et CSS', 'Participation à un projet de développement et connaissance du langage de balisage HTML et du langage informatique CSS', 'Consolider mes acquis en mettant en application le HTML et CSS vue sur les MOOC.', '', '', 'PortfolioV1.PNG', 1),
(11, 'UCAPE', 'Creation d\'un site web UCAPE pour le lycée Saint Vincent', 'Cette réalisation est un projet en groupe effectuée en autonomie', '20/02/2019', '15/05/2019', 'Symfony 3.4', 'Participation à un projet de développement\r\nconnaissance du framework Symfony', '', '', 'Consolider mes acquis en mettant en application Symfony vue sur les MOOC et en cours.', 'symfony.PNG', 9),
(12, 'Gestion de theatre', 'Creation d\'une application qui gere les representation de theatre', 'Cette réalisation est un projet en groupe effectuée en autonomie', '20/01/2019', '20/05/2019', 'C# et SQL', 'Participation à un projet de développement\r\nConnaissance du langage de programmation c# et du langage de donnee SQL', 'Consolider mes acquis en mettant en application le C# et SQL vue en cours.', '', '', 'projetC#.PNG', 7),
(13, 'GSB Pharmacie', 'Creation d\'une application mobile de gestion de pharmacie.', 'Cette réalisation est un projet en groupe effectuée en autonomie.', '20/11/2017', '30/11/2017', 'Ionic, Angular et typeScript', 'Connaissance du framework IONIC', 'Consolider mes acquis en mettant en application IONIC vue en cours.', '', '', '', 10),
(14, 'Onion Rings', 'Rondelles d\'oignon frits', '3.4', '', '', '', '', '', '', '', 's2.png', 3),
(15, 'Nuggets', 'Nuggets de poulet frits', '5.9', '', '', '', '', '', '', '', 's3.png', 3),
(16, 'Nuggets Fromage', 'Nuggets de fromage frits', '3.5', '', '', '', '', '', '', '', 's4.png', 3),
(17, 'Ailes de Poulet', 'Ailes de poulet Barbecue', '5.9', '', '', '', '', '', '', '', 's5.png', 3),
(18, 'CÃ©sar Poulet PanÃ©', 'Poulet PanÃ©, Salade, Tomate et la fameuse sauce CÃ©sar', '8.9', '', '', '', '', '', '', '', 'sa1.png', 4),
(19, 'CÃ©sar Poulet GrillÃ©', 'Poulet GrillÃ©, Salade, Tomate et la fameuse sauce CÃ©sar', '8.9', '', '', '', '', '', '', '', 'sa2.png', 4),
(20, 'Salade Light', 'Salade, Tomate, Concombre, MaÃ¯s et Vinaigre balsamique', '5.9', '', '', '', '', '', '', '', 'sa3.png', 4),
(21, 'Poulet PanÃ©', 'Poulet PanÃ©, Salade, Tomate et la sauce de votre choix', '7.9', '', '', '', '', '', '', '', 'sa4.png', 4),
(22, 'Poulet GrillÃ©', 'Poulet GrillÃ©, Salade, Tomate et la sauce de votre choix', '7.9', '', '', '', '', '', '', '', 'sa5.png', 4),
(23, 'Coca-Cola', 'Au choix: Petit, Moyen ou Grand', '1.9', '', '', '', '', '', '', '', 'bo1.png', 5),
(24, 'Coca-Cola Light', 'Au choix: Petit, Moyen ou Grand', '1.9', '', '', '', '', '', '', '', 'bo2.png', 5),
(25, 'Coca-Cola ZÃ©ro', 'Au choix: Petit, Moyen ou Grand', '1.9', '', '', '', '', '', '', '', 'bo3.png', 5),
(26, 'Fanta', 'Au choix: Petit, Moyen ou Grand', '1.9', '', '', '', '', '', '', '', 'bo4.png', 5),
(27, 'Sprite', 'Au choix: Petit, Moyen ou Grand', '1.9', '', '', '', '', '', '', '', 'bo5.png', 5),
(28, 'Nestea', 'Au choix: Petit, Moyen ou Grand', '1.9', '', '', '', '', '', '', '', 'bo6.png', 5),
(29, 'Fondant au chocolat', 'Au choix: Chocolat Blanc ou au lait', '4.9', '', '', '', '', '', '', '', 'd1.png', 6),
(30, 'Muffin', 'Au choix: Au fruits ou au chocolat', '2.9', '', '', '', '', '', '', '', 'd2.png', 6),
(31, 'Beignet', 'Au choix: Au chocolat ou Ã  la vanille', '2.9', '', '', '', '', '', '', '', 'd3.png', 6),
(32, 'Milkshake', 'Au choix: Fraise, Vanille ou Chocolat', '3.9', '', '', '', '', '', '', '', 'd4.png', 6),
(33, 'Sundae', 'Au choix: Fraise, Caramel ou Chocolat', '4.9', '', '', '', '', '', '', '', 'd5.png', 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
