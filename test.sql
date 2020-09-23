-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 23 sep. 2020 à 06:54
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id_countries` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id_countries`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id_countries`, `image`, `titre`, `contenu`) VALUES
(1, 'australia.png', 'Study in Australia', 'Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui rerum hic. Voluptatem maiores voluptatum voluptate porro harum. Facilis voluptatum eum est.'),
(4, 'canada.png', 'Study in Canada', 'Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui rerum hic. Voluptatem maiores voluptatum voluptate porro harum. Facilis voluptatum eum est.'),
(3, 'uk.png', 'Study in Uk', 'Ut aut corporis accusantium illo ullam qui laudantium. Maxime rerum sunt et sequi sed qui rerum hic. Voluptatem maiores voluptatum voluptate porro harum. Facilis voluptatum eum est.');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id_events` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `horaires` time NOT NULL,
  PRIMARY KEY (`id_events`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id_events`, `date`, `titre`, `contenu`, `horaires`) VALUES
(1, '2020-12-23', 'Macquarie University, Sydney, Australia', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.', '10:00:00'),
(2, '2020-10-17', 'Federation University, Australia', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.', '10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `featured`
--

DROP TABLE IF EXISTS `featured`;
CREATE TABLE IF NOT EXISTS `featured` (
  `id_featured` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_featured`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `featured`
--

INSERT INTO `featured` (`id_featured`, `image`) VALUES
(8, 'newcastleuniv.png'),
(7, 'macquarieuniv.png'),
(3, 'macquarieuniv.png'),
(4, 'charlesuniv.png'),
(5, 'newcastleuniv.png'),
(6, 'latrobeuniv.png'),
(9, 'latrobeuniv.png'),
(10, 'charlesuniv.png'),
(11, 'macquarieuniv.png');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `datearticle` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `image`, `datearticle`, `titre`) VALUES
(1, 'comein.png', '2020-01-17', 'Come On In. The Waterâ€™s Fine (Mostly).'),
(2, 'trumplays.png', '2020-04-17', 'Trump Lays Plans to Reverse Obamaâ€™s Climate Change Legacy'),
(3, 'hydra.png', '2020-04-17', 'How a Little Bit of Hydra Regrows a Whole Animal');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id_services` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `icone` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id_services`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_services`, `icone`, `titre`, `contenu`) VALUES
(1, 'career.png', 'Career Counselling', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.'),
(2, 'admission.png', 'University Admissions', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.'),
(6, 'Visa.png', 'Visa Consultancy', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.'),
(4, 'accomodation.png', 'Accommodation', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.'),
(5, 'predeparture.png', 'Pre-Departure Briefing', 'Maiores voluptas laboriosam non dolorum perferendis fuga repellat aut. Blanditiis quos in minus. Voluptatum quia quia voluptas voluptatem vero ex possimus. Iure et consectetur dolorem dicta accusantium fugiat.');

-- --------------------------------------------------------

--
-- Structure de la table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id_testimonial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `metier` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id_testimonial`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `image`, `prenom`, `nom`, `metier`, `contenu`) VALUES
(1, 'harrison.png', 'Harrison', 'Phillips', 'Reporter', 'Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et. Voluptatem id ea dicta inventore et quo impedit repudiandae. Qui officia aperiam atque qui occaecati est. Magnam voluptatem earum excepturi qui quae ea qui.'),
(2, 'ainara.png', 'Ainara ', 'Vergara', 'Landscape Architect', 'Aut consectetur voluptas. Voluptatem minus quo voluptas in nulla iste. Fugiat alias sit sed dolorem quo. Qui praesentium et doloribus minima neque. Facere debitis sed est suscipit velit reprehenderit. Dolores aliquid dolore consequuntur ex.'),
(4, 'niek.png', 'Niek', 'Bove', 'Senior Developer', 'Rem quia possimus eum adipisci autem aut sunt laboriosam autem. Qui soluta ut aut excepturi dolorem laborum ut. Qui alias aut provident quas illo. Eveniet debitis totam quaerat. Enim voluptatem fuga qui. Numquam iusto vero ipsa eveniet iusto.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `password` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
