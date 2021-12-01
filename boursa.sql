-- Mohamed beirouk


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boursa`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(72) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `admin_email`, `admin_pass`) VALUES
(1, 'beirouk@gmail.com', '1234'),
(2, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `des` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `des`) VALUES
(22, 'toyota', 'marques japonais'),
(23, 'mercedes', 'marques allemand'),
(24, 'renault', 'marques francais'),
(25, 'ford', 'marques americain');

-- --------------------------------------------------------

--
-- Structure de la table `vendre`
--

DROP TABLE IF EXISTS `vendre`;
CREATE TABLE IF NOT EXISTS `vendre` (
  `id` int(11) NOT NULL,
  `nomclient` varchar(200) NOT NULL,
  `nniclient` bigint(20) NOT NULL,
  `nomcourtier` varchar(200) NOT NULL,
  `prcourtier` int(11) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vendre`
--

INSERT INTO `vendre` (`id`, `nomclient`, `nniclient`, `nomcourtier`, `prcourtier`, `matricule`, `prix`) VALUES
(1, 'ahmed', 5802495575, 'sidi', 5, '2222ax00', 2200000),
(2, 'medos', 3434212122, 'chi9ali', 10, '0707aa07', 121200),
(6, 'med', 58223993, 'sidi', 5, '2222aa09', 2000000);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prix` int(200) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `categorie` int(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `nom`, `prix`, `matricule`, `categorie`, `img`) VALUES
(1, 'symbioz', 200000, '2222aa09', 24, '1ad73d42-2017-renault-symbioz-prototype-0.jpg'),
(2, 'symbioz-prototype', 220000, '1111aa00', 24, '1ad73d42-2017-renault-symbioz-prototype-0.jpg'),
(3, 'Camry-hills', 12345, '2344ax00', 22, '2019-Toyota-Camry-hills.jpg'),
(4, 'ford endeavour sport', 150000, '2323AY00', 25, '18271693-ford_endeavour_sport2020.jpg'),
(5, 'Ford Endeavour 2021', 25000000, '2200AA12', 25, 'Ford-Endeavour-160320201504.jpg'),
(6, 'AMG-GT', 12400000, '9999AA12', 23, 'mercedesAMG-GT-exterior-front-fascia-going-fast-on-blurred-road_o-1038x375.jpg'),
(7, 'benz 2021', 12300000, '1210AA12', 23, 'mercedesbenz.jpg'),
(8, 'fortuner-facelift', 1234000, '2323AA07', 22, 'toyota-fortuner-facelift-right-front-three-quarter2.jpeg'),
(9, 'bronco 2021', 15000000, '1234', 25, 'fordbronco.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
