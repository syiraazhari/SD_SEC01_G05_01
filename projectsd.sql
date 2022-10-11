-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2022 at 12:06 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookerlist`
--

DROP TABLE IF EXISTS `bookerlist`;
CREATE TABLE IF NOT EXISTS `bookerlist` (
  `MatricNum` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `phoneNum` varchar(30) NOT NULL,
  `UserType` varchar(100) NOT NULL,
  PRIMARY KEY (`MatricNum`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookerlist`
--

INSERT INTO `bookerlist` (`MatricNum`, `name`, `userId`, `phoneNum`, `UserType`) VALUES
('A20DW1114', 'lonely123', 'tancheesen123@hotmail.com', '01115386485', 'Staff'),
('tancs', 'Tan Chee Sen', 'shaoyuan0228@gmail.com', '0178945987', 'Staff'),
('test2', 'testing243', 'cheesen.987@gmail.com', '321321321', 'Student'),
('testingFail1', 'testingFail2', 'FalseEmail@gmail.com', '543534', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_MaFyhakeRzsapt', 'tan', 'asd', 'chee.sen987@gmail.com', '2022-10-10 03:46:34'),
('cus_MaGfCmxIbunSkN', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-10 04:30:08'),
('cus_MaGj5h9W8I93Y9', '213', 'asdsa', 'tancheesen123@hotmail.com', '2022-10-10 04:34:04'),
('cus_MaGox0WNOQ9tLy', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-10 04:38:31'),
('cus_MaH2ZBpqsfg6oZ', '42424242', '42424', 'cheesen.987@gmail.com', '2022-10-10 04:52:25'),
('cus_MaHO5FSUNiXNmZ', 'tan', 'tan', 'cheesen.987@gmail.com', '2022-10-10 05:15:05'),
('cus_MaHWsJ4PA72fVr', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-10 05:23:11'),
('cus_MaPxUAlsfc9o2m', '123', '123', 'cheesen.987@gmail.com', '2022-10-10 14:06:11'),
('cus_MaRm8VdG7E5YaA', '42424242', '21', 'cheesen.987@gmail.com', '2022-10-10 15:59:08'),
('cus_MaRnSKmFQfZ0by', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-10 15:59:57'),
('cus_MaRq6Ico3GQnmu', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-10 16:02:40'),
('cus_MaTI7qofGdxrkX', '123', '123', 'tancheesen123@hotmail.com', '2022-10-10 17:33:12'),
('cus_MZikg5kdJXU8EF', 'tas', 'satsat', 'tancheesen123@hotmail.com', '2022-10-08 17:26:39'),
('cus_MZiMod9IpFT3zQ', '123', '123', 'tancheesen123@hotmail.com', '2022-10-08 17:02:44'),
('cus_MZiQvHGlNztDlI', '123', '123', 'tancheesen123@hotmail.com', '2022-10-08 17:07:07'),
('cus_MZiSzXOPkriFyF', 'test1', '21', 'tancheesen123@hotmail.com', '2022-10-08 17:08:53'),
('cus_MZkDfIUpM4wIP7', 'tan', 'Cheesen', 'tancheesen123@hotmail.com', '2022-10-08 18:57:39'),
('cus_MZkIlHTt8OGPS3', '', '', 'tancheesen123@hotmail.com', '2022-10-08 19:02:29'),
('cus_MZlXqrniCbGIgU', 'asd', 'asdas', 'tancheesen123@hotmail.com', '2022-10-08 20:20:01'),
('cus_MZmfmiexQoNqbF', '123', '123', 'tancheesen123@hotmail.com', '2022-10-08 21:29:47'),
('cus_MZmg6zVJE16cpH', 'lonely', 'licess', 'tancheesen123@hotmail.com', '2022-10-08 21:30:55'),
('cus_MZnDFjTbWLEr32', '321', '321', 'tancheesen123@hotmail.com', '2022-10-08 22:03:38'),
('cus_MZnihxCx5ctche', '312', '321', 'tancheesen123@hotmail.com', '2022-10-08 22:35:11'),
('cus_MZnRHa4Xl4SfQb', '123', '321', 'tancheesen123@hotmail.com', '2022-10-08 22:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

DROP TABLE IF EXISTS `facility`;
CREATE TABLE IF NOT EXISTS `facility` (
  `facilityId` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `capacity` int(4) DEFAULT NULL,
  `facilityDetail` varchar(200) NOT NULL,
  `ratePerDay` decimal(20,0) NOT NULL,
  `status` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL DEFAULT 'facility.png',
  PRIMARY KEY (`facilityId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facilityId`, `name`, `category`, `capacity`, `facilityDetail`, `ratePerDay`, `status`, `Image`) VALUES
('B111', 'FOYER DEWAN BANQUET', 'FOYER', 48, 'Suitable for sit-down meal area', '40000', 'AVAILABLE', 'FOYER DEWAN BANQUET - 2022.10.11 - 11.41.24am.png'),
('B122', 'BILIK GERAKAN', 'ROOM', 19, 'Suitable for medium size meeting group', '250', 'AVAILABLE', 'BILIK GERAKAN - 2022.10.11 - 11.43.15am.png'),
('B133', 'BILIK LPU (AL-GHAZALI)', 'ROOM', 20, 'Suitable for meeting, and presentation', '300', 'AVAILABLE', 'BILIK LPU (AL-GHAZALI) - 2022.10.11 - 11.44.42am.png'),
('C111', 'FOYER A BANGUNAN PSZ', 'FOYER', 60, 'Suitable for sit-down meal', '300', 'AVAILABLE', 'FOYER A BANGUNAN PSZ - 2022.10.11 - 11.53.24am.png'),
('C122', 'FOYER B BANGUNAN PSZ', 'FOYER', 30, 'Suitable for sit-down meal', '200', 'AVAILABLE', 'FOYER B BANGUNAN PSZ - 2022.10.11 - 11.53.33am.png'),
('C133', 'DATARAN ILMU', 'OPEN AREA', 300, 'Suitable for outdoor event', '250', 'AVAILABLE', 'DATARAN ILMU - 2022.10.11 - 11.55.53am.png'),
('D111', 'DEWAN BANQUET', 'HALL', 70, 'Suitable for big group discussion, workshop, and seminar', '620', 'AVAILABLE', 'DEWAN BANQUET - 2022.10.11 - 11.56.49am.png'),
('D122', 'DEWAN TAN SRI AINUDDIN WAHID', 'HALL', 500, 'Suitable for big gathering including dinner, wedding, conference, and exam', '4000', 'AVAILABLE', 'DEWAN TAN SRI AINUDDIN WAHID - 2022.10.11 - 11.57.03am.png'),
('D133', 'DEWAN JUMAAH', 'HALL', 150, 'Suitable for big group meeting, workshop, and seminar', '1700', 'AVAILABLE', 'DEWAN JUMAAH - 2022.10.11 - 11.57.12am.png'),
('D144', 'DEWAN AZMAN HASHIM', 'HALL', 500, 'Suitable for conference, seminar, and public lecture', '4000', 'AVAILABLE', 'DEWAN AZMAN HASHIM - 2022.10.11 - 11.57.23am.png'),
('D155', 'DEWAN BANQUET II', 'HALL', 80, 'Suitable for workshop, group discussion, and sit-down meal', '700', 'AVAILABLE', 'DEWAN BANQUET II - 2022.10.11 - 11.58.05am.png'),
('D166', 'DEWAN SEMINAR', 'HALL', 140, 'Suitable for medium size seminar and public lecture.', '1700', 'AVAILABLE', 'DEWAN SEMINAR - 2022.10.11 - 11.58.31am.png'),
('E111', 'BILIK ILMUAN 1', 'ROOM', 100, 'Suitable for workshop and seminar', '1700', 'AVAILABLE', 'BILIK ILMUAN 1 - 2022.10.11 - 11.58.39am.png'),
('E133', 'BILIK ILMUAN 3', 'ROOM', 100, 'Suitable for workshop and sit-down meal', '1200', 'AVAILABLE', 'BILIK ILMUAN 3 - 2022.10.11 - 11.58.59am.png'),
('E222', 'BILIK ILMUAN 2', 'ROOM', 100, 'Suitable for workshop and seminar', '1700', 'AVAILABLE', 'BILIK ILMUAN 2 - 2022.10.11 - 11.58.49am.png'),
('F111', 'BILIK KULIAH MENARA RAZAK 6', 'ROOM', 50, 'Suitable for classroom and workshop', '500', 'AVAILABLE', 'BILIK KULIAH MENARA RAZAK 6 - 2022.10.11 - 12.04.51pm.png'),
('F122', 'BILIK KULIAH MENARA RAZAK 1-5', 'ROOM', 30, 'Suitable for classroom and workshop', '300', 'AVAILABLE', 'BILIK KULIAH MENARA RAZAK 1-5 - 2022.10.11 - 12.04.58pm.png'),
('F133', 'BILIK KULIAH MENARA RAZAK 7-13', 'ROOM', 30, 'Suitable for classroom and workshop', '300', 'AVAILABLE', 'BILIK KULIAH MENARA RAZAK 7-13 - 2022.10.11 - 12.05.06pm.png'),
('S111', 'BASKETBALL COURT', 'SPORT', 100, 'Suitable for basketball competition and outdoor event', '300', 'AVAILABLE', 'BASKETBALL COURT - 2022.10.10 - 11.11.19am.png'),
('S222', 'FOOTBALL FIELD', 'SPORT', 500, 'Suitable for football competition and outdoor event', '600', 'AVAILABLE', 'FOOTBALL FIELD - 2022.10.10 - 11.10.40am.png'),
('S333', 'TENNIS COURT', 'SPORT', 100, 'Suitable for tennis competition and outdoor event', '300', 'AVAILABLE', 'TENNIS COURT - 2022.10.10 - 11.15.40am.png');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
CREATE TABLE IF NOT EXISTS `rent` (
  `rent_reference` int(30) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
  `date_reserved` date NOT NULL,
  `reserved_by` varchar(30) NOT NULL,
  `date_rent_start` date NOT NULL,
  `date_rent_end` date NOT NULL,
  `facilityId` varchar(30) NOT NULL,
  `total_price` double NOT NULL,
  PRIMARY KEY (`rent_reference`),
  KEY `userId` (`userId`),
  KEY `facilityId` (`facilityId`),
  KEY `facilityId_2` (`facilityId`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_reference`, `userId`, `date_reserved`, `reserved_by`, `date_rent_start`, `date_rent_end`, `facilityId`, `total_price`) VALUES
(97, 'shaoyuan0228@gmail.com', '2022-10-04', 'Tan Chee Sen', '2022-10-05', '2022-10-06', 'F133', 300),
(98, 'cheesen.987@gmail.com', '2022-10-08', 'testing243', '2022-10-08', '2022-10-09', 'B111', 40000),
(99, 'tancheesen123@hotmail.com', '2022-10-08', 'lonely123', '2022-10-08', '2022-10-09', 'B122', 250),
(100, 'tancheesen123@hotmail.com', '2022-10-08', 'lonely123', '2022-10-08', '2022-10-10', 'B133', 600),
(101, 'tancheesen123@hotmail.com', '2022-10-08', 'lonely123', '2022-10-15', '2022-10-20', 'C111', 1500),
(102, 'tancheesen123@hotmail.com', '2022-10-08', 'lonely123', '2022-10-09', '2022-10-13', 'D144', 16000),
(103, 'tancheesen123@hotmail.com', '2022-10-08', 'lonely123', '2022-10-14', '2022-10-15', 'B111', 40000),
(104, 'tancheesen123@hotmail.com', '2022-10-08', 'lonely123', '2022-10-15', '2022-10-23', 'B122', 2000),
(105, 'chee.sen987@gmail.com', '2022-10-09', 'lonely123', '2022-10-12', '2022-10-14', 'B122', 500),
(106, 'tancheesen123@hotmail.com', '2022-10-09', 'lonely123', '2022-10-10', '2022-10-19', 'B111', 360000),
(107, 'tancheesen123@hotmail.com', '2022-10-09', 'lonely123', '2022-10-19', '2022-10-20', 'B133', 300),
(108, 'cheesen.987@gmail.com', '2022-10-09', 'testing243', '2022-10-10', '2022-10-12', 'C111', 600),
(109, 'cheesen.987@gmail.com', '2022-10-09', 'testing243', '2022-10-11', '2022-10-13', 'B133', 600),
(110, 'cheesen.987@gmail.com', '2022-10-09', 'testing243', '2022-10-11', '2022-10-14', 'D122', 12000),
(111, 'tancheesen123@hotmail.com', '2022-10-09', 'lonely123', '2022-10-11', '2022-10-14', 'D133', 5100),
(112, 'cheesen.987@gmail.com', '2022-10-10', 'testing243', '2022-10-10', '2022-10-14', 'E111', 6800),
(113, 'cheesen.987@gmail.com', '2022-10-10', 'testing243', '2022-10-10', '2022-10-15', 'D122', 20000),
(114, 'cheesen.987@gmail.com', '2022-10-10', 'testing243', '2022-10-10', '2022-10-15', 'D122', 20000),
(115, 'cheesen.987@gmail.com', '2022-10-10', 'testing243', '2022-10-10', '2022-10-19', 'E133', 10800),
(116, 'tancheesen123@hotmail.com', '2022-10-10', 'lonely123', '2022-10-11', '2022-10-14', 'D155', 2100);

-- --------------------------------------------------------

--
-- Table structure for table `state_district`
--

DROP TABLE IF EXISTS `state_district`;
CREATE TABLE IF NOT EXISTS `state_district` (
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `postcode` int(6) NOT NULL,
  PRIMARY KEY (`district`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_district`
--

INSERT INTO `state_district` (`state`, `district`, `postcode`) VALUES
('MELAKA', 'ALOR GAJAH', 78000),
('KELANTAN', 'BACHOK', 16310),
('KEDAH', 'BALING', 9100),
('KEDAH', 'BANDAR BAHARU', 34950),
('JOHOR', 'BATU PAHAT', 83000),
('PAHANG', 'BENTONG', 28700),
('PAHANG', 'BERA', 28200),
('SARAWAK', 'BINTULU', 93550),
('PULAU PINANG', 'GEORGE TOWN', 10000),
('PERAK', 'IPOH', 30000),
('MELAKA', 'JASIN', 77000),
('KELANTAN', 'JELI', 17600),
('JOHOR', 'JOHOR BAHRU', 80594),
('PERLIS', 'KANGAR', 1000),
('TERENGGANU', 'KERTEH', 20550),
('SABAH', 'KOTA KINABALU', 88500),
('NEGERI SEMBILAN', 'KUALA KLAWANG', 71600),
('TERENGGANU', 'KUALA TERENGGANU', 20000),
('SARAWAK', 'KUCHING', 93000),
('NEGERI SEMBILAN', 'MANTIN', 71750),
('SABAH', 'RANAU', 88632),
('SELANGOR', 'SHAH ALAM', 40000),
('SELANGOR', 'SUNGAI BESAR', 40664),
('PERAK', 'TAPAH', 35000),
('PULAU PINANG', 'TELUK BAHANG', 10582);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `email`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_3LqaisIXxPbvwpsW1BYRPBHt', 'cus_MZkDfIUpM4wIP7', NULL, 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-08 18:57:39'),
('ch_3LqanZIXxPbvwpsW0qlWuwDH', 'cus_MZkIlHTt8OGPS3', NULL, 'BILIK GERAKAN', '250', 'myr', 'succeeded', '2022-10-08 19:02:29'),
('ch_3Lqc0aIXxPbvwpsW1xcrvnH5', 'cus_MZlXqrniCbGIgU', NULL, 'FOYER B BANGUNAN PSZ', '200', 'myr', 'succeeded', '2022-10-08 20:20:01'),
('ch_3Lqd66IXxPbvwpsW2XlcRpVn', 'cus_MZmfmiexQoNqbF', NULL, 'FOYER A BANGUNAN PSZ', '300', 'myr', 'succeeded', '2022-10-08 21:29:47'),
('ch_3Lqd7CIXxPbvwpsW2JOeXSTn', 'cus_MZmg6zVJE16cpH', NULL, 'FOYER A BANGUNAN PSZ', '300', 'myr', 'succeeded', '2022-10-08 21:30:55'),
('ch_3LqdcrIXxPbvwpsW2Klkvrk1', 'cus_MZnDFjTbWLEr32', NULL, 'DEWAN AZMAN HASHIM', '16000', 'myr', 'succeeded', '2022-10-08 22:03:38'),
('ch_3Lqdq9IXxPbvwpsW0Y2gAOeZ', 'cus_MZnRHa4Xl4SfQb', NULL, 'FOYER DEWAN BANQUET', '40000', 'myr', 'succeeded', '2022-10-08 22:17:22'),
('ch_3Lqe7OIXxPbvwpsW2NniBiIK', 'cus_MZnihxCx5ctche', NULL, 'BILIK GERAKAN', '2000', 'myr', 'succeeded', '2022-10-08 22:35:11'),
('ch_3LqYvfIXxPbvwpsW0Ozbiznm', 'cus_MZiMod9IpFT3zQ', NULL, 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-08 17:02:44'),
('ch_3LqYzuIXxPbvwpsW1SfZuS2c', 'cus_MZiQvHGlNztDlI', NULL, 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-08 17:07:07'),
('ch_3LqZ1cIXxPbvwpsW08wM7Ox8', 'cus_MZiSzXOPkriFyF', NULL, 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-08 17:08:53'),
('ch_3LqZIoIXxPbvwpsW2F2sn5P7', 'cus_MZikg5kdJXU8EF', NULL, 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-08 17:26:39'),
('ch_3Lr5SHIXxPbvwpsW2BDygrhC', 'cus_MaFyhakeRzsapt', NULL, 'BILIK GERAKAN', '500', 'myr', 'succeeded', '2022-10-10 03:46:34'),
('ch_3Lr68RIXxPbvwpsW0ahA4x4V', 'cus_MaGfCmxIbunSkN', NULL, 'FOYER DEWAN BANQUET', '360000', 'myr', 'succeeded', '2022-10-10 04:30:08'),
('ch_3Lr6CFIXxPbvwpsW2vZQppzc', 'cus_MaGj5h9W8I93Y9', NULL, 'BILIK LPU (AL-GHAZALI)', '300', 'myr', 'succeeded', '2022-10-10 04:34:04'),
('ch_3Lr6GYIXxPbvwpsW2WVzafVo', 'cus_MaGox0WNOQ9tLy', NULL, 'FOYER A BANGUNAN PSZ', '600', 'myr', 'succeeded', '2022-10-10 04:38:31'),
('ch_3Lr6pwIXxPbvwpsW1suzSwS7', 'cus_MaHO5FSUNiXNmZ', NULL, 'DEWAN TAN SRI AINUDDIN WAHID', '12000', 'myr', 'succeeded', '2022-10-10 05:15:05'),
('ch_3Lr6U0IXxPbvwpsW19WpWoTc', 'cus_MaH2ZBpqsfg6oZ', NULL, 'BILIK LPU (AL-GHAZALI)', '600', 'myr', 'succeeded', '2022-10-10 04:52:25'),
('ch_3Lr6xmIXxPbvwpsW28nohmnk', 'cus_MaHWsJ4PA72fVr', NULL, 'DEWAN JUMAAH', '5100', 'myr', 'succeeded', '2022-10-10 05:23:11'),
('ch_3LrF7wIXxPbvwpsW2w7h1IhD', 'cus_MaPxUAlsfc9o2m', NULL, 'BILIK ILMUAN 1', '6800', 'myr', 'succeeded', '2022-10-10 14:06:11'),
('ch_3LrGtEIXxPbvwpsW0GHHtFpM', 'cus_MaRm8VdG7E5YaA', NULL, 'DEWAN TAN SRI AINUDDIN WAHID', '20000', 'myr', 'succeeded', '2022-10-10 15:59:08'),
('ch_3LrGu1IXxPbvwpsW1tNmAVTL', 'cus_MaRnSKmFQfZ0by', NULL, 'DEWAN TAN SRI AINUDDIN WAHID', '20000', 'myr', 'succeeded', '2022-10-10 15:59:57'),
('ch_3LrGweIXxPbvwpsW0LYRrXew', 'cus_MaRq6Ico3GQnmu', 'cheesen.987@gmail.com', 'BILIK ILMUAN 3', '10800', 'myr', 'succeeded', '2022-10-10 16:02:40'),
('ch_3LrIMGIXxPbvwpsW2NuS51PO', 'cus_MaTI7qofGdxrkX', 'tancheesen123@hotmail.com', 'DEWAN BANQUET II', '2100', 'myr', 'succeeded', '2022-10-10 17:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userType` varchar(30) NOT NULL DEFAULT 'Student',
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `createdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `password`, `userType`, `vkey`, `verified`, `createdate`) VALUES
('chee.sen987@gmail.com', 'cheesen321', 'Admin', 'b59274db54aba7fd2e2412bad863a47b', 1, '2022-09-13 12:55:35.241720'),
('cheesen.987@gmail.com', 'tancheesen43', 'Student', 'cd109530ffd5e10e78c9d6f44db77847', 1, '2022-09-13 12:39:13.741453'),
('FalseEmail@gmail.com', '543543', 'Staff', 'b8c0155d3d69c217bdc6520a7d2323b2', 0, '2022-09-13 22:26:41.219360'),
('shaoyuan0228@gmail.com', 's', 'Staff', '0aeece83f379a472d9456fdba72e2341', 1, '2022-10-03 13:44:52.171066'),
('tancheesen123@hotmail.com', 'tancheesen12', 'Staff', 'ab473ff9860294c8e77344b64b46d991', 1, '2022-09-13 23:39:12.138856');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `MatricNum` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `phoneNum` varchar(30) NOT NULL,
  `Image` varchar(100) DEFAULT 'noprofil.jpg',
  PRIMARY KEY (`MatricNum`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`MatricNum`, `name`, `userId`, `phoneNum`, `Image`) VALUES
('test2', 'testing243', 'cheesen.987@gmail.com', '321321321', 'testing2.2 - 2022.10.05 - 04.18.35pm.png');

-- --------------------------------------------------------

--
-- Table structure for table `userinfostaff`
--

DROP TABLE IF EXISTS `userinfostaff`;
CREATE TABLE IF NOT EXISTS `userinfostaff` (
  `staffId` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `phoneNum` varchar(30) NOT NULL,
  `Image` varchar(100) DEFAULT 'noprofil.jpg',
  PRIMARY KEY (`staffId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfostaff`
--

INSERT INTO `userinfostaff` (`staffId`, `name`, `userId`, `phoneNum`, `Image`) VALUES
('A20DW1114', 'lonely123', 'tancheesen123@hotmail.com', '01115386485 ', 'lonely123 - 2022.10.08 - 09.54.19am.jpg'),
('tancs', 'Tan Chee Sen', 'shaoyuan0228@gmail.com', '0178945987  ', 'noprofil.jpg'),
('test3', 'testing3.3.133', 'chee.sen987@gmail.com', '0123456789               ', 'testing3.3.133 - 2022.10.05 - 04.36.09pm.png'),
('testingFail1', 'testingFail2', 'FalseEmail@gmail.com', '543534', 'noprofil.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookerlist`
--
ALTER TABLE `bookerlist`
  ADD CONSTRAINT `bookerlist_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfostaff`
--
ALTER TABLE `userinfostaff`
  ADD CONSTRAINT `userinfostaff_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
