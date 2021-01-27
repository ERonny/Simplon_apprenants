-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2021 at 04:07 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_apprenants`
--

-- --------------------------------------------------------

--
-- Table structure for table `apprennants`
--

CREATE TABLE `apprennants` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `telephone` int(20) NOT NULL,
  `naissance` date NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `formation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apprennants`
--

INSERT INTO `apprennants` (`nom`, `prenom`, `mail`, `telephone`, `naissance`, `filiere`, `formation`) VALUES
('testons', 'encore', 'e@test.bf', 56985625, '2021-01-04', 'chercheur', 'Devellopeur'),
('remplir', 'informer', 'j@gmail.com', 69663322, '2023-03-16', 'fenetre', 'porte'),
('Prenam', 'Jessica', 'l@gmail.com', 87474747, '2023-03-20', 'pratiquer', 'reussir'),
('nom', 'prenom', 'p@gmail.com', 98585855, '2023-03-28', 'rester', 'partir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apprennants`
--
ALTER TABLE `apprennants`
  ADD UNIQUE KEY `email` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
