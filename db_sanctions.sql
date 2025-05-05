-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 mai 2025 à 11:19
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_sanctions`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `id_eleve` int(11) NOT NULL,
  `nom_eleve` varchar(50) NOT NULL,
  `prenom_eleve` varchar(50) NOT NULL,
  `id_promotion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id_eleve`, `nom_eleve`, `prenom_eleve`, `id_promotion`) VALUES
(4, 'ADRIAN', 'Gaël', 5),
(5, 'BOUGNON', 'Mika', 5),
(6, 'BRUYERE', 'Adrien', 5),
(7, 'CHILINSKI', 'Michal', 5),
(8, 'COLLEU', 'Arthur', 5),
(9, 'CROZE', 'Denis', 5),
(10, 'Clément', 'SILVA', 5),
(11, 'DEMIR', 'Efe', 5),
(12, 'Titouan', 'MOUAFIK', 5),
(13, 'FAINDT', 'Melvin', 5),
(14, 'FIGARD', 'Alexi', 5),
(15, 'GAUTHIER', 'Alexandre', 5),
(16, 'HAMILCARO', 'Nolan', 5),
(17, 'ILOAI', 'Dany', 5),
(18, 'JORAY', 'Jules', 5),
(19, 'KOHLER', 'Mael', 5),
(20, 'LANGUE', 'Lukas', 5),
(21, 'LETHIER', 'Valentin', 5),
(22, 'MICHELIN', 'Thomas', 5),
(23, 'MIGNOT', 'Antoine', 5),
(24, 'MOUGIN', 'Léo', 5),
(25, 'NERET', 'Antoine', 5),
(26, 'NGUYEN', 'Khang', 5),
(27, 'NGUYEN', 'Phong', 5),
(28, 'NICOLET', 'Thomas', 5),
(29, 'PETITEAU', 'Grégoire', 5),
(30, 'SCHIESSLÉ', 'Andy', 5),
(31, 'SERMET', 'Maxime', 5),
(32, 'TALBOT', 'Hugo', 5),
(33, 'TIATIA', 'Teuiau', 5),
(34, 'ADRIAN', 'Gaël', 6),
(35, 'BOUGNON', 'Mika', 6),
(36, 'BRUYERE', 'Adrien', 6),
(37, 'CHILINSKI', 'Michal', 6),
(38, 'COLLEU', 'Arthur', 6),
(39, 'CROZE', 'Denis', 6),
(40, 'Cl�ment', 'SILVA', 6),
(41, 'DEMIR', 'Efe', 6),
(42, 'Titouan', 'MOUAFIK', 6),
(43, 'FAINDT', 'Melvin', 6),
(44, 'FIGARD', 'Alexi', 6),
(45, 'GAUTHIER', 'Alexandre', 6),
(46, 'HAMILCARO', 'Nolan', 6),
(47, 'ILOAI', 'Dany', 6),
(48, 'JORAY', 'Jules', 6),
(49, 'KOHLER', 'Mael', 6),
(50, 'LANGUE', 'Lukas', 6),
(51, 'LETHIER', 'Valentin', 6),
(52, 'MICHELIN', 'Thomas', 6),
(53, 'MIGNOT', 'Antoine', 6),
(54, 'MOUGIN', 'Léo', 6),
(55, 'NERET', 'Antoine', 6),
(56, 'NGUYEN', 'Khang', 6),
(57, 'NGUYEN', 'Phong', 6),
(58, 'NICOLET', 'Thomas', 6),
(59, 'PETITEAU', 'Grégoire', 6),
(60, 'SCHIESSLÉ', 'Andy', 6),
(61, 'SERMET', 'Maxime', 6),
(62, 'TALBOT', 'Hugo', 6),
(63, 'TIATIA', 'Teuiau', 6);

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `id_promo` int(11) NOT NULL,
  `annee_promo` varchar(10) NOT NULL,
  `libelle_promo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promotions`
--

INSERT INTO `promotions` (`id_promo`, `annee_promo`, `libelle_promo`) VALUES
(5, '2023', 'BTS SIO '),
(6, '2024', 'BTS SIO'),
(7, '2025', 'BTS SIO');

-- --------------------------------------------------------

--
-- Structure de la table `sanctions`
--

CREATE TABLE `sanctions` (
  `id_sanction` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `nom_demandeur` varchar(255) NOT NULL,
  `motif` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `date_incident` date NOT NULL,
  `date_creation` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sanctions`
--

INSERT INTO `sanctions` (`id_sanction`, `id_eleve`, `nom_demandeur`, `motif`, `description`, `date_incident`, `date_creation`, `id_user`) VALUES
(1, 16, 'JeanBon', 'mange des bananes', 'feur', '2025-04-01', '2025-04-08', 11);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `password_user`) VALUES
(11, 'rock', 'the', 'the.rock@gmail.com', '$2y$10$HSNMYtuo9pC/.15MH93ZNeyEBquf8bH8skUNJPTQBdYyXZrSI6vEa'),
(12, 'Lamy', 'Franck', 'franck.lamy@gmail.com', '$2y$10$bjoR8zOmPIrEM0RGEylLieee8mfcKFMSoGrOdiJF9QXv9xAZ/K3La'),
(13, 'Colleu', 'Arthur', 'jean@gmail.com', '$2y$10$DZ0mTJMDjh01NztIIV2/.OUWfjAPI6P2Y6UoKSEl7NyMLJZH6S5/i');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`id_eleve`),
  ADD KEY `FK_eleve_promotion` (`id_promotion`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id_promo`);

--
-- Index pour la table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`id_sanction`),
  ADD KEY `id_eleve` (`id_eleve`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `id_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id_sanction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD CONSTRAINT `FK_eleve_promotion` FOREIGN KEY (`id_promotion`) REFERENCES `promotions` (`id_promo`);

--
-- Contraintes pour la table `sanctions`
--
ALTER TABLE `sanctions`
  ADD CONSTRAINT `sanctions_ibfk_1` FOREIGN KEY (`id_eleve`) REFERENCES `eleves` (`id_eleve`),
  ADD CONSTRAINT `sanctions_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
