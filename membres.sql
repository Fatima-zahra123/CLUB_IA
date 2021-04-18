-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 14 mars 2021 à 21:10
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `nom` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`nom`, `email`, `motdepasse`) VALUES
('fatima elzahra chafiki', 'chafikifatimazahra@gmail.com', '33665f7527e3ea77042a2fb220d006976c296bee'),
('amine ', 'FATIMA.CHAFIKI-ETU@etu.univh2c.ma', '07ec36963d207c9eb8eca092173739297016c664'),
('fatima elzahra chafiki', 'chafikifatima@gmail.com', '07ec36963d207c9eb8eca092173739297016c664'),
('imane', 'chafikifatimazahra@gmail.com', '5dbca2bb499f975e4d2ba455e06fd543137b61ac'),
('iman', 'chafikifatimazahra@gmail.com', '4f121fa71203645c7a4526284ecabbb655b50b82'),
('ima', 'chafikifatimazahra@gmail.com', 'f5d68306efcb4a374b0a98669c0543428845930e'),
('alaa', 'fatimazahra@gmail.com', '8361beed2ab9ea7465cdf1520673c722d27fc2c9'),
('fatima', 'fatimazaahra@gmail.com', '259076c26170991dc2c748a0c83b9a81247b266e'),
('fatiha', 'fatiha@gmail.com', '28f661454903d79eab0d390f1569a7f8ecf34984'),
('anas', 'anas@etu.univh2c.ma', '90ea615d29a2b2ee785a068f73f25efe2b170e48'),
('image', 'chafikifatimazahra@gmail.com', '47da540f012dd5146485a80d8bcb56bc505e136c'),
('amina rachid', 'CHAFIKI-ETU@etu.univh2c.ma', '06856e36283008711a01545122ecbb31626a1e3a'),
('hafsa', 'hafsa@gmail.com', '03ffbedc22098366a81b37f65c33891ba3b2a911'),
('jamila', 'jamila@gmail.com', 'bf854813ecc3294552fbb23a899c8c8f7cbe959d'),
('hanana', 'hanan@gmail.com', '171cbf2087c39765b82149fc5d1b4f46c0ef404f'),
('farida', 'farida@gmail.com', 'c7f9f13b6c340637767f3934c979e117d12439ba'),
('fouaad', 'fouaad@gmail.com', '287746b9c76a831effdc004820018a005bc043c9'),
('amal', 'amal@gmail.com', '33665f7527e3ea77042a2fb220d006976c296bee'),
('houssam', 'houssam@gmail.com', '51f89cb4723df5383e4f18b5b7638b42678a3f74'),
('rafiq', 'rafiq@gmail.com', '09762dd1c4b140333d70ca4e0ee10bd83148c29e'),
('rihab', 'rihab@gmail.com', '43623333ddd837e585bdc6ee2264a4b2c327ba19'),
('mouad', 'mouad@gmail.com', '71f23f636cc495d425e9e8db693b3a2daf781f79'),
('amine', 'fff@etu.univh2c.ma', '6749e0988d16fb7e225e9b894382a2dd892f18e7'),
('rihab', 'fffffffffffffff@gmail.com', 'cd8cfce150339ec9983cb2c37d28ce59fffb040d'),
('amine', 'hhhhhhhhhhhhhhh@gmail.com', '9a91e7e70dfea8055d158e4b7e71765fc13b91af'),
('fatima elzahra chafiki', 'nouha@gmail.com', 'c965b4fdb1bc5f6991f59136280e707e6189ef98'),
('farida', 'farida1@gmail.com', 'Fatiha123'),
('farida', 'farida1@gmail.com', 'Fatiha123'),
('reda', 'reda@gmail.com', 'Fatiha123'),
('farida', 'ami@gmail.com', 'hello111111'),
('HALA', 'HAla@gmail.com', 'halla111'),
('roqia', 'roqia@gmail.com', 'Fattyyyyyyyyyyy1111111'),
('jamal', 'jamal@gmail.com', 'Fatiha1111111'),
('jamal', 'jamal@gmail.com', 'Fatiha1111111'),
('farah', 'farah@gmail.com', 'fatiha111111111');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
