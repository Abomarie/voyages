-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 jan. 2018 à 20:18
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_voyages`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nom`, `commentaire`) VALUES
(1, 'christelle', 'la ville de bouaflÃ© est belle'),
(2, 'marie', 'un beau pays'),
(3, '', ''),
(4, 'Debora', 'j\'aime la CÃ´te d\'Ivoire'),
(5, 'Loriane', 'la CÃ´te d\'Ivoire '),
(6, 'carmelle', 'j\'adore la cote d\'ivoire'),
(7, 'alex', 'Mon beau pays la CÃ´te d\'Ivoire '),
(8, 'Christelle', 'je pense bien visiter la CÃ´te d\'Ivoire pour decouvrir ses nombreuses cultures.'),
(9, 'cecile', 'I love cÃ´te d\'ivoire');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `id_ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `nom`, `description`, `image`, `id_ville`) VALUES
(1, 'Enotel Beach', 'Situé à San-Pedro, l\'Enotel Beach propose une piscine extérieure, une aire de jeux pour enfants, une terrasse bien exposée et un bar.', 'enotel-beach_002.jpg', 7),
(2, 'N\'SA Hotel', 'La cite des rencontres, c\'est un hôtel unique en son genre dans la ville historique de Grand-Bassam. N\'sa se positionne comme l’hôtel de référence pour la tenue de séminaires et séjours touristiques. ', '1.jpg', 4),
(3, 'Hotel MARHABA', '30 chambres toutes climatisées dont 6 suites (lit triple, télé, eau chaude et baignoire, frigo et téléphone), wifi, parking, bar, restaurant, piscine, tennis, groupe électrogène sont mis a votre disposition pour un séjour inoubliable.', 'ed81b4bc615693717bf5115f8e493a78[1].jpg', 1),
(4, 'Groupe Hotelier Amoitrin', 'Situe a Man Ville en Cote d\'Ivoire, le Groupe dispose de la connexion internet via wifi, des chambres climatisees. Des services de location de voitures et de blanchisserie sont fournis sur demande, un parking est egalement disponible. aussi, Le groupe abrite une grande piscine exterieure. ', 'azalai_thumbnail.jpg', 5),
(5, 'Hotel Barracuda \"La Belle Etoile\"', 'Situe dans un cadre agreable a 300 m de la poste a Tiassale. L\'hotel abrite un restaurant, un bar et une salle de reunion.', 'heden_thumbnail.jpg', 9),
(6, 'Hotel Le Pave', 'Situe sur la rue Fadiga a Daloa, l\'hotel dispose des chambres climatisees ou ventilees, un parking et un personnel de securite surveille les locaux de l\'hotel.', 'pave_thumbnail.jpg', 3),
(7, 'Imans Hotel', 'Situe dans un environnement serein a Daloa. L\'hotel dispose d\'un jardin bien entretenu, d\'une salle de reception, d\'un restaurant, d\'un bar et offre une connexion internet gratuite via Wifi. Chaque chambre est climatisee et equipee d\'une armoire, d\'une television par cable et d\'une salle de bains.', 'imans_thumbnail.jpg', 3),
(8, 'Hotel Carrefour', 'Entierement renove par l\'Etat de Cote d\'Ivoire, l\'hotel met a votre disposition depuis le 30 octobre 2011, 40 chambres de luxe, une suite, une piscine, un night club et un restaurant.', 'hotelmarly_thumbnail.jpg', 8),
(9, 'Degny Plage', 'Dans un cadre authentique, l\'hotel Degny Plage est une grande propriete en front de mer a 5 km de l\'aeroport de San Pedro. On y trouve de grandes chambres avec differentes offres d\'hebergements: chambre individuelle ou familiale au choix Dans un style purement local. Vous garderez de tres bons souvenirs du chef qui se chargera de vous concocter des repas aux saveurs exquises tandis qu\'au bar vous apprecierez l\'ambiance cosy et les cocktails proposes. Des salles de reunion et de banquet pour accueillir divers evenements sont egalement disponibles.', 'enotel-beach-6090-3ee13a210ed6e858504a6bcf9f5abec31dd6c9c1[1].jpeg', 7),
(10, 'Hotel Residence Christy', 'Facile d\'acces, le complexe se trouve en face de l\'ancienne ecole de San Pedro. Classe 3 etoiles, l\'hotel Residence Christy met a votre disposition des chambres spacieuses, colorees et tres bien amenagees; on s\'y sent a l\'aise une fois a l\'interieur... Les suites sont luxueuses et donnent une vue imprenable sur la ville. Au restaurant, savourez les succulents mets du chef; vous y trouverez des saveurs du terroir comme d\'autres contrees.Vous pouvez vous detendre au bord de la piscine exterieure entouree de transats ou au salon du bar ou chaque soir le barman sert une variete de cocktails rafraichissants et detonants.', 'residence-hotel-christy-28768-d7f083ad845625d8ec785aa2cd32d2dac1e76c75[1].jpeg', 7),
(11, 'Hotel Residence Berah', 'L\'hotel residence Berah est situe dans le quartier residentiel Millionnaire, a 7 km de la Basilique Notre-Dame de la Paix a Yamoussoukro. La Residence abrite un restaurant, un bar, une piscine exterieure, une salle de conference, un night-club et propose la connexion internet via Wifi gratuitement. chaque chambre est climatisee et dispose d\'une salle de bain privative, d\'un bureau, d\'un telephone et d\'un televiseur a ecran plat cable.', '20180125_153100[1].png', 10),
(12, 'Hotel Villa Des Hotes', 'L\'hotel Villa des hotes se trouve a Yamoussoukro et dispose d\'un restaurant et d\'un bar. La connexion internet via Wifi y est disponible gratuitement. Toutes les chambres sont entierement climatisees et comprennent une salle de bain privative. L\'hotel sert le petit dejeuner. Les autres repas sont fournis par le restaurant sur place. Le bar sert egalement une grande variete de boissons. Les clients peuvent se detendre sur la terrasse. L\'etablissement assure un approvisionnement stable en electricite.Un parking sur place, des services de bagagerie et de nettoyage a sec sont egalement a la disposition des clients. ', '20180125_153531[1].png', 10),
(13, 'Hotel Les Jardins d\'Eden', 'Hotel les Jardins d\'Eden est situe sur l\'ancienne route de Grand-Bassam. L\'hotel vous plonge dans une ambiance paisible et exotique, ideal pour des moments de vacances et repos avec ses beaux palmiers au bord de mer. La connexion internet via Wifi est disponible gratuitement. Chaque chambre de l\'hotel dispose d\'un climatiseur, d\'un televiseur a ecran plat et d\'une salle de bain prive. Certaines chambres sont equipees de minibars et donnent une vue sur la plage. Le restaurant propose des plats locaux et continentaux. L\'hotel abrite deux piscines exterieures entourees de transats.Une aire de jeux est egalement disponible pendant les moments de loisirs avec vos enfants. Les clients peuvent se detendre ou se relaxer au bord de la plage. Un service de blanchisserie est fourni sur demande. Deux parkings sont disponibles sur place et les lieux sont surveilles par un personnel de securite forme.', '20180125_154607[1].png', 4);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `interet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `email`, `telephone`, `interet`) VALUES
(1, 'Amangoua', 'Debora', 'deboraamangoua@gmail.com', '57156810', ''),
(2, 'Amangoua', 'Debora', 'deboraamangoua@gmail.com', '57156810', ''),
(3, 'Amangoua', 'Debora', 'deboraamangoua@gmail.com', '57156810', 'San-PÃ©dro'),
(4, 'anouan', 'christelle', 'christelle', '57-33-43-52', 'OdiÃ©nÃ©'),
(5, 'anouan', 'christelle', 'christelle', '57-33-43-52', 'odiene et bouafle'),
(6, 'Wognin', 'Loriane', 'lorianewognin@gmail.com', '42858232', 'bouakÃ©, man');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `id_ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `titre`, `description`, `image`, `id_ville`) VALUES
(1, 'Restaurant la Brise', 'Quartier Energie, vue Basilique au bord des lacs, une adresse classique pour bien manger.', 'restau.jpg', 10),
(2, 'LA CABANA', 'Rue Des Maquis ,Quartier du lac Restaurant Ivoirien: avec sa jolie petite terrasse préservée de la Rue par des haies de verdure, cet agréable maquis-resto est assurément une adresse à ne pas manquer. Ouvert du lundi au samedi de 10h a minuit.', 'poisson.jpeg', 7),
(3, 'Restaurant Paradis', 'Restauration Africaine, spécialistes bien de chez nous. Situe a Bouaflé au quartier Djoulabougou près de la CIE, en face de l’école TELE.', 'placali.jpeg', 2),
(4, 'Restaurant Cacaobo', 'Maquis, ouvert tous les jours de 09h a 22h et plus les week-ends et jours de prestations zouglou.', 'le-thieboudieune.jpg', 9),
(5, 'ROYAL RESTAURANT', 'Vous y trouverez de la nourriture Africaine et Europeenne.', '750g-la-table.jpg', 3),
(6, 'CHEZ CHEF EBY', 'Boulangeries-Patisseries. Residentiel quartier millionnaire. Yamoussoukro-Cote d\'Ivoire.', '20180125_161702[1].png', 10),
(7, 'LE BANIAN', 'Ambiance a l\'elegante discretion et cuisine subtile et raffinee pour le petit frere du boulevard de Marseille a bietry, qui ne faillit pas a sa reputation  d\'excellence. Restaurant gastronomique, specialites africaines. Ouvert tous les jours de 10h a 22h et plus.', 'video-virale.jpg', 10),
(8, 'Restaurant Seoul', 'De bon plats y sont prÃ©parÃ©s', 'resize_image_004.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `id_ville` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`id`, `nom`, `image`, `description`, `id_ville`) VALUES
(1, 'LES CASCADES ', 'cascades.jpg', 'Situees Ã  3 Km de la ville de Man, Ã  l\'entree du village de Zadepleu, route du Mont Tonkpi, les cascades naturelles representent un grand attrait touristique et surtout un lieu de repos sous le feuillage de grands arbres. Le site attire beaucoup de visiteurs du fait de sa chute d\'eau d\'environ 20 metres, de son pont de liane, de son bassin de retenue d\'eau, de sa buvette, de son espace amenage pour divers loisirs et de son paysage naturel et pittoresque.', 5),
(2, 'LES BELLES PLAGES', 'plage.jpg', 'A Grand-Bassam nous avons de belles plages. C\'est un endroit ideal pour les sorties detentes pendant les week-ends. Nous avons les plages d\'azzureri, de montoukou et de modeste situe entre la lagune et la mer. Ce sont tous des endroits d\'evasion et de repos.', 4),
(3, 'LE LAC AUX CAIMANS ', 'images(2).jpg', 'Les caimans de Yamoussoukro peuplent le lac entourant le Palais presidentiel de Yamoussoukro, construit sur le site de N\'Gokro. Il s\'agit de crocodiles du Nil.', 10),
(4, 'LA MOSQUEE SECULAIRE', 'seculaire.jpg', 'Elles sont vieilles de plus 1000 ans. Elle regorge de nombreux vestiges: les fusils des soldats des Samory TourÃ©, la lance mystique Ã  la base de la capture de Samory TourÃ© etc.', 6),
(5, 'LE MUSEE ', 'musee.jpg', 'Construit par le commandant de cercle FranÃ§ais en 1954, il Ã©tait le marchÃ© de la ville avant dâ€™Ãªtre transformÃ© en 1980 en musÃ©e des arts et traditions Abron- Koulango.', 1),
(6, ' LE PONT DE LIANE ', 'pontliane.jpg', 'Ils constituent un patrimoine culturel spÃ©cifique qui joue un rÃ´le important dans les relations et la communication entre les communautÃ©s. On en dÃ©nombre une dizaine dans la rÃ©gion.', 5),
(7, 'Le Parc National de la MarahouÃ©', 'boaufle.jpg', 'D\'une superficie de 101 000 ha, et situÃ© dans la rÃ©gion de BouaflÃ©, le parc de la MarahouÃ© offre Ã  ses visiteurs un environnement de qualitÃ© et parfaitement amÃ©nagÃ© pour les accueillir. Le parc dispose, en effet d\'un centre d\'accueil et d\'hÃ©bergement, de plusieurs miradors, des marres aux crocodiles, aux Buffles, aux hippopotames, etc. Ceux-ci, animaux de forÃªt et de savanes cohabitent harmonieusement : Ã‰lÃ©phants, Bongos, Buffles, CynocÃ©phales, ...', 2),
(8, 'Le lac SavanÃ©', 'lac.jpg', 'C\'un lac artificiel qui se trouve dans un rÃ©ceptif hÃ´telier Ã  quelques kilomÃ¨tres de la ville avec ces bungalows tout autour', 6),
(9, 'LA DENT DE MAN', 'img31.jpg', 'Elle culmine Ã   891m d\'altitude. Elle est visible Ã   n\'importe quel point de la ville.', 5),
(10, 'La Baie des SirÃ¨nes', 'baie.jpg', 'Impossible de passer Ã   San-Pedro sans y faire une escale. Vous apprÃ©cierez la splendeur des plages et dÃ©couvrirez les joies de l\'hospitalitÃ© Ã   l\'ivoirienne. Ajouter Ã  cela le charme naturel et authentique du village hÃ´tel 5 Ã©toiles naturellement implantÃ© sur la plage Ã   la vue magnifique et vous aurez tous les ingrÃ©dients qui font de cette baie, l\'une des plus visitÃ©es du pays.', 7),
(11, 'LE QUARTIER FRANCE', 'quartier-france.jpg', 'Ce qui pourrait vous encourager Ã   visiter Grand-Bassam en plus de ses divers sites, c\'est le quartier colonial du nom de quartier France.  En effet tout est parti de ce quartier. Il renferme beaucoup d\'histoire et rien qu\'Ã   voir l\'architecture des maisons, vous comprenez le sens de ce nom France.  C\'est un quartier d\'artistes plasticiens et sculpteurs. Vous y dÃ©couvrirez des anciennes maisons qui ont servi d\'administrations et d\'habitats aux cadres de l\'Ã©poque coloniale.', 4),
(12, 'le massif du DenguÃ©lÃ© ', 'mont.jpg', 'Le massif du DenguÃ©lÃ© (qui signifie enfant unique en langue malinkÃ©) est une Montagne sacrÃ©e mystique (806 m d\'altitude) avec des grottes, oÃ¹ l\'on peut trouver des curiositÃ©s telles que cette grosse pierre posÃ©e sur une plus petite dans un Ã©quilibre hors du commun.', 6),
(13, 'La Basilique Notre Dame de la paix ', 'basilique.jpg', 'La Basilique Notre Dame de la paix, la plus haute du monde et conÃ§ue sur le modÃ¨le de la BASILIQUE de Saint Pierre de Rome et consacrÃ©e par le Pape JEAN PAUL II, a fait de Yamoussoukro une ville de pÃ¨lerinage. Des quatre coins du pays et du monde entier, arrivent touristes et croyants pour admirer ce joyau architectural ou se recueillir dans ce lieu saint.', 10),
(14, 'Le parc animalier d\'AbokouamÃ©kro ', 'images(4).jpg', 'CrÃ©e en 1986 Ã   l\'initiative de feu le PrÃ©sident FÃ©lix HouphouÃ«t-Boigny, pour le dÃ©veloppement du tourisme, le parc animalier d\'AbokouamÃ©kro couvre une superficie de 20 430 hectares dont 7 230 ha amÃ©nagÃ©s pour les visites touristiques.', 10),
(15, 'La Plage de Monogaga ', 'pla.jpg', 'Monogaga ou Menogaga (en dialecte locale) est d\'une beautÃ© inouÃ¯e. A l\'instar des Plages les plus cÃ©lÃ¨bres du monde, elle a ce cÃ´tÃ© Paradisiaque avec son sable fin et sa brise marine douce et lÃ©gÃ¨re, sans oublier la beautÃ© de ces installations toutes particuliÃ¨res qui attirent les visiteurs par centaine', 7),
(16, 'LE MUSEE DES COSTUMES ', 'costume1.jpg', 'Il renferme tout le patrimoine culturel cÃ´tÃ© vestimentaire de la CÃ´te d\'Ivoire. Toutes les rÃ©gions y sont reprÃ©sentÃ©es.', 4),
(17, 'La case et la stÃ¨le de RÃ©nÃ© Caillet ', 'stele.jpg', 'ArrivÃ© Ã  TiÃ©mÃ© dans le but de se reposer et passer la nuit, le cÃ©lÃ¨bre explorateur RenÃ© CAILLE qui transitait par la rÃ©gion pour se rendre Ã  Tombouctou, trainait une plaie et Ã©tait gravement malade. C\'est ainsi que les personnes rencontrÃ©es sous l\'arbre Ã  palabre du village auxquelles il s\'Ã©tait adressÃ© ont prÃ©fÃ©rÃ© le conduire chez Mandjion Sylla, la plus grande guÃ©risseuse du village Ã  l\'Ã©poque. AprÃ¨s 5 mois passÃ©s dans la localitÃ©, et totalement guÃ©rit, il reprit son pÃ©riple vers le Mali laissant derriÃ¨re lui des souvenirs dont une stÃ¨le une case et un fusil jalousement conservÃ©es jusqu\'Ã  ce jour.', 1),
(18, 'LA MOSQUEE HISTORIQUE DE SIANA', 'mosquee.jpg', 'Construite au 16Ã¨me siÃ¨cle par la famille Dosso en collaboration avec celle des Bakayoko, la mosquÃ©e de Siana, village situÃ© sur l\'axe menant Ã   Mankono, fut restaurÃ©e au 17Ã¨me siÃ¨cle. BÃ¢tie en banco avec de la terre battue et du bois de chauffe, dans un style soudanais, c\'est l\'une des plus anciennes de CÃ´te d\'Ivoire. VÃ©ritable richesse Ãƒ  la fois historique, culturelle et touristique, elle figure au premier plan des curiositÃ©s du Worodougou.', 8),
(19, 'LE PONT HISTORIQUE', 'Pont_de_Tiassale.jpg', 'Un vÃ©ritable joyau architectural Ã©difiÃ© depuis 1934, dont les 22 splendides arcades font de lui, le plus beau du pays. Il est long de 300 mÃ¨tres. Les fleuves Bandama et Nâ€™zi dans un mouvement dialectique se rejoignent pour couler merveilleusement dans le mÃªme lit, signe dâ€™union et dâ€™amour. Mais avant le pont, le Bandama se dÃ©tache pour couler Ã  contre-courant sur 25 m environ avant de restituer de maniÃ¨re insolite au Nâ€™zi la quasi-totalitÃ© dâ€™eau empruntÃ©e lors de leur alliance, symbole de partage et de paix.', 9),
(20, 'LA CHAINE DES ROCHERS', 'rochers.jpg', 'LA CHAINE DES ROCHERS mystÃ©rieux et fascinants qui sâ€™Ã©tend de la carriÃ¨re de pierres de Binao au village dâ€™Ahouakro oÃ¹ lâ€™on dÃ©couvre des figurines insolites dans un parc archÃ©ologique mÃ©galithique qui prÃ©sente une fiÃ¨re allure Ãƒ la fois spectaculaire et attrayante.', 9);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'salimata', 'salimata');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `libelle`) VALUES
(1, 'BONDOUKOU'),
(2, 'BOUAFLE'),
(3, 'DALOA'),
(4, 'GRAND-BASSAM'),
(5, 'MAN'),
(6, 'ODIENNE'),
(7, 'SAN-PEDRO'),
(8, 'SEGUELA'),
(9, 'TIASSALE'),
(10, 'YAMOUSSOUKRO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
