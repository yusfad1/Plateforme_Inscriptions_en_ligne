-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 01:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(150) NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `pwd`, `date_creation`) VALUES
(1, 'Admin@insea.ac.ma', 'admin', '2020-07-12 13:00:00'),
(2, 'Administration@insea.ma', 'admin', '2020-07-12 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `etudients`
--

CREATE TABLE `etudients` (
  `id` int(255) NOT NULL,
  `Matricule` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` text COLLATE utf8_unicode_ci NOT NULL,
  `Nationalite` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `cycle` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaiss` date NOT NULL,
  `filiere` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `niveau` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CIN` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CopieBac` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AttReussite` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreation` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `etudients`
--

INSERT INTO `etudients` (`id`, `Matricule`, `Nom`, `Prenom`, `email`, `tel`, `mdp`, `Nationalite`, `sexe`, `cycle`, `dateNaiss`, `filiere`, `niveau`, `photo`, `CIN`, `CopieBac`, `AttReussite`, `dateCreation`) VALUES
(29, 'R2473847', 'Fayçal', 'Mohamed', 'mohamed.facal@gmail.com', '062234834', '12345', 'Marocain(e)', 'M', 'Ingenieur', '1998-08-26', 'DSE', '1A', '1A_DSE_R2473847_photo.jpg', '1A_DSE_R2473847_CIN.jpg', '1A_DSE_R2473847_BAC.jpg', '1A_DSE_R2473847_Attestation.jpg', '2020-07-10 13:10:23'),
(26, 'E2544344', 'Ahmed', 'Mlah', 'ahmed.mlah@gmail.com', '067458484', '12345', 'Marocain(e)', 'M', 'Ingenieur', '2000-11-23', 'DSE', '1A', '1A_DSE_E2544344_photo.jpg', '1A_DSE_E2544344_CIN.jpg', '1A_DSE_E2544344_BAC.jpg', '1A_DSE_E2544344_Attestation.jpg', '2020-07-10 13:04:03'),
(27, 'R32673627', 'Natasha', 'Maldoph', 'natasha.maldoph@gmail.com', '0616728391', '12345', 'Etrangère', 'F', 'Ingenieur', '1998-01-27', 'DSE', '1A', '1A_DSE_R32673627_photo.jpeg', '1A_DSE_R32673627_CIN.jpg', '1A_DSE_R32673627_BAC.jpg', '1A_DSE_R32673627_Attestation.jpg', '2020-07-10 13:05:40'),
(28, 'E724862', 'Ouali', 'Ayoub', 'ayoub.ouali@gmail.com', '0684273853', '12345', 'Marocain(e)', 'M', 'Ingenieur', '1999-03-05', 'DSE', '1A', '1A_DSE_E724862_photo.jpg', '1A_DSE_E724862_CIN.jpg', '1A_DSE_E724862_BAC.jpg', '1A_DSE_E724862_Attestation.jpg', '2020-07-10 13:07:12'),
(25, 'E2394792', 'FATMA', 'Kadir', 'fatma.kadir@gmail.com', '0658389204', '123456', 'Marocain(e)', 'F', 'Ingenieur', '1999-06-24', 'DSE', '1A', '1A_DSE_E2394792_photo.jpg', '1A_DSE_E2394792_CIN.jpg', '1A_DSE_E2394792_BAC.jpg', '1A_DSE_E2394792_Attestation.jpg', '2020-07-10 13:02:23'),
(31, 'E2367264', 'Abdoul', 'Fatma', 'abdoul.fatma@gmail.com', '0647348734', '12345', 'Etrangère', 'F', 'Ingenieur', '2000-06-07', 'DSE', '1A', '1A_DSE_E2367264_photo.jpg', '1A_DSE_E2367264_CIN.jpg', '1A_DSE_E2367264_BAC.jpg', '1A_DSE_E2367264_Attestation.jpg', '2020-07-10 13:13:21'),
(32, 'R724624T', 'Ait chitach', 'Ali', 'ali.chitach@gmail.com', '0647348734', '929560', 'Marocain(e)', 'M', 'Ingenieur', '1999-03-17', 'DSE', '1A', '1A_DSE_R724624T_photo.jpg', '1A_DSE_R724624T_CIN.jpg', '1A_DSE_R724624T_BAC.jpg', '1A_DSE_R724624T_Attestation.jpg', '2020-07-10 13:15:04'),
(33, 'E435424', 'Youssef', 'Fadoul', 'yousseffadoul70@gmail.com', '0616728391', '12345', 'Marocain(e)', 'M', 'Ingenieur', '1999-10-19', 'DSE', '1A', '1A_DSE_E435424_photo.jpg', '1A_DSE_E435424_CIN.jpg', '1A_DSE_E435424_BAC.jpg', '1A_DSE_E435424_Attestation.jpg', '2020-07-15 09:40:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`email`);

--
-- Indexes for table `etudients`
--
ALTER TABLE `etudients`
  ADD PRIMARY KEY (`id`,`Matricule`),
  ADD UNIQUE KEY `emailEud` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etudients`
--
ALTER TABLE `etudients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
