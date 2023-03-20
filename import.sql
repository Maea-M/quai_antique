-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.31 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour quai_antique
CREATE DATABASE IF NOT EXISTS `quai_antique` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `quai_antique`;

-- Listage de la structure de la table quai_antique. booking
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number_guest` int NOT NULL,
  `date` date NOT NULL,
  `allergy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hour` time NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.booking : ~8 rows (environ)
INSERT INTO `booking` (`id`, `number_guest`, `date`, `allergy`, `hour`, `name`) VALUES
	(12, 5, '2023-03-18', 'pistache', '20:30:00', 'test du jour'),
	(13, 2, '2023-03-18', NULL, '20:00:00', 'test admin'),
	(14, 2, '2023-12-14', NULL, '13:30:00', 'test modal'),
	(15, 2, '2024-06-01', NULL, '12:00:00', 'test3'),
	(16, 2, '2023-05-01', NULL, '13:15:00', 'tft'),
	(17, 2, '2024-01-01', NULL, '21:45:00', '2'),
	(18, 2, '2024-01-01', NULL, '12:00:00', 'lfskjdf'),
	(19, 2, '2026-10-11', NULL, '12:00:00', 'bidule du 18'),
	(20, 1, '2024-01-01', '00', '20:45:00', 'dqsd'),
	(21, 1, '2024-01-01', NULL, '12:00:00', 'test valida');

-- Listage de la structure de la table quai_antique. doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table quai_antique.doctrine_migration_versions : ~21 rows (environ)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20230219084557', '2023-03-01 16:00:21', 38),
	('DoctrineMigrations\\Version20230219085231', '2023-03-01 16:00:21', 56),
	('DoctrineMigrations\\Version20230219090107', '2023-03-01 16:00:21', 11),
	('DoctrineMigrations\\Version20230219090717', '2023-03-01 16:00:21', 10),
	('DoctrineMigrations\\Version20230219091511', '2023-03-03 08:54:07', 2),
	('DoctrineMigrations\\Version20230219091925', '2023-03-03 08:54:07', 13),
	('DoctrineMigrations\\Version20230219092945', '2023-03-03 08:54:07', 10),
	('DoctrineMigrations\\Version20230219093105', '2023-03-03 08:54:07', 11),
	('DoctrineMigrations\\Version20230219104736', '2023-03-03 08:54:07', 42),
	('DoctrineMigrations\\Version20230228123142', '2023-03-03 08:54:07', 7),
	('DoctrineMigrations\\Version20230301180543', '2023-03-03 08:55:14', 3),
	('DoctrineMigrations\\Version20230303091626', '2023-03-03 09:16:38', 35),
	('DoctrineMigrations\\Version20230303092930', '2023-03-03 09:29:43', 29),
	('DoctrineMigrations\\Version20230303093623', '2023-03-03 09:36:37', 10),
	('DoctrineMigrations\\Version20230303093938', '2023-03-03 10:01:09', 12),
	('DoctrineMigrations\\Version20230303112845', '2023-03-03 11:30:48', 27),
	('DoctrineMigrations\\Version20230303113247', '2023-03-03 11:33:20', 12),
	('DoctrineMigrations\\Version20230311133044', '2023-03-11 13:30:59', 35),
	('DoctrineMigrations\\Version20230318132740', '2023-03-18 13:28:01', 39),
	('DoctrineMigrations\\Version20230318133621', '2023-03-18 13:36:57', 20),
	('DoctrineMigrations\\Version20230318134139', '2023-03-18 13:41:50', 13);

-- Listage de la structure de la table quai_antique. formula
CREATE TABLE IF NOT EXISTS `formula` (
  `id` int NOT NULL AUTO_INCREMENT,
  `price` decimal(5,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67315881CCD7E912` (`menu_id`),
  CONSTRAINT `FK_67315881CCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.formula : ~1 rows (environ)
INSERT INTO `formula` (`id`, `price`, `description`, `menu_id`, `title`) VALUES
	(1, 15.00, '<div>Entrée : Salade avocat crevette<br>Plat : Pommes de terre sautées aux champignons et aux lardons<br>Dessert : Café gourmand</div>', NULL, 'Formule du midi'),
	(2, 10.00, '<div>Entrée : tomates cerises<br>Plat : Frites maison accompagné de nuggets de poulet<br>Dessert : mousse au chocolat</div>', NULL, 'Formule enfant');

-- Listage de la structure de la table quai_antique. image_gallery
CREATE TABLE IF NOT EXISTS `image_gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.image_gallery : ~3 rows (environ)
INSERT INTO `image_gallery` (`id`, `title`, `image`) VALUES
	(2, 'Entrée', 'entree-1678882354.jpg'),
	(3, 'Dessert', 'dessert-1678882391.jpg'),
	(4, 'Plat', 'asperges-1678984603.jpg');

