-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 08:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `of`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `phone` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`phone`, `name`, `amount`, `address`, `comment`) VALUES
('01965412774', 'Motiur Rahman Munna', '1000', 'Dhaka, Bangladesh', ''),
('01965412774', 'Motiur Rahman Munna', '2000', 'Dhaka, Bangladesh', ''),
('01965412774', 'Motiur Rahman Munna', '30000', 'Dhaka, Bangladesh', ''),
('01965412774', 'Motiur Rahman Munna', '1230', 'Dhaka, Bangladesh', '');

-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

CREATE TABLE `orphan` (
  `phone` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orphan`
--

INSERT INTO `orphan` (`phone`, `name`, `amount`, `address`, `comment`) VALUES
('01965412774', 'Motiur Rahman Munna', '10000', 'Dhaka, Bangladesh', ''),
('01965412774', 'Motiur Rahman Munna', '520', 'Dhaka, Bangladesh', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
