-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : dailyfedamien.mysql.db
-- Généré le : dim. 08 mai 2022 à 10:23
-- Version du serveur : 5.6.50-log
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dailyfedamien`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'produit laitier'),
(2, 'fruit'),
(3, 'légume'),
(4, 'viande');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `civility` binary(50) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `codePostal` decimal(5,0) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `rgpd` binary(50) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `civility`, `lastname`, `firstname`, `address`, `codePostal`, `ville`, `mail`, `phone`, `mdp`, `rgpd`) VALUES
(9, 0x4d72000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'admin', 'admin', 'ici et ailleurs', '56000', 'paris', 'admin@admin.fr', '0123456789', '$2y$10$E.bDzEhaLYCiqsDv7MOVxeb.R.D4/yuRlbA0fJldS3sGg//CNeRoK', 0x6f6e000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `civility` binary(1) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `raison` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `civility`, `lastname`, `firstname`, `phone`, `mail`, `raison`, `content`) VALUES
(6, 0x4d, 'admin', 'admin', '0123456789', 'admin@admin.fr', 'reclamation', 'ceci est un essai');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `alt`, `description`, `price`, `categories_id`, `img`) VALUES
(13, 'lait fermier', 'lait fermier bio', 'Lait fermier bio', '3', 1, 'app/Public/design/images/webp/lait-fermier-bio.webp'),
(14, 'beurre', ' beurre de baratte', 'beurre de baratte demi sel', '2', 1, 'app/Public/design/images/webp/beurre-de-baratte-moule.webp'),
(15, 'cerise', 'cerise', 'cerise', '4', 2, 'app/Public/design/images/webp/cerises.webp'),
(16, 'oignon', 'oignon rouge', 'Oignon originaire de Bretagne', '1', 3, 'app/Public/design/images/webp/oignon-rouge-bio-origine-france.webp'),
(17, 'yaourt', 'yaourt', 'yaourt', '5', 1, 'app/Public/design/images/webp/yaourt.webp');

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

CREATE TABLE `producteur` (
  `id` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `producteur`
--

INSERT INTO `producteur` (`id`, `lastname`, `firstname`, `mail`, `mdp`) VALUES
(30, 'admin', 'admin', 'admin@admin.fr', '$2y$10$fQ.du2hLD73VTqNZGrzqaeaQchrrSCw.ZWPjSBrgQ8thT7LzSeRCG');

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `slider`
--

INSERT INTO `slider` (`id`, `url`, `alt`) VALUES
(1, 'app/Public/design/images/champ-ble.jpg', 'champ de blé'),
(2, 'app/Public/design/images/champ.jpg', 'champ de blé'),
(3, 'app/Public/design/images/vigne.jpg', 'vigne');

-- --------------------------------------------------------

--
-- Structure de la table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `testimonial` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `slider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `testimonials`
--

INSERT INTO `testimonials` (`id`, `photo`, `testimonial`, `alt`, `slider_id`) VALUES
(1, 'app/Public/design/images/visage-femme.jpg', 'ce site est super', 'femme témoignant de la grande qualité de ce projet', 1),
(2, 'app/Public/design/images/visage-souriant.jpg', 'Maintenant je consomme local', 'homme témoignant de la grande qualité de ce projet', 2),
(3, 'app/Public/design/images/visage-souriant-homme.jpg', 'Des produits frais toutes l\'année !', 'Un homme heureux', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_fk0` (`categories_id`);

--
-- Index pour la table `producteur`
--
ALTER TABLE `producteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_id` (`slider_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `producteur`
--
ALTER TABLE `producteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_fk0` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `id_slider` FOREIGN KEY (`slider_id`) REFERENCES `slider` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
