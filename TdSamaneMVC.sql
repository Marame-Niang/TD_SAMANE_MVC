-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 20 août 2020 à 00:11
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TdSamaneMVC`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaiss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `raison_sociale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  `nom_employeur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr_employeur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`id`, `matricule`, `cni`, `nom`, `prenom`, `sexe`, `datenaiss`, `tel`, `adresse`, `email`, `raison_sociale`, `salaire`, `nom_employeur`, `adr_employeur`) VALUES
(1, 'BJ78P993', '1757384936484', 'Ka', 'Seynabou', 'feminin', '1994-03-23', 769354678, 'Diolof', 'nana@gmail.com', NULL, NULL, NULL, NULL),
(2, 'H9BEJJWR', '1633998464987', 'Ndiaye', 'Ababacar', 'masculin', '1988-09-08', 784463737, 'Kaolack', 'adn@gmail.com', 'siti', 900000, 'Seydina Fall', 'Medina'),
(3, 'JBN8CKJN', '1633998464987', 'Ndiaye', 'Ababacar', 'masculin', '1988-09-08', 784463737, 'Kaolack', 'adn@gmail.com', 'siti', 900000, 'Seydina Fall', 'Medina'),
(4, 'TNC2DCGT', '24668809078587', 'Babou', 'Modou', 'masculin', '1997-01-17', 775377837, 'jbjggd', 'jhqkyduyhm@gmail.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Compte`
--

CREATE TABLE `Compte` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `rib` int(11) NOT NULL,
  `solde` int(11) DEFAULT NULL,
  `dateOuve` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fraisOuv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remuneration` int(11) DEFAULT NULL,
  `date_debut` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_fin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agios` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_Client` int(11) DEFAULT NULL,
  `typeCompte_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Compte`
--

INSERT INTO `Compte` (`id`, `entreprise_id`, `numero`, `rib`, `solde`, `dateOuve`, `fraisOuv`, `remuneration`, `date_debut`, `date_fin`, `agios`, `id_Client`, `typeCompte_id`) VALUES
(1, NULL, 29933110, 84603227, 50000, '2020-08-19', '25000', 10000, NULL, NULL, NULL, 1, NULL),
(2, NULL, 90064441, 683112268, 50000, '2020-08-19', NULL, NULL, NULL, NULL, '10000', 2, NULL),
(3, NULL, 73684148, 922926620, 50000, '2020-08-20', NULL, NULL, NULL, NULL, '10000', 3, 2),
(4, NULL, 66717674, 109173282, 50000, '2020-08-20', '25000', 10000, '2020-08-19', '2024-06-14', NULL, 4, 3),
(5, 1, 48778292, 974486897, 50000, '2020-08-20', '25000', 10000, NULL, NULL, NULL, NULL, 1),
(6, 2, 32, 618616919, 50000, '2020-08-20', '25000', 10000, '2020-08-19', '2021-10-19', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Entreprise`
--

CREATE TABLE `Entreprise` (
  `id` int(11) NOT NULL,
  `nom_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `budget_entreprise` int(11) NOT NULL,
  `adr_entreprise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Entreprise`
--

INSERT INTO `Entreprise` (`id`, `nom_entreprise`, `tel_entreprise`, `email_entreprise`, `budget_entreprise`, `adr_entreprise`, `login`, `password`) VALUES
(1, 'voile d\'or', '337483733', 'voulou@gmail.com', 200000, 'Bourguiba', NULL, NULL),
(2, 'brioche  doree', '77656556575', 'brioche@gmail.com', 300000, 'Boune', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typeCompte`
--

CREATE TABLE `typeCompte` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `typeCompte`
--

INSERT INTO `typeCompte` (`id`, `libelle`) VALUES
(1, 'Simple et Xeewel'),
(2, 'Courant'),
(3, 'Bloqué');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Compte`
--
ALTER TABLE `Compte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C85A5756E6DFB48E` (`id_Client`),
  ADD KEY `IDX_C85A5756A4AEAFEA` (`entreprise_id`),
  ADD KEY `IDX_C85A5756930B861F` (`typeCompte_id`);

--
-- Index pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `typeCompte`
--
ALTER TABLE `typeCompte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Compte`
--
ALTER TABLE `Compte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `typeCompte`
--
ALTER TABLE `typeCompte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Compte`
--
ALTER TABLE `Compte`
  ADD CONSTRAINT `FK_C85A5756930B861F` FOREIGN KEY (`typeCompte_id`) REFERENCES `typeCompte` (`id`),
  ADD CONSTRAINT `FK_C85A5756A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `Entreprise` (`id`),
  ADD CONSTRAINT `FK_C85A5756E6DFB48E` FOREIGN KEY (`id_Client`) REFERENCES `Client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
