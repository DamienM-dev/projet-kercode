-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de la table producteur. categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table producteur.categories : ~4 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'produit laitier'),
	(2, 'fruit'),
	(3, 'légume'),
	(4, 'viande');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table producteur. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civility` binary(50) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `codePostal` decimal(5,0) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `rgpd` binary(50) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table producteur.client : ~5 rows (environ)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id`, `civility`, `lastname`, `firstname`, `address`, `codePostal`, `ville`, `mail`, `phone`, `mdp`, `rgpd`) VALUES
	(1, _binary 0x3000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'admin', 'admin', 'hfhfh', 45899, 'paris', 'admin@gmail.fr', '0123456789', '$2y$10$G.QtMpGGc8TKzyL8DPNZYO10je6PCtBNDmqIwETTf7LDHzhKRjzAy', _binary 0x3000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
	(2, _binary 0x4D72000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'blanchard', 'bernard', 'dffz', 36102, 'Kaunas', 'dzef@gm.gd', '0123456789', '$2y$10$bYuo8.dsrIIhBOhlTJ.gIO2LdsaSi9KFk9/epGdwsg46w/vnIbuvu', _binary 0x6F6E000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
	(3, _binary 0x4D72000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'ff', 'dddd', 'ffffff', 56311, 'dddd', 'ddd@g.ds', '0123456789', '$2y$10$D2aZv8obigZ8U6QDJDyZmuMQ0A08IZGUxH4exnrVREZ8pjEDFz7ju', _binary 0x6F6E000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
	(4, _binary 0x4D72000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'ff', 'dddd', 'ffffff', 56311, 'dddd', 'ddd@g.ds', '0123456789', '$2y$10$Ct2gBlfBa.S34hA4dalzuuI4LpbEtaZ5dK4CRliC.zIQ9U7lmryiS', _binary 0x6F6E000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
	(5, _binary 0x4D72000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'ff', 'dddd', 'ffffff', 56311, 'dddd', 'ddd@g.ds', '0123456789', '$2y$10$fH91lXDiX4r7dQrCtkvLoOmu/z0Bhd7aIBV4uNqVA4haGl2PQU752', _binary 0x6F6E000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table producteur. contact
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civility` binary(1) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `raison` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table producteur.contact : ~0 rows (environ)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Listage de la structure de la table producteur. product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_fk0` (`categories_id`),
  CONSTRAINT `product_fk0` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table producteur.product : ~5 rows (environ)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `alt`, `description`, `price`, `categories_id`, `img`) VALUES
	(13, 'lait fermier', 'lait fermier bio', 'Lait fermier bio', 3, 1, 'app/Public/design/images/webp/lait-fermier-bio.webp'),
	(14, 'beurre', ' beurre de baratte', 'beurre de baratte demi sel', 2, 1, 'app/Public/design/images/webp/beurre-de-baratte-moule.webp'),
	(15, 'cerise', 'cerise', 'cerise', 4, 2, 'app/Public/design/images/webp/cerises.webp'),
	(16, 'oignon', 'oignon rouge', 'Oignon originaire de Bretagne', 1, 3, 'app/Public/design/images/webp/oignon-rouge-bio-origine-france.webp'),
	(17, 'yaourt', 'yaourt', 'yaourt', 5, 1, 'app/Public/design/images/webp/yaourt.webp');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Listage de la structure de la table producteur. producteur
DROP TABLE IF EXISTS `producteur`;
CREATE TABLE IF NOT EXISTS `producteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table producteur.producteur : ~28 rows (environ)
/*!40000 ALTER TABLE `producteur` DISABLE KEYS */;
INSERT INTO `producteur` (`id`, `lastname`, `firstname`, `mail`, `mdp`) VALUES
	(1, 'admin', 'admin', 'admin@gmai.de', '$2y$10$0kA8hS.WzOr85NIotXG9Ce/lhO1xqCMmhKcvN27lzXlX35RbF..VK'),
	(2, 'admin', 'admin', 'admin@gmai.de', '$2y$10$tClIJIn.WCikdm22ERcV/OYRn.2VavY6BZtFfuUQsZfNKJY5q8T5i'),
	(3, 'admin', 'admin', 'admin@gmai.de', '$2y$10$uuCLk4Rwomv6tRCq5Rz6eelNTuIzLbmWRibNCpmeAnLasoEiZiTni'),
	(4, 'admin', 'admin', 'admin@gmai.de', '$2y$10$YWQdUYT3KaOqM3Mu8v1LUuyYNVM.lnUsPVLdf4XyIrPHIV3S9BWia'),
	(5, 'admin', 'admin', 'admin@gmai.de', '$2y$10$QejEOe0J5aoN9WjjVFG4R.VPH7nxHrcBBmNS3B/iGTTRl7h364hHq'),
	(6, 'admin', 'admin', 'admin@gmai.de', '$2y$10$CGJmlWCxCm68/vncgpkCvOxDYw7JXoRkaZwnt/XImsTNiHE6aTVbi'),
	(7, 'admin', 'admin', 'admin@j.fr', '$2y$10$oqXrHCazDp0fBTQtfqouhe9Uf34nSQu./4uc3O7YJ8K5VYy77Mcmy'),
	(8, 'admin', 'admin', 'admin@j.fr', '$2y$10$t.3rWd9ULFfWCQ2v/DRsN.SdJMNTEjQIXcYfMlLxey7JxMVEPPQTu'),
	(9, 'admin', 'admin', 'admin@j.fr', '$2y$10$pBwYI2LI1OGfJnMdR85BwO6MZe6khQ4NYwruz25DYhEsc41pfKXXi'),
	(10, 'admin', 'admin', 'admin@j.fr', '$2y$10$hTC6240MmbVpoBSNeUazEeqnC./EfBC9PDXjJwbDBtx.y5OS7d30m'),
	(11, 'admin', 'admin', 'admin@j.fr', '$2y$10$00Qn5cZwBf5mlU/A4.BIUe6RN55xQ53CqfKYQ8A03tp339GZmyR.O'),
	(12, 'admin', 'admin', 'admin@j.fr', '$2y$10$t4aSxpaH4T5EblglAD.RVe2fTVjph8A3A5T9VhpD7aJl4HwKX/RmG'),
	(13, '', '', '', '$2y$10$PH0hs4uH9BL4De3H6KIkLeMveo6GpslhtVMXcWg7CvwlsdsHUy5Ju'),
	(14, '', '', '', '$2y$10$WARX2aqN6pRQVqe6ZRVf7Oo/QX2FmlFdF6h4R8H7CTlL2QSsa.kmy'),
	(15, '', '', '', '$2y$10$1Y/Bamn79PIDMQG4fDVE0ep7eySs8ATLtDFLSd0PZS6e8/xbR171K'),
	(16, '', '', '', '$2y$10$vHv8iVR1Ylmg1WcHE1pWyOqRxh6tfh4S4Yf7Cc6u8o6MrPqI./ip6'),
	(17, '', '', '', '$2y$10$DhxndI.MWtC2FSoQP.A9RuhQ1/bcQSun3MlEdNpo8EruS3aPTZ0XG'),
	(18, '', '', '', '$2y$10$GwWXFyANqagiy/GzCI0UruQdpc4d8169cxONBmn4uV7FOt4EMpfuS'),
	(19, '', '', '', '$2y$10$VUX3/klq4bkmgH2uNZZcmOvdO27GrysQqKh2dWC8kMaTxAjPMHJ1S'),
	(20, '', '', '', '$2y$10$gptctEzmJKtGqFTc8.3iUeb8wwb.SlWUlKvsnufHrRj6oI9lywJEe'),
	(21, '', '', '', '$2y$10$dTeMJtQf.kve6TLOIi03LOXSSuwevfR7rwf8EYP.wmkgziBNwgL9y'),
	(22, 'damien', 'damien', 'damien@gmail.com', '$2y$10$JDydG.eyih6Z4nAO5bwqe.zYeLePPGUTkAFrf.q89Zdt3Ev.wbm9.'),
	(23, 'damien', 'damien', 'damien@gmail.com', '$2y$10$gyRLnO3bgovhQmGE0PFCBeXJxlSojSi0/AFOK.46UpGsFDTFV5OAS'),
	(24, 'damien', 'damien', 'damien@gmail.com', '$2y$10$e776dbjCrpNwJOEAmp5yHO9a9pfKmG29T43lGDe30s/SMCaQc.AKy'),
	(25, 'damien', 'damien', 'damien@gmail.com', '$2y$10$K5bw13BUaS/nqYlRueywneToJr3UDfe2FESvuc9R5NcjfJQenhNC2'),
	(26, 'damien', 'damien', 'damien@gmail.com', '$2y$10$0CNafDf7YMaaAHCiXWru..QByP3b.GDDM2j8iGKOqGM5U9SX4/5Vm'),
	(27, 'damien', 'damien', 'damien@gmail.com', '$2y$10$x5uws4fYtjuZXxVH7N7lHel5gtpjgfAvTrku1m1A5dT9GF.d9EOWW'),
	(28, '', '', '', '$2y$10$TOLTBJUYpEH.joVcJGkueu7YTe8fpFlJ2CKoYazdfcGhn7e/p1hNi');
/*!40000 ALTER TABLE `producteur` ENABLE KEYS */;

-- Listage de la structure de la table producteur. slider
DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table producteur.slider : ~3 rows (environ)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id`, `url`, `alt`) VALUES
	(1, 'app/Public/design/images/herbe.jpg', 'herbe'),
	(2, 'app/Public/design/images/champ.jpg', 'champ de blé'),
	(3, 'app/Public/design/images/vigne.jpg', 'vigne');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Listage de la structure de la table producteur. testimonials
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `testimonial` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `slider_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slider_id` (`slider_id`),
  CONSTRAINT `id_slider` FOREIGN KEY (`slider_id`) REFERENCES `slider` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

-- Listage des données de la table producteur.testimonials : ~3 rows (environ)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `photo`, `testimonial`, `alt`, `slider_id`) VALUES
	(1, 'app\\Public\\design\\images\\visage-femme.jpg', 'ce site est super', 'femme témoignant de la grande qualité de ce projet', 1),
	(2, 'app/Public/design/images/visage-souriant.jpg', 'Maintenant je consomne local', 'homme témoignant de la grande qualité de ce projet', 2),
	(3, 'app\\Public\\design\\images\\visage-souriant-homme.jpg', 'Des produits frais toutes l\'année !', 'Un homme heureux', 3);
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
