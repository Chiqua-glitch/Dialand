-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 01 avr. 2023 à 22:52
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dialand`
--

-- --------------------------------------------------------

--
-- Structure de la table `materials`
--

CREATE TABLE `materials` (
  `Id_material` varchar(13) NOT NULL,
  `Nom_material` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prices`
--

CREATE TABLE `prices` (
  `Id_price` varchar(13) NOT NULL,
  `Value_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `Id_product` varchar(13) NOT NULL,
  `Nom_product` varchar(50) NOT NULL,
  `Img_product` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products_materials`
--

CREATE TABLE `products_materials` (
  `Id_product` varchar(13) NOT NULL,
  `Id_material` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products_prices`
--

CREATE TABLE `products_prices` (
  `Id_product` varchar(13) NOT NULL,
  `Id_price` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products_sizes`
--

CREATE TABLE `products_sizes` (
  `Id_product` varchar(13) NOT NULL,
  `Id_size` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sizes`
--

CREATE TABLE `sizes` (
  `Id_size` varchar(13) NOT NULL,
  `Nom_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id_user` varchar(13) NOT NULL,
  `Nom_user` varchar(20) NOT NULL,
  `Email_user` varchar(50) NOT NULL,
  `Password_user` varchar(100) NOT NULL,
  `Date_user` datetime NOT NULL,
  `Order_user` int(11) NOT NULL,
  `Role_user` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`Id_material`);

--
-- Index pour la table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`Id_price`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id_product`);

--
-- Index pour la table `products_materials`
--
ALTER TABLE `products_materials`
  ADD PRIMARY KEY (`Id_product`,`Id_material`),
  ADD KEY `Id_material` (`Id_material`);

--
-- Index pour la table `products_prices`
--
ALTER TABLE `products_prices`
  ADD PRIMARY KEY (`Id_product`,`Id_price`),
  ADD KEY `Id_price` (`Id_price`);

--
-- Index pour la table `products_sizes`
--
ALTER TABLE `products_sizes`
  ADD PRIMARY KEY (`Id_product`,`Id_size`),
  ADD KEY `Id_size` (`Id_size`);

--
-- Index pour la table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`Id_size`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_user`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products_materials`
--
ALTER TABLE `products_materials`
  ADD CONSTRAINT `products_materials_ibfk_1` FOREIGN KEY (`Id_material`) REFERENCES `materials` (`Id_material`),
  ADD CONSTRAINT `products_materials_ibfk_2` FOREIGN KEY (`Id_product`) REFERENCES `products` (`Id_product`);

--
-- Contraintes pour la table `products_prices`
--
ALTER TABLE `products_prices`
  ADD CONSTRAINT `products_prices_ibfk_1` FOREIGN KEY (`Id_price`) REFERENCES `prices` (`Id_price`),
  ADD CONSTRAINT `products_prices_ibfk_2` FOREIGN KEY (`Id_product`) REFERENCES `products` (`Id_product`);

--
-- Contraintes pour la table `products_sizes`
--
ALTER TABLE `products_sizes`
  ADD CONSTRAINT `products_sizes_ibfk_1` FOREIGN KEY (`Id_size`) REFERENCES `sizes` (`Id_size`),
  ADD CONSTRAINT `products_sizes_ibfk_2` FOREIGN KEY (`Id_product`) REFERENCES `products` (`Id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