-- Listage de la structure de la table quai_antique. meal
CREATE TABLE IF NOT EXISTS `meal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.meal : ~4 rows (environ)
INSERT INTO `meal` (`id`, `category`, `title`, `description`, `price`) VALUES
	(3, 'Nos entrées', 'La Truite Rose', 'Filet de truite rose', 7.00),
	(4, 'Nos entrées', 'Le Foie Gras', 'Ravioles de foie gras maison', 7.00),
	(5, 'Nos entrées', 'L\'œuf', 'Blanc en basse température, sabayon fumé', 7.00),
	(6, 'Nos entrées', 'La Langoustine', 'Cuisinée selon l\'inspiration du moment.', 7.00);

-- Listage de la structure de la table quai_antique. menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.menu : ~9 rows (environ)
INSERT INTO `menu` (`id`, `title`, `description`) VALUES
	(1, 'La Truite Rose', 'Filet de truite rose grillé au chorizo de bœuf, fondue de fenouil, coquillages de saison en marinière, gelée iodée, chips de chorizo de bœuf, vinaigrette de soja et mangue à la menthe'),
	(2, 'Le Foie Gras', 'Ravioles de foie gras maison, bisque de carapaces à la citronnelle, tapioca soufflé, épinards et jeunes pousses'),
	(3, 'L\'oeuf', 'Blanc en basse température, sabayon fumé, cigare croustillant, champignons rôtis en persillade, jaune séché au safran, jus de viande'),
	(4, 'La langoustine', 'Cuisinée selon l\'inspiration du moment.'),
	(5, 'Le pigeon', 'Filet de pigeon laqué, pulpe fine de betterave, légumes glacés, cuisse confite, chips de légumes, jus de viande aux abats'),
	(6, 'Le burger', 'Pain Burger maison aux graines, steak haché minute de bœuf de l’Aubrac, cheddar affiné, poivrons grillés, chorizo de bœuf, frites et ketchup maison'),
	(7, 'Le ris de veau', 'Ris de veau doré à la brioche, pulpe de patate douce, carotte et légumes glacés, crumble aux herbes, jus au Madère'),
	(8, 'Le poisson maigre', 'Filet de maigre rôti, mousse de pommes de terre, jus de mer et chlorophylle, concombre rôti, « célerisotto » au parmesan, ail frit, écume iodée'),
	(9, 'Le poisson noble', 'Poisson noble, selon arrivage, cuisiné selon l\'inspiration du jour');

-- Listage de la structure de la table quai_antique. messenger_messages
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.messenger_messages : ~0 rows (environ)

-- Listage de la structure de la table quai_antique. open_hour
CREATE TABLE IF NOT EXISTS `open_hour` (
  `id` int NOT NULL AUTO_INCREMENT,
  `open_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.open_hour : ~0 rows (environ)
INSERT INTO `open_hour` (`id`, `open_time`, `active`) VALUES
	(1, 'Lundi 12h00-14h00', 0);

-- Listage de la structure de la table quai_antique. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table quai_antique.user : ~4 rows (environ)
INSERT INTO `user` (`id`, `email`, `roles`, `password`, `lastname`, `firstname`) VALUES
	(1, 'testadmin@test.fr', '["ROLE_USER",["ROLE_ADMIN"]]', '$2y$13$IE.CEVlVUB.j43yYpekzxeEhm0Ah.EO20VbP3OUgMo2jBA7q3faZm', 'test', 'admin'),
	(2, 'admin@admin.fr', '["ROLE_USER","ROLE_ADMIN"]', '$2y$13$9acpJ1j64o6xQAM.cxxwv.euHN8DXB86IUNdxVkuUxk7cct/ea9Py', 'admin', 'admin'),
	(4, 'user@test.fr', '["ROLE_USER"]', '$2y$13$yPiqLDIq3FrOQoeFfSoegeTN.eaPCrnSdbrVt6V82iOK8qLbhLYgW', 'test2', 'user'),
	(5, 'enora@test.fr', '["ROLE_USER"]', '$2y$13$oE9iY6w3mJQLi/pt1fY2i.Oz2e4JLdclmVLPPz3fSMCKU7mJoOZje', 'Test', 'enora');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
