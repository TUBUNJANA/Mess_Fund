-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2023 at 07:43 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20542476_mess_fund`
--
CREATE DATABASE IF NOT EXISTS `id20542476_mess_fund` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20542476_mess_fund`;

-- --------------------------------------------------------

--
-- Table structure for table `confidential`
--

CREATE TABLE `confidential` (
  `id` varchar(25) NOT NULL,
  `pass` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confidential`
--

INSERT INTO `confidential` (`id`, `pass`) VALUES
('sahitmondal57@gmail.com', '0000'),
('ranjanmahato296@gmail.com', '.com'),
('tubunjana052@gmail.com', 'tubun');

-- --------------------------------------------------------

--
-- Table structure for table `e_fund`
--

CREATE TABLE `e_fund` (
  `DATE` date NOT NULL DEFAULT current_timestamp(),
  `SAHID` int(11) NOT NULL,
  `SUMAN` int(11) NOT NULL,
  `RANJAN` int(11) NOT NULL,
  `APURBA` int(11) NOT NULL,
  `TUBUN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
