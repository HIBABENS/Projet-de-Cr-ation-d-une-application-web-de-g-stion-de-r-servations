-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 12:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencetouristique`
--

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `id_act` int(11) NOT NULL,
  `id_catg` int(11) NOT NULL,
  `act_nom` varchar(255) NOT NULL,
  `act_img` varchar(255) NOT NULL,
  `act_prix` double NOT NULL,
  `act_location` varchar(200) NOT NULL,
  `act_designation` varchar(900) NOT NULL,
  `act_map` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activites`
--

INSERT INTO `activites` (`id_act`, `id_catg`, `act_nom`, `act_img`, `act_prix`, `act_location`, `act_designation`, `act_map`) VALUES
(1, 1, 'MARRAKECH ESSENTIEL - EXCURSION DEMI-JOURNÉE MARRAKECH', '/AgenceT/images/activites/excursion-demi-journee-marrakech.jpg', 258, ' MARRAKECH\r\n', 'Attractions insolites ville inédite, Gueliz cœur de Marrakech, vous emporte dans une excursion Marrakech Essentiel  de milles couleurs, et vous offre ses meilleurs parfums avec la place Jama El Fna, lieu mythique…', '31.631155, -7.989960'),
(2, 1, 'VISITE GUIDÉE PREMIUM - EXCURSION DEMI-JOURNÉE 1/2J', '/AgenceT/images/activites/VISITE GUIDÉE PREMIUM - EXCURSION DEMI-JOURNÉE.jpg', 312, 'MARRAKECH', 'Des rencontres incroyables de Jama El Fna, aux endroits divinement conservées ; l’excursion Marrakech premium associe parfaitement, palais, Riad, jardins, dans un univers formidable dans le but de vous émerveiller.', '31.641807, -8.002418'),
(3, 1, 'ATELIER CUISINE AU NATUREL', '/AgenceT/images/activites/ATELIER CUISINE AU NATUREL.jpg', 699, 'MARRAKECH', 'Fondants sous la dent, retrouvez dans chaque excursion et atelier culinaire l’image du royaume, maître des épices et de l’olive, avec des gouts se mêlant facilement d’un plat à un autre.', '31.625924, -7.986154'),
(4, 1, 'EXCURSION VALLÉE DE L\'OURIKA 1/2J', '/AgenceT/images/activites/EXCURSION VALLÉE DE L\'OURIKA.jpg', 215, 'MARRAKECH', 'Splendides vallées du Haut Atlas, hôtels et inédits villages berbères vous donnent l’envie d’avoir toujours vécus dans les montagnes. Uneexcursion au paysage extraordinaire d’Ourika ou fusionnent bien-être et bonheur...', '31.373604, -7.785602'),
(5, 1, 'RANDONNÉE EN TERRES BERBÈRES', '/AgenceT/images/activites/RANDONNÉE EN TERRES BERBÈRES.jpg', 409, 'MARRAKECH', 'Marrakech c’est aussi un arrière-pays riche et surprenant, nous vous emmenons dans la région montagneuse d’Imlil le point de départ pour l’ascension du Toubkal le plus haut sommet d’Afrique du nord. Une randonnée pédestre au travers des villages authentiques et des sites naturels merveilleux où vous vous sentirez en total harmonie avec la nature, la variété des paysages est à couper le souffle et la chaleur des rencontres humaines marquera certainement vos esprits. Accessible tous niveaux/âges', '31.343856, -7.751286'),
(6, 1, 'DINER AUTHENTIQUE À RIAD SOUGTANI - NOTRE EXCLUSIVITÉ', '/AgenceT/images/activites/DINER AUTHENTIQUE À RIAD SOUGTANI - NOTRE EXCLUSIVITÉ.jpg', 538, 'MARRAKECH', 'Choix idéal, l’excursion vous offre confort, diner Authentique au Riad Sougtani synonyme de relaxation avec une gastronomie sans égal. Goutez au frais car ce qui est naturel est beau.', '31.423698, -8.075059'),
(8, 2, 'BALADE EN DROMADAIRE DANS LA PALMERAIE MARRAKECH', '/AgenceT/images/activites/BALADE EN DROMADAIRE DANS LA PALMERAIE MARRAKECH.jpg', 247, 'MARRAKECH', 'Observer la Palmeraie sous un autre angle et vivez l’instant dromadaire ! Admirez ces balades en hauteur, assis sur le dos d’animaux majestueux. Excursion grands spectacles ensoleillée et naturellement exceptionnelle.', '31.685589, -7.969069'),
(9, 2, 'LA PALMERAIE EN QUAD', '/AgenceT/images/activites/LA PALMERAIE EN QUAD.jpg', 527, 'MARRAKECH', 'La randonnée en quad dans la palmeraie vous fera voir des paysages fantastiques. Excursion accessible à tous niveaux, amateurs comme expert, en famille ou entre amis avec équipements et sécurité de pointe.', '31.684950, -7.969691'),
(10, 2, 'RAID BUGGY MARRAKECH PRIVÉ 1/2J AVEC DÉJEUNER', '/AgenceT/images/activites/RAID BUGGY MARRAKECH PRIVÉ 12J AVEC DÉJEUNER.jpg', 2473, 'MARRAKECH', 'Amoureux du Sahara et des montagnes, cette excursion raid buggy privé;, riche en défis extrêmes  dédiée à tout public,Offre l’occasion de contempler toute la continuité géologique incroyable de l’Europe…', '31.724870, -7.910008'),
(11, 2, 'MARRAKECH VUE DU CIEL - MONTGOLFIÈRE', '/AgenceT/images/activites/MARRAKECH VUE DU CIEL - MONTGOLFIÈRE.jpg', 1935, 'MARRAKECH', 'Moment magique et unique, survoler Marrakech dans cette excursion à bord d’un grand ballon à plus de 200 mètres d’altitude, admirez la ville depuis les nuages et sentez que vous volez.', '31.648863, -8.001936'),
(12, 2, 'RANDONNÉE BUGGY DÉSERT MARRAKCHI 1/2J', '/AgenceT/images/activites/RANDONNÉE BUGGY DÉSERT MARRAKCHI 12J.jpg', 677, '', 'Vivez une expérience totalement différente à seulement quelques kilomètres de Marrakech ! Essayez cette demi-journée surprenante et hors du commun. Sur des machines Yamaha automatiques, vous partirez à l\'aventure sur un parcours exclusif et dépaysant en plein cœur du désert de pierre des Jbilets. Programme ponctué par une authentique pause-thé chez l\'habitant. A partir de 10 ans.', '31.800527, -8.027029'),
(13, 2, 'RANDONNÉE QUAD DÉSERT MARRAKECH & LAC 1J AVEC DÉJ', '/AgenceT/images/activites/RANDONNÉE QUAD DÉSERT MARRAKECH & LAC 1J AVEC DÉJ.jpg', 1753, 'MARRAKECH', 'A 1h de Marrakech, admirez de superbes vues sur les montagnes du Haut-Atlas avec cette journée en quad au cœur du désert d\'Agafay et du majestueux Lac Takerkoust. Ce désert de collines est encore un des secrets les mieux gardés de Marrakech. Le plus : un confortable déjeuner sous tentes, cuisiné chez l\'habitant!  Une journée superbement ficelée avec du matériel de bonne qualité et des guides pros, sympas et attentionnés. Pour les initiés à partir de 18 ans.', '31.353937, -8.131395'),
(14, 2, 'WAKEBOARD MARRAKECH (2 HEURES DE WAKY)', '/AgenceT/images/activites/WAKEBOARD MARRAKECH (2 HEURES DE WAKY).jpg', 398, 'MARRAKECH', 'A ne pas manquer, le tout nouveau et unique Cable-Parc d’Afrique du Nord est à Marrakech ! Annexé à un lac artificiel de 3Ha spécialement conçu pour la pratique du Wakeboard et figures aquatiques en tout genre ! Dans un cadre paradisiaque avec pour toile de fond les sommets de l’Atlas, vous vivrez des sensations de glisse inégalées.. En toute sécurité, vous serez entourés par une équipe de professionnels, sous l’égide du belge Francis Kootquadruple champion du monde ! A partir de 8 ans, tous niveaux (débutant, initiation, amateur ou rider confirmé).\r\n\r\n', '31.511144, -7.949692'),
(15, 3, 'ATELIER CUISINE AU NATUREL', '/AgenceT/images/activites/ATELIER CUISINE AU NATUREL1.jpg', 699, 'MARRAKECH', 'Fondants sous la dent, retrouvez dans chaque excursion et atelier culinaire l’image du royaume, maître des épices et de l’olive, avec des gouts se mêlant facilement d’un plat à un autre.', '31.625924, -7.986154'),
(16, 3, 'EXCURSION VALLÉE DE L\'OURIKA 1/2J', '/AgenceT/images/activites/EXCURSION VALLÉE DE L\'OURIKA 12J.jpg', 215, 'MARRAKECH', 'Splendides vallées du Haut Atlas, hôtels et inédits villages berbères vous donnent l’envie d’avoir toujours vécus dans les montagnes. Uneexcursion au paysage extraordinaire d’Ourika ou fusionnent bien-être et bonheur...', '31.373604, -7.785602'),
(17, 3, 'EXCURSION CASCADES D\'OUZOUD 1J AVEC DÉJEUNER', '/AgenceT/images/activites/EXCURSION CASCADES D\'OUZOUD 1J AVEC DÉJEUNER.jpg', 409, 'MARRAKECH', 'A environ 2h30 de route de Marrakech, sur les contre forts du moyen atlas, les cascades d’Ouzoud sont sans aucun doute les plus belles chutes du Maroc, et avec ses 110m, les plus hautes d’Afrique du Nord. Ses eaux projettent dans l’air de fines gouttelettes qui sont ainsi en quasi permanence soulignées d’un bel arc en ciel… Un sentier balisé occupé par quelques familles de singes gibbons et descendant en douceur vers le bassin, nous conduit au restaurant situé de l’autre côté de la rive que nous atteindrons en empruntant les barques typiques…', '32.016298, -6.720104'),
(18, 3, 'LES MONTAGNES & VALLÉES DE L\'ATLAS - EXCURSION EN 4X4', '/AgenceT/images/activites/LES MONTAGNES & VALLÉES DE L\'ATLAS - EXCURSION EN.jpg', 699, 'MARRAKECH', 'Aventure et découverte ! Une excursion incontournable en 4x4 offrant un aperçu complet des paysages de haute montagne, de ses sommets enneigés à ses plateaux désertiques, une véritable rencontre avec le vrai Maroc et ses habitants de l’Atlas. Une journée ponctuée par un déjeuner bien agréable dans un gîte de montagne avec piscine et une magnifique vue à 360° sur l’Atlas…', '31.653887, -8.008352'),
(19, 3, 'RANDONNÉE EN TERRES BERBÈRES', '/AgenceT/images/activites/RANDONNÉE EN TERRES BERBÈRES.jpg', 409, 'MARRAKECH', 'Marrakech c’est aussi un arrière-pays riche et surprenant, nous vous emmenons dans la région montagneuse d’Imlil le point de départ pour l’ascension du Toubkal le plus haut sommet d’Afrique du nord. Une randonnée pédestre au travers des villages authentiques et des sites naturels merveilleux où vous vous sentirez en total harmonie avec la nature, la variété des paysages est à couper le souffle et la chaleur des rencontres humaines marquera certainement vos esprits. Accessible tous niveaux/âges', '31.343856, -7.751286'),
(20, 3, 'EXCURSION OURIKA PREMIUM 1J', '/AgenceT/images/activites/EXCURSION OURIKA PREMIUM 1J.jpg', 237, 'MARRAKECH', 'Si l’architecture rurale est votre passion ? Cette excursion premium fera votre bonheur ! Expérience fantastique dans un village féérique hors du commun. La particularité d’Ourika est l’harmonie qui s’y dégage.', '31.373604, -7.785602'),
(21, 3, 'NUIT DANS L\'ATLAS EN ECOLODGE CONFORT 2J/1N', '/AgenceT/images/activites/NUIT DANS L\'ATLAS EN ECOLODGE CONFORT 2J1N.jpg', 495, '', 'A seulement 1h30 de Marrakech, unique en Afrique, un authentique écolodge pour les amoureux de nature et de sensations, la promesse d’un vrai dépaysement : Après quelques minutes de piste on rejoint le domaine situé sur un plateau de 120ha, à 1200m d’altitude au pied des premiers contreforts du Haut Atlas. Une vue à 360° sur les canyons de terre rouges et les villages alentours. Le concept vous séduira aussi pour son coté tourisme durable et respect de l’environnement (trophée du tourisme responsable & label clef verte) et pour son parc aérien unique au Maroc (et le plus grand d’Afrique !) avec tyroliennes, ponts suspendus, accro-park et d’autres activités créatives et ludiques ! Logement en tente-lodge, sanitaires (douches avec eau chaude, wc) à partager.', '30.432565, -9.490101'),
(22, 3, 'DINER SOUS TENTE AU DÉSERT D\'AGAFAY', '/AgenceT/images/activites/DINER SOUS TENTE AU DÉSERT D\'AGAFAY.jpg', 645, 'MARRAKECH', 'Nous vous invitons à vivre la magie d\'une soirée dans le désert... A 40 minutes de l\'agitation de Marrakech, se trouve une terre aride, minérale, sauvage et vallonnée, aux perspectives sans limite, faisant fièrement face au majestueux Atlas, bienvenue dans le désert d\'Agafay !  Un ciel couvert de milliers d\'étoiles, des bougies, tapis et coussins aux couleurs coruscantes, un feu de bois et de grandes tentes blanches, une restauration savoureuse, des serveurs en tenue traditionnelle, garantiront un service attentionné et discret propice à l\'atmosphère de ce lieu exceptionnel. A coup sûr vous repartirez la tête pleine de belles images et de nouvelles sensations... Transferts aller et retour inclus.', '31.632831, -7.982288'),
(24, 4, 'BALADE EN DROMADAIRE DANS LA PALMERAIE MARRAKECH', '/AgenceT/images/activites/BALADE EN DROMADAIRE DANS LA PALMERAIE MARRAKECH.jpg', 247, 'MARRAKECH', 'Observer la Palmeraie sous un autre angle et vivez l’instant dromadaire ! Admirez ces balades en hauteur, assis sur le dos d’animaux majestueux. Excursion grands spectacles ensoleillée et naturellement exceptionnelle.', '31.685589, -7.969069'),
(25, 4, 'EXCURSION ESSAOUIRA, LA BLANCHE 1J\r\n', '/AgenceT/images/activites/EXCURSION ESSAOUIRA, LA BLANCHE 1J\r\n.jpg', 269, 'MARRAKECH', 'Essaouira est aussi blanche que Marrakech est rouge. Posée tel un coquillage au bord de l’océan, secrète et souffle d’inspiration de bien des artistes… Véritable havre de paix, vous serez charmés par son architecture, son artisanat, sa médina, son petit port de pêche coloré et sa plage… En cours de route, arrêt dans une coopérative d’argan dont la région est le berceau, à Essaouira, visite guidée de la médina, des remparts et du port de pêche. Déjeuner et temps libres pour une découverte personnelle.', '31.516759, -9.765844'),
(26, 4, 'MARRAKECH VUE DU CIEL - MONTGOLFIÈRE', '/AgenceT/images/activites/MARRAKECH VUE DU CIEL - MONTGOLFIÈRE.jpg', 1935, 'MARRAKECH', 'Moment magique et unique, survoler Marrakech dans cette excursion à bord d’un grand ballon à plus de 200 mètres d’altitude, admirez la ville depuis les nuages et sentez que vous volez.', '31.648863, -8.001936'),
(27, 4, 'PARC AQUATIQUE OASIRIA PASS 1J', '/AgenceT/images/activites/PARC AQUATIQUE OASIRIA PASS 1J.jpg', 247, 'MARRAKECH', 'A quelques minutes du centre de Marrakech, OASIRIA est implanté sur un parc de 10 hectares à la végétation luxuriante et offre toutes sortes d’activités pour petits et grands, dont la plus grande piscine à vague d’Afrique, 17 toboggans géants, une rivière à bouées, plusieurs piscines et lagons, une rivière de nage, bassin pour enfants avec bateau pirate, bain à remous géant, etc.. Egalement 5 restaurants, navettes gratuites quotidiennes, accès aux personnes à mobilité réduite, maitres nageurs sauveteurs diplômés, vestiaires avec douches et consignes, infirmerie, boutique…', '31.582539, -8.014782'),
(29, 5, 'MEDINA BIEN ÊTRE - HAMMAM & MASSAGE', '/AgenceT/images/activites/MEDINA BIEN ÊTRE - HAMMAM & MASSAGE.jpg', 409, 'MARRAKECH', 'Au-delà du bien-être procuré, il s’agit d’une véritable expérience culturelle à ne pas manquer. Pratiqués depuis l’antiquité au Maroc, le hammam et le massage apportent détente, soulagement musculaire, hydratation de la peau et protection immunitaire. C’est au cœur d’un élégant riad, cocooné par une équipe de professionnels utilisant des produits 100% naturels, que nous vous invitons à découvrir cet art ancestral et à en savourer ses bienfaits... A partir de 6 ans.', '31.629255, -7.986484'),
(30, 5, 'FORFAIT SPA SILVER\r\n', '/AgenceT/images/activites/FORFAIT SPA SILVER\r\n.jpg', 473, 'MARRAKECH', 'Au-delà du bien-être procuré, il s’agit d’une véritable expérience culturelle à ne pas manquer. Pratiqués depuis l’antiquité au Maroc, le hammam et le massage apportent détente, soulagement musculaire, hydratation de la peau et protection immunitaire. C’est au cœur d’un élégant riad, cocooné par une équipe de professionnels utilisant des produits 100% naturels, que nous vous invitons à découvrir cet art ancestral et à en savourer ses bienfaits... A partir de 6 ans', '31.629255, -7.986484'),
(31, 5, 'FORFAIT SPA GOLD AVEC DÉJEUNER', '/AgenceT/images/activites/FORFAIT SPA SILVER.jpg', 613, 'MARRAKECH', 'Au-delà du bien-être procuré, il s’agit d’une véritable expérience culturelle à ne pas manquer. Pratiqués depuis l’antiquité au Maroc, le hammam et le massage apportent détente, soulagement musculaire, hydratation de la peau et protection immunitaire. C’est au cœur d’un élégant riad, cocooné par une équipe de professionnels utilisant des produits 100% naturels, que nous vous invitons à découvrir cet art ancestral et à en savourer ses bienfaits... A partir de 6 ans.', '31.629255, -7.986484'),
(32, 6, 'ATELIER CUISINE AU NATUREL', '/AgenceT/images/activites/ATELIER CUISINE AU NATUREL.jpg', 699, 'MARRAKECH', 'Fondants sous la dent, retrouvez dans chaque excursion et atelier culinaire l’image du royaume, maître des épices et de l’olive, avec des gouts se mêlant facilement d’un plat à un autre.', '31.625924, -7.986154'),
(33, 6, 'EXCURSION CASCADES D\'OUZOUD 1J AVEC DÉJEUNER', '/AgenceT/images/activites/EXCURSION CASCADES D\'OUZOUD 1J AVEC DÉJEUNER.jpg', 409, 'MARRAKECH', 'A environ 2h30 de route de Marrakech, sur les contre forts du moyen atlas, les cascades d’Ouzoud sont sans aucun doute les plus belles chutes du Maroc, et avec ses 110m, les plus hautes d’Afrique du Nord. Ses eaux projettent dans l’air de fines gouttelettes qui sont ainsi en quasi permanence soulignées d’un bel arc en ciel… Un sentier balisé occupé par quelques familles de singes gibbons et descendant en douceur vers le bassin, nous conduit au restaurant situé de l’autre côté de la rive que nous atteindrons en empruntant les barques typiques…', '32.016298, -6.720104'),
(34, 6, 'RANDONNÉE EN TERRES BERBÈRES', '/AgenceT/images/activites/RANDONNÉE EN TERRES BERBÈRES.jpg', 409, 'MARRAKECH', 'Marrakech c’est aussi un arrière-pays riche et surprenant, nous vous emmenons dans la région montagneuse d’Imlil le point de départ pour l’ascension du Toubkal le plus haut sommet d’Afrique du nord. Une randonnée pédestre au travers des villages authentiques et des sites naturels merveilleux où vous vous sentirez en total harmonie avec la nature, la variété des paysages est à couper le souffle et la chaleur des rencontres humaines marquera certainement vos esprits. Accessible tous niveaux/âges', '31.343856, -7.751286'),
(35, 6, 'SOIRÉE DANS UN RIAD \"GASTRONOMIE & ÉLÉGANCE\"', '/AgenceT/images/activites/SOIRÉE DANS UN RIAD GASTRONOMIE & ÉLÉGANCE.jpg', 505, 'MARRAKECH', 'Au cœur de la médina de Marrakech, au fond d’une petite ruelle, se cache un authentique riad, véritable œuvre d’art à la décoration raffinée où luxe, calme et volupté règnent en maîtres... Une table gastronomique vous emportant à la découverte des arômes et des saveurs du Maroc d’aujourd’hui… Une soirée rythmé par un spectacle de danse orientale traditionnelle, danse derviche, duo de musique andalouse et troupe de danseurs et chanteurs gnaouis.', '31.423725, -8.075155'),
(36, 6, 'DINER SOUS TENTE AU DÉSERT D\'AGAFAY', '/AgenceT/images/activites/DINER SOUS TENTE AU DÉSERT D\'AGAFAY.jpg', 538, 'MARRAKECH', 'Choix idéal, l’excursion vous offre confort, diner Authentique au Riad Sougtani synonyme de relaxation avec une gastronomie sans égal. Goutez au frais car ce qui est naturel est beau.', '31.638110, -7.981932'),
(37, 6, 'COURS DE CUISINE À MARRAKECH / MARRAK-CHEF', '/AgenceT/images/activites/COURS DE CUISINE À MARRAKECH.jpg', 559, 'MARRAKECH', 'Découvrez la gastronomie et apprenez à concocter des plats insolites marocains dans une excursion gourmande où épices, saveurs, gouts et couleurs ne forment qu’un ! Faites une pause et goutez.', '31.634857, -7.980559'),
(38, 7, 'NUIT DANS LE DÉSERT 2J/1N', '/AgenceT/images/activites/NUIT DANS LE DÉSERT 2J1N.jpg', 763, 'MARRAKECH', 'Nous vous invitons à vivre la magie d\'une nuit dans le désert... A 30km de l\'agitation de Marrakech, se trouve une terre aride, sauvage et vallonnée, aux perspectives sans limite, faisant fièrement face au majestueux Atlas, bienvenue dans le désert d\'Agafay ! Le camp ne possède que 10 tentes, de quoi se sentir très privilégié ! D\'une superficie de 30m², elles offrent tout le confort d\'un hôtel avec leur salle de bain (eau chaude) et toilettes en tadelakt, et leur lit king size. Le camp offre également tout un panel d\'activités pour petits et grands. A coup sûr vous repartirez la tête pleine de belles images et de nouvelles sensations... Transferts en 4X4 et demi-pension inclus.', '31.628349, -8.028625'),
(39, 7, 'NUIT DANS L\'ATLAS EN ECOLODGE CONFORT 2J/1N', '/AgenceT/images/activites/NUIT DANS L\'ATLAS EN ECOLODGE CONFORT 2J1N.jpg', 710, 'Marrakech', 'A seulement 1h30 de Marrakech, unique en Afrique, un authentique écolodge pour les amoureux de nature et de sensations, la promesse d’un vrai dépaysement : Après quelques minutes de piste on rejoint l', '31.628349, -8.028625'),
(40, 8, 'RAID BUGGY MARRAKECH PRIVÉ 12J AVEC DÉJEUNER', '/AgenceT/images/activites/RAID BUGGY MARRAKECH PRIVÉ 1/2J AVEC DÉJEUNER.jpg', 2473, 'MARRAKECH', 'Amoureux du Sahara et des montagnes, cette excursion raid buggy privé;, riche en défis extrêmes  dédiée à tout public,Offre l’occasion de contempler toute la continuité géologique incroyable de l’Europe…', '31.431252, -9.746096'),
(41, 8, 'RANDONNÉE EN TERRES BERBÈRES', '/AgenceT/images/activites/RANDONNÉE EN TERRES BERBÈRES.jpg', 409, 'MARRAKECH', 'Marrakech c’est aussi un arrière-pays riche et surprenant, nous vous emmenons dans la région montagneuse d’Imlil le point de départ pour l’ascension du Toubkal le plus haut sommet d’Afrique du nord. Une randonnée pédestre au travers des villages authentiques et des sites naturels merveilleux où vous vous sentirez en total harmonie avec la nature, la variété des paysages est à couper le souffle et la chaleur des rencontres humaines marquera certainement vos esprits. Accessible tous niveaux/âges', '31.343856, -7.751286'),
(42, 8, 'MARRAKECH VUE DU CIEL - MONTGOLFIÈRE', '/AgenceT/images/activites/MARRAKECH VUE DU CIEL - MONTGOLFIÈRE.jpg', 1935, 'MARRAKECH', 'Moment magique et unique, survoler Marrakech dans cette excursion à bord d’un grand ballon à plus de 200 mètres d’altitude, admirez la ville depuis les nuages et sentez que vous volez.', '31.648863, -8.001936'),
(43, 8, 'DINER AUTHENTIQUE À RIAD SOUGTANI - NOTRE EXCLUSIVITÉ', '/AgenceT/images/activites/DINER AUTHENTIQUE À RIAD SOUGTANI - NOTRE EXCLUSIVITÉ.jpg', 538, 'MARRAKECH', 'Choix idéal, l’excursion vous offre confort, diner Authentique au Riad Sougtani synonyme de relaxation avec une gastronomie sans égal. Goutez au frais car ce qui est naturel est beau.', '31.423698, -8.075059'),
(44, 8, 'RANDONNÉE QUAD DÉSERT MARRAKECH & LAC 1J AVEC DÉJ', '/AgenceT/images/activites/RANDONNÉE QUAD DÉSERT MARRAKECH & LAC 1J AVEC DÉJ.jpg', 1753, 'MARRAKECH', 'A 1h de Marrakech, admirez de superbes vues sur les montagnes du Haut-Atlas avec cette journée en quad au cœur du désert d\'Agafay et du majestueux Lac Takerkoust. Ce désert de collines est encore un des secrets les mieux gardés de Marrakech. Le plus : un confortable déjeuner sous tentes, cuisiné chez l\'habitant!  Une journée superbement ficelée avec du matériel de bonne qualité et des guides pros, sympas et attentionnés. Pour les initiés à partir de 18 ans.', '31.353937, -8.131395'),
(45, 8, 'COURS DE CUISINE À MARRAKECH / MARRAK-CHEF', '/AgenceT/images/activites/COURS DE CUISINE À MARRAKECH.jpg', 559, 'MARRAKECH', 'Découvrez la gastronomie et apprenez à concocter des plats insolites marocains dans une excursion gourmande où épices, saveurs, gouts et couleurs ne forment qu’un ! Faites une pause et goutez.', '31.634857, -7.980559'),
(46, 8, 'WAKEBOARD MARRAKECH (2 HEURES DE WAKY)', '/AgenceT/images/activites/WAKEBOARD MARRAKECH (2 HEURES DE WAKY).jpg', 398, 'MARRAKECH', 'A ne pas manquer, le tout nouveau et unique Cable-Parc d’Afrique du Nord est à Marrakech ! Annexé à un lac artificiel de 3Ha spécialement conçu pour la pratique du Wakeboard et figures aquatiques en tout genre ! Dans un cadre paradisiaque avec pour toile de fond les sommets de l’Atlas, vous vivrez des sensations de glisse inégalées.. En toute sécurité, vous serez entourés par une équipe de professionnels, sous l’égide du belge Francis Kootquadruple champion du monde ! A partir de 8 ans, tous niveaux (débutant, initiation, amateur ou rider confirmé).', '31.511144, -7.949692'),
(47, 8, 'DINER SOUS TENTE AU DÉSERT D\'AGAFAY', '/AgenceT/images/activites/DINER SOUS TENTE AU DÉSERT D\'AGAFAY.jpg', 645, 'MARRAKECH', 'Nous vous invitons à vivre la magie d\'une soirée dans le désert... A 40 minutes de l\'agitation de Marrakech, se trouve une terre aride, minérale, sauvage et vallonnée, aux perspectives sans limite, faisant fièrement face au majestueux Atlas, bienvenue dans le désert d\'Agafay !  Un ciel couvert de milliers d\'étoiles, des bougies, tapis et coussins aux couleurs coruscantes, un feu de bois et de grandes tentes blanches, une restauration savoureuse, des serveurs en tenue traditionnelle, garantiront un service attentionné et discret propice à l\'atmosphère de ce lieu exceptionnel. A coup sûr vous repartirez la tête pleine de belles images et de nouvelles sensations... Transferts aller et retour inclus.', '31.632831, -7.982288'),
(49, 9, 'MARRAKECH ESSENTIEL - EXCURSION DEMI-JOURNÉE MARRAKECH', '/AgenceT/images/activites/excursion-demi-journee-marrakech.jpg', 258, 'MARRAKECH', 'Attractions insolites ville inédite, Gueliz cœur de Marrakech, vous emporte dans une excursion Marrakech Essentiel  de milles couleurs, et vous offre ses meilleurs parfums avec la place Jama El Fna, lieu mythique…', '31.631155, -7.989960'),
(50, 9, 'BALADE EN DROMADAIRE DANS LA PALMERAIE MARRAKECH', '/AgenceT/images/activites/BALADE EN DROMADAIRE DANS LA PALMERAIE MARRAKECH.jpg', 247, 'MARRAKECH', 'Observer la Palmeraie sous un autre angle et vivez l’instant dromadaire ! Admirez ces balades en hauteur, assis sur le dos d’animaux majestueux. Excursion grands spectacles ensoleillée et naturellement exceptionnelle.', '31.685589, -7.969069'),
(51, 9, 'LA PALMERAIE EN QUAD', '/AgenceT/images/activites/LA PALMERAIE EN QUAD.jpg', 527, 'MARRAKECH', 'La randonnée en quad dans la palmeraie vous fera voir des paysages fantastiques. Excursion accessible à tous niveaux, amateurs comme expert, en famille ou entre amis avec équipements et sécurité de pointe.', '31.684950, -7.969691'),
(52, 9, 'LES MONTAGNES & VALLÉES DE L\'ATLAS - EXCURSION EN 4X4', '/AgenceT/images/activites/LES MONTAGNES & VALLÉES DE L\'ATLAS - EXCURSION EN.jpg', 699, 'MARRAKECH', 'Aventure et découverte ! Une excursion incontournable en 4x4 offrant un aperçu complet des paysages de haute montagne, de ses sommets enneigés à ses plateaux désertiques, une véritable rencontre avec le vrai Maroc et ses habitants de l’Atlas. Une journée ponctuée par un déjeuner bien agréable dans un gîte de montagne avec piscine et une magnifique vue à 360° sur l’Atlas…', '31.653887, -8.008352'),
(53, 9, 'DINER AUTHENTIQUE À RIAD SOUGTANI - NOTRE EXCLUSIVITÉ', '/AgenceT/images/activites/DINER AUTHENTIQUE À RIAD SOUGTANI - NOTRE EXCLUSIVITÉ.jpg', 538, 'MARRAKECH', 'Choix idéal, l’excursion vous offre confort, diner Authentique au Riad Sougtani synonyme de relaxation avec une gastronomie sans égal. Goutez au frais car ce qui est naturel est beau.', '31.423698, -8.075059'),
(54, 9, 'MEDINA BIEN ÊTRE - HAMMAM & MASSAGE\r\nÀ PARTIR DE\r\n409 DHS\r\nPAR PERSONNE\r\n', '/AgenceT/images/activites/MEDINA BIEN ÊTRE - HAMMAM & MASSAGE.jpg', 409, 'MARRAKECH', 'Au-delà du bien-être procuré, il s’agit d’une véritable expérience culturelle à ne pas manquer. Pratiqués depuis l’antiquité au Maroc, le hammam et le massage apportent détente, soulagement musculaire, hydratation de la peau et protection immunitaire. C’est au cœur d’un élégant riad, cocooné par une équipe de professionnels utilisant des produits 100% naturels, que nous vous invitons à découvrir cet art ancestral et à en savourer ses bienfaits... A partir de 6 ans.', '31.629255, -7.986484'),
(55, 9, 'DINER SOUS TENTE AU DÉSERT D\'AGAFAY', '/AgenceT/images/activites/DINER SOUS TENTE AU DÉSERT D\'AGAFAY.jpg', 645, 'MARRAKECH', 'Nous vous invitons à vivre la magie d\'une soirée dans le désert... A 40 minutes de l\'agitation de Marrakech, se trouve une terre aride, minérale, sauvage et vallonnée, aux perspectives sans limite, faisant fièrement face au majestueux Atlas, bienvenue dans le désert d\'Agafay !  Un ciel couvert de milliers d\'étoiles, des bougies, tapis et coussins aux couleurs coruscantes, un feu de bois et de grandes tentes blanches, une restauration savoureuse, des serveurs en tenue traditionnelle, garantiront un service attentionné et discret propice à l\'atmosphère de ce lieu exceptionnel. A coup sûr vous repartirez la tête pleine de belles images et de nouvelles sensations... Transferts aller et retour inclus.', '31.632831, -7.982288'),
(56, 9, 'NUIT DANS LE DÉSERT 2J/1N', '/AgenceT/images/activites/NUIT DANS LE DÉSERT 2J1N.jpg', 763, 'MARRAKECH', 'Nous vous invitons à vivre la magie d\'une nuit dans le désert... A 30km de l\'agitation de Marrakech, se trouve une terre aride, sauvage et vallonnée, aux perspectives sans limite, faisant fièrement face au majestueux Atlas, bienvenue dans le désert d\'Agafay ! Le camp ne possède que 10 tentes, de quoi se sentir très privilégié ! D\'une superficie de 30m², elles offrent tout le confort d\'un hôtel avec leur salle de bain (eau chaude) et toilettes en tadelakt, et leur lit king size. Le camp offre également tout un panel d\'activités pour petits et grands. A coup sûr vous repartirez la tête pleine de belles images et de nouvelles sensations... Transferts en 4X4 et demi-pension inclus.', '31.628349, -8.028625'),
(57, 10, 'RANDONNÉE EN TERRES BERBÈRES', '/AgenceT/images/activites/RANDONNÉE EN TERRES BERBÈRES.jpg', 409, 'MARRAKECH', 'Marrakech c’est aussi un arrière-pays riche et surprenant, nous vous emmenons dans la région montagneuse d’Imlil le point de départ pour l’ascension du Toubkal le plus haut sommet d’Afrique du nord. Une randonnée pédestre au travers des villages authentiques et des sites naturels merveilleux où vous vous sentirez en total harmonie avec la nature, la variété des paysages est à couper le souffle et la chaleur des rencontres humaines marquera certainement vos esprits. Accessible tous niveaux/âges', ''),
(58, 10, 'DINER SOUS TENTE AU DÉSERT D\'AGAFAY', '/AgenceT/images/activites/DINER SOUS TENTE AU DÉSERT D\'AGAFAY.jpg', 645, 'MARRAKECH', 'Nous vous invitons à vivre la magie d\'une soirée dans le désert... A 40 minutes de l\'agitation de Marrakech, se trouve une terre aride, minérale, sauvage et vallonnée, aux perspectives sans limite, faisant fièrement face au majestueux Atlas, bienvenue dans le désert d\'Agafay !  Un ciel couvert de milliers d\'étoiles, des bougies, tapis et coussins aux couleurs coruscantes, un feu de bois et de grandes tentes blanches, une restauration savoureuse, des serveurs en tenue traditionnelle, garantiront un service attentionné et discret propice à l\'atmosphère de ce lieu exceptionnel. A coup sûr vous repartirez la tête pleine de belles images et de nouvelles sensations... Transferts aller et retour inclus.', ''),
(59, 1, 'MARRAKECH ESSENTIEL - EXCURSION DEMI-JOURNÉE MARRA...', '/AgenceT/images/activites/excursion-demi-journee-marrakech.jpg', 259, '', 'Attractions insolites ville inédite, Gueliz cœur de Marrakech, vous emporte dans une excursion Marrakech Essentiel  de milles couleurs, et vous offre ses meilleurs parfums avec la place Jama El Fna, lieu mythique…', '31.631155, -7.989960');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_catg` int(11) NOT NULL,
  `nom_catg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_catg`, `nom_catg`) VALUES
(1, 'Culture & Tradition'),
(2, 'Sport & Aventure'),
(3, 'Nature & Découverte'),
(4, 'Détente & Loisirs'),
(5, 'Bien-Etre'),
(6, 'Saveurs Marocaines'),
(7, 'Circuits & Mini Tours'),
(8, 'Experience Uniques'),
(9, 'Spécial Groupes'),
(10, 'Voyage à 2');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `email`, `tel`, `pays`, `adresse`, `pass`) VALUES
(1, 'hiba', 'benssouissi.hiba99@gmail.com', '23646546', 'Moroco', 'Doha', 'hiba'),
(2, 'HIBA', 'lhbob1999@gmail.com', '0259873216', 'pays', 'paus', 'HIBA');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id_rsev` int(11) NOT NULL,
  `id_clt` int(11) NOT NULL,
  `act_nom` varchar(200) NOT NULL,
  `nbrEnfants` int(11) NOT NULL,
  `nbrAdultes` int(11) NOT NULL,
  `act_date` date NOT NULL,
  `montant_act` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id_rsev`, `id_clt`, `act_nom`, `nbrEnfants`, `nbrAdultes`, `act_date`, `montant_act`) VALUES
(5, 1, 'MARRAKECH ESSENTIEL - EXCURSION DEMI-JOURNÉE MARRAKECH', 0, 1, '2020-02-02', 258),
(6, 1, 'MARRAKECH ESSENTIEL - EXCURSION DEMI-JOURNÉE MARRAKECH', 0, 1, '2020-02-03', 258),
(7, 1, 'VISITE GUIDÉE PREMIUM - EXCURSION DEMI-JOURNÉE 1/2J', 2, 2, '2020-03-05', 936);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id_act`),
  ADD KEY `id_catg` (`id_catg`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_catg`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_rsev`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_catg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_rsev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `activites_ibfk_1` FOREIGN KEY (`id_catg`) REFERENCES `categorie` (`id_catg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
