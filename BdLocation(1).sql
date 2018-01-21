-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 20 Janvier 2018 à 17:31
-- Version du serveur :  5.7.20-0ubuntu0.17.04.1
-- Version de PHP :  7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `BdLocation`
--

-- --------------------------------------------------------

--
-- Structure de la table `Biens`
--

CREATE TABLE `Biens` (
  `IdBien` int(11) NOT NULL,
  `NomBien` varchar(30) NOT NULL,
  `Addresse` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Commission` varchar(30) NOT NULL,
  `Etat` varchar(30) NOT NULL,
  `IdProp` int(11) NOT NULL,
  `IdType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Biens`
--

INSERT INTO `Biens` (`IdBien`, `NomBien`, `Addresse`, `Price`, `Commission`, `Etat`, `IdProp`, `IdType`) VALUES
(10, 'appartement', ':Addresse', ':Price', ':Commission', ':Etat', 1, 2),
(12, ':NomBien', ':Addresse', ':Price', ':Commission', ':Etat', 1, 1),
(13, ':NomBien', ':Addresse', ':Price', ':Commission', ':Etat', 1, 1),
(14, ':NomBien', ':Addresse', ':Price', ':Commission', ':Etat', 1, 2),
(15, ':NomBien', ':Addresse', ':Price', ':Commission', ':Etat', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Contrats`
--

CREATE TABLE `Contrats` (
  `IdContrat` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `MontantVoulu` varchar(20) NOT NULL,
  `MontantLocation` varchar(20) NOT NULL,
  `IdText` int(11) NOT NULL,
  `IdLocation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Contrats`
--

INSERT INTO `Contrats` (`IdContrat`, `DateDebut`, `DateFin`, `MontantVoulu`, `MontantLocation`, `IdText`, `IdLocation`) VALUES
(1, '2018-01-16', '2019-01-17', '200.000fcfa', '150.000fca', 1, 1),
(2, '2018-01-08', '2019-01-10', '155.000fcfa', '100.000fcfa', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `Location`
--

CREATE TABLE `Location` (
  `IdLocation` int(11) NOT NULL,
  `IdBien` int(11) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `IdClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Location`
--

INSERT INTO `Location` (`IdLocation`, `IdBien`, `DateDebut`, `DateFin`, `IdClient`) VALUES
(1, 10, '2018-01-17', '2019-01-17', 2),
(2, 12, '2018-01-08', '2019-01-08', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Profil`
--

CREATE TABLE `Profil` (
  `IdProfil` int(11) NOT NULL,
  `NomProfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Profil`
--

INSERT INTO `Profil` (`IdProfil`, `NomProfil`) VALUES
(1, 'Visiteur'),
(2, 'Employer'),
(3, 'Cadre Administrateur'),
(4, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `Propriétaires`
--

CREATE TABLE `Propriétaires` (
  `IdProp` int(11) NOT NULL,
  `NumeroPiece` varchar(30) NOT NULL,
  `NomProp` varchar(30) NOT NULL,
  `CellPhone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Propriétaires`
--

INSERT INTO `Propriétaires` (`IdProp`, `NumeroPiece`, `NomProp`, `CellPhone`) VALUES
(1, '2392199620231', 'Aminata Sankare', '775510525');

-- --------------------------------------------------------

--
-- Structure de la table `TextContrat`
--

CREATE TABLE `TextContrat` (
  `IdText` int(11) NOT NULL,
  `Text` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `TextContrat`
--

INSERT INTO `TextContrat` (`IdText`, `Text`) VALUES
(1, 'Les locataires sont tenus, dans la plupart des cas de l\'exercice de leurs activités à la confidentialité à l\'intérieur des assemblée du comité ou assemblée générale.'),
(2, 'Dans le cadre de la correspondance, une lettre marquée « confidentielle » ne peut être divulguée par son récipiendaire sans l\'accord exprès de son envoyeur, faute de s\'exposer à des poursuites en dommages et intérêts.\r\n\r\nLe courrier électronique des entreprises fait un usage abusif de ce caractère de confidentialité en ajoutant automatiquement un message de confidentialité dans le bas-de-page de chaque courriel ce qui, en théorie, expose son expéditeur à des poursuites au cas où le courriel est envoyé à une tierce personne.');

-- --------------------------------------------------------

--
-- Structure de la table `TypeBien`
--

CREATE TABLE `TypeBien` (
  `IdType` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `TypeBien`
--

INSERT INTO `TypeBien` (`IdType`, `Nom`) VALUES
(1, 'Meuble'),
(2, 'appartement');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `idUser` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `IdProfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`idUser`, `UserName`, `Login`, `Password`, `IdProfil`) VALUES
(2, 'Aminata Sankaré', 'Minetou12', 'minetou12', 3),
(3, 'Aminata Sankare', 'babacar', 'babacar', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Biens`
--
ALTER TABLE `Biens`
  ADD PRIMARY KEY (`IdBien`),
  ADD KEY `IdProp` (`IdProp`),
  ADD KEY `IdType` (`IdType`);

--
-- Index pour la table `Contrats`
--
ALTER TABLE `Contrats`
  ADD PRIMARY KEY (`IdContrat`),
  ADD KEY `IdText` (`IdText`),
  ADD KEY `IdLocation` (`IdLocation`);

--
-- Index pour la table `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`IdLocation`),
  ADD KEY `IdBien` (`IdBien`),
  ADD KEY `IdClient` (`IdClient`);

--
-- Index pour la table `Profil`
--
ALTER TABLE `Profil`
  ADD PRIMARY KEY (`IdProfil`);

--
-- Index pour la table `Propriétaires`
--
ALTER TABLE `Propriétaires`
  ADD PRIMARY KEY (`IdProp`);

--
-- Index pour la table `TextContrat`
--
ALTER TABLE `TextContrat`
  ADD PRIMARY KEY (`IdText`);

--
-- Index pour la table `TypeBien`
--
ALTER TABLE `TypeBien`
  ADD PRIMARY KEY (`IdType`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `IdProfil` (`IdProfil`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Biens`
--
ALTER TABLE `Biens`
  MODIFY `IdBien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `Contrats`
--
ALTER TABLE `Contrats`
  MODIFY `IdContrat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Location`
--
ALTER TABLE `Location`
  MODIFY `IdLocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Profil`
--
ALTER TABLE `Profil`
  MODIFY `IdProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Propriétaires`
--
ALTER TABLE `Propriétaires`
  MODIFY `IdProp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `TextContrat`
--
ALTER TABLE `TextContrat`
  MODIFY `IdText` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `TypeBien`
--
ALTER TABLE `TypeBien`
  MODIFY `IdType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Biens`
--
ALTER TABLE `Biens`
  ADD CONSTRAINT `Biens_ibfk_1` FOREIGN KEY (`IdProp`) REFERENCES `Propriétaires` (`IdProp`),
  ADD CONSTRAINT `Biens_ibfk_2` FOREIGN KEY (`IdType`) REFERENCES `TypeBien` (`IdType`);

--
-- Contraintes pour la table `Contrats`
--
ALTER TABLE `Contrats`
  ADD CONSTRAINT `Contrats_ibfk_1` FOREIGN KEY (`IdText`) REFERENCES `TextContrat` (`IdText`),
  ADD CONSTRAINT `Contrats_ibfk_2` FOREIGN KEY (`IdLocation`) REFERENCES `Location` (`IdLocation`);

--
-- Contraintes pour la table `Location`
--
ALTER TABLE `Location`
  ADD CONSTRAINT `Location_ibfk_1` FOREIGN KEY (`IdBien`) REFERENCES `Biens` (`IdBien`),
  ADD CONSTRAINT `Location_ibfk_2` FOREIGN KEY (`IdClient`) REFERENCES `Utilisateurs` (`idUser`);

--
-- Contraintes pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD CONSTRAINT `Utilisateurs_ibfk_1` FOREIGN KEY (`IdProfil`) REFERENCES `Profil` (`IdProfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
