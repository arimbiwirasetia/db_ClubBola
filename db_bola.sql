-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 12:23 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bola`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteDataClub` (IN `idClub` INT)   delete from bola where id = idClub$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertDataClub` (IN `nama_club` VARCHAR(50))   insert into bola values(null, nama_club)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateDataClub` (IN `idClub` INT, IN `namaClub` VARCHAR(50))   update bola
set
nama_club = namaClub WHERE id = idClub$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bola`
--

CREATE TABLE `bola` (
  `id` int(11) NOT NULL,
  `nama_club` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bola`
--

INSERT INTO `bola` (`id`, `nama_club`) VALUES
(8, 'madrid4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bola`
--
ALTER TABLE `bola`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bola`
--
ALTER TABLE `bola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
