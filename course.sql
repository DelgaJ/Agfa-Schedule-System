-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 25, 2022 at 05:06 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Agfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cs_id` int(6) NOT NULL,
  `cs_name` varchar(255) NOT NULL,
  `cs_time` varchar(255) NOT NULL,
  `cs_date` date DEFAULT NULL,
  `cs_room` varchar(255) DEFAULT NULL,
  `cs_customer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cs_id`, `cs_name`, `cs_time`, `cs_date`, `cs_room`, `cs_customer`) VALUES
(567090, 'Cardiology', '15:00:00', '2022-11-13', 'Test Room 204', 'Justin Delgado'),
(567090, 'Cardiology', '15:00:00', '2022-11-13', 'Test Room 204', 'Ana Laitusis'),
(123456, 'X-Ray', '16:00:00', '2022-11-13', 'Test Room 307', 'Ahmad Hodges'),
(396359, 'Mammogram', '01:00 PM', '2022-11-13', NULL, NULL),
(859257, 'X-Ray', '02:00 PM', '2022-11-21', NULL, 'Sample Student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
