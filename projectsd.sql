-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2022 at 08:08 AM
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
('cus_Mb5npkWtyEFo7W', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-12 09:20:01'),
('cus_Mb5rEh8nE8aBps', '442', '321', 'tancheesen123@hotmail.com', '2022-10-12 09:23:26'),
('cus_Mb6bU8drK4YKbt', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 10:09:23'),
('cus_Mb6dsbifZoVbif', 'tan', '123', 'tancheesen123@hotmail.com', '2022-10-12 10:11:33'),
('cus_Mb6hlSBRvHFXWn', 'tan', '21', 'tancheesen123@hotmail.com', '2022-10-12 10:15:35'),
('cus_Mb6ic5VDRGw1YD', 'tan', '42', 'tancheesen123@hotmail.com', '2022-10-12 10:16:40'),
('cus_Mb6k4dWEHfjolI', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 10:18:56'),
('cus_Mb6mUmVKnRbDG5', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 10:20:44'),
('cus_Mb6rj8CM1tCsJc', 'tan', 'asd', 'shaoyuan0228@gmail.com', '2022-10-12 10:25:27'),
('cus_Mb6tA4S1kWm36z', 'tan', '21', 'cheesen.987@gmail.com', '2022-10-12 10:27:43'),
('cus_Mb6Uyj9AbUJRDw', '4242424242', '4242', 'tancheesen123@hotmail.com', '2022-10-12 10:02:37'),
('cus_Mb6XzY7R6Hrimj', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 10:05:22'),
('cus_Mb6YL2By1A3Ukp', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 10:06:43'),
('cus_Mb6ZXFWOwvUMsZ', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 10:08:20'),
('cus_MbBqE1nZi8tgqQ', 'tan', '123', 'cheesen.987@gmail.com', '2022-10-12 15:35:17'),
('cus_MbBsyJWruVPNEE', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-12 15:36:33'),
('cus_MbDEX1g9p09FOK', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-12 17:00:28'),
('cus_MbDG56Bk0lWPUV', 'tan', 'asd', 'cheesen.987@gmail.com', '2022-10-12 17:03:14'),
('cus_MbDYkYHCiVuZ8w', 'tan', 'asd', 'tancheesen123@hotmail.com', '2022-10-12 17:20:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_reference`, `userId`, `date_reserved`, `reserved_by`, `date_rent_start`, `date_rent_end`, `facilityId`, `total_price`) VALUES
(117, 'cheesen.987@gmail.com', '2022-10-12', 'testing243', '2022-10-12', '2022-10-15', 'D122', 12000),
(118, 'tancheesen123@hotmail.com', '2022-10-12', 'lonely1234', '2022-10-12', '2022-10-13', 'D133', 1700),
(119, 'tancheesen123@hotmail.com', '2022-10-12', 'lonely1234', '2022-10-13', '2022-10-16', 'B133', 900),
(120, 'tancheesen123@hotmail.com', '2022-10-12', 'lonely1234', '2022-10-13', '2022-10-16', 'B133', 900),
(121, 'tancheesen123@hotmail.com', '2022-10-12', 'lonely1234', '2022-10-12', '2022-10-16', 'D144', 16000),
(122, 'tancheesen123@hotmail.com', '2022-10-12', 'lonely1234', '2022-10-13', '2022-10-16', 'D166', 5100),
(123, 'shaoyuan0228@gmail.com', '2022-10-12', 'Tan Chee Sen', '2022-10-12', '2022-10-15', 'C122', 600),
(124, 'cheesen.987@gmail.com', '2022-10-12', 'testing243', '2022-10-13', '2022-10-26', 'B122', 3250),
(125, 'cheesen.987@gmail.com', '2022-10-12', 'testing243', '2022-10-12', '2022-10-16', 'C111', 1200),
(126, 'cheesen.987@gmail.com', '2022-10-12', 'testing243', '2022-10-13', '2022-10-15', 'C133', 500),
(127, 'cheesen.987@gmail.com', '2022-10-12', 'testing243', '2022-10-13', '2022-10-15', 'D111', 1240),
(128, 'cheesen.987@gmail.com', '2022-10-12', 'testing243', '2022-10-20', '2022-10-22', 'D122', 8000),
(129, 'tancheesen123@hotmail.com', '2022-10-12', 'lonely1234', '2022-10-13', '2022-10-14', 'D155', 700);

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
('ch_3Lrtc6IXxPbvwpsW1cQqhF8S', 'cus_Mb5npkWtyEFo7W', 'cheesen.987@gmail.com', 'DEWAN TAN SRI AINUDDIN WAHID', '12000', 'myr', 'succeeded', '2022-10-12 09:20:01'),
('ch_3LrtfPIXxPbvwpsW0IKKBOhU', 'cus_Mb5rEh8nE8aBps', 'tancheesen123@hotmail.com', 'DEWAN JUMAAH', '1700', 'myr', 'succeeded', '2022-10-12 09:23:26'),
('ch_3LrudPIXxPbvwpsW0t2GAkfb', 'cus_Mb6rj8CM1tCsJc', 'shaoyuan0228@gmail.com', 'FOYER B BANGUNAN PSZ', '600', 'myr', 'succeeded', '2022-10-12 10:25:27'),
('ch_3LrufcIXxPbvwpsW2xaqIPF6', 'cus_Mb6tA4S1kWm36z', 'cheesen.987@gmail.com', 'BILIK GERAKAN', '3250', 'myr', 'succeeded', '2022-10-12 10:27:43'),
('ch_3LruHJIXxPbvwpsW0MweZQIh', 'cus_Mb6Uyj9AbUJRDw', 'tancheesen123@hotmail.com', 'BILIK LPU (AL-GHAZALI)', '900', 'myr', 'succeeded', '2022-10-12 10:02:37'),
('ch_3LruJzIXxPbvwpsW0s65sN0Y', 'cus_Mb6XzY7R6Hrimj', 'tancheesen123@hotmail.com', 'BILIK LPU (AL-GHAZALI)', '900', 'myr', 'succeeded', '2022-10-12 10:05:22'),
('ch_3LruLHIXxPbvwpsW2Qzpqhkc', 'cus_Mb6YL2By1A3Ukp', 'tancheesen123@hotmail.com', 'BILIK LPU (AL-GHAZALI)', '900', 'myr', 'succeeded', '2022-10-12 10:06:43'),
('ch_3LruMqIXxPbvwpsW1FOlI1AA', 'cus_Mb6ZXFWOwvUMsZ', 'tancheesen123@hotmail.com', 'BILIK LPU (AL-GHAZALI)', '900', 'myr', 'succeeded', '2022-10-12 10:08:20'),
('ch_3LruNsIXxPbvwpsW1dGgqgRP', 'cus_Mb6bU8drK4YKbt', 'tancheesen123@hotmail.com', 'BILIK LPU (AL-GHAZALI)', '900', 'myr', 'succeeded', '2022-10-12 10:09:23'),
('ch_3LruPyIXxPbvwpsW1y0jrnA6', 'cus_Mb6dsbifZoVbif', 'tancheesen123@hotmail.com', 'BILIK GERAKAN', '500', 'myr', 'succeeded', '2022-10-12 10:11:33'),
('ch_3LruTrIXxPbvwpsW1yl7GYTU', 'cus_Mb6hlSBRvHFXWn', 'tancheesen123@hotmail.com', 'DEWAN AZMAN HASHIM', '16000', 'myr', 'succeeded', '2022-10-12 10:15:35'),
('ch_3LruUvIXxPbvwpsW1pYprTEy', 'cus_Mb6ic5VDRGw1YD', 'tancheesen123@hotmail.com', 'DEWAN SEMINAR', '5100', 'myr', 'succeeded', '2022-10-12 10:16:40'),
('ch_3LruX6IXxPbvwpsW2gBPVXwz', 'cus_Mb6k4dWEHfjolI', 'tancheesen123@hotmail.com', 'DEWAN SEMINAR', '5100', 'myr', 'succeeded', '2022-10-12 10:18:56'),
('ch_3LruYqIXxPbvwpsW0Hhiwqxs', 'cus_Mb6mUmVKnRbDG5', 'tancheesen123@hotmail.com', 'DEWAN SEMINAR', '5100', 'myr', 'succeeded', '2022-10-12 10:20:44'),
('ch_3LrzTGIXxPbvwpsW2CPdBtJK', 'cus_MbBqE1nZi8tgqQ', 'cheesen.987@gmail.com', 'FOYER A BANGUNAN PSZ', '1200', 'myr', 'succeeded', '2022-10-12 15:35:17'),
('ch_3LrzUUIXxPbvwpsW0v4Yijpu', 'cus_MbBsyJWruVPNEE', 'cheesen.987@gmail.com', 'DATARAN ILMU', '500', 'myr', 'succeeded', '2022-10-12 15:36:33'),
('ch_3Ls0nhIXxPbvwpsW1b3eqHYI', 'cus_MbDEX1g9p09FOK', 'cheesen.987@gmail.com', 'DEWAN BANQUET', '1240', 'myr', 'succeeded', '2022-10-12 17:00:28'),
('ch_3Ls0qNIXxPbvwpsW2fHOSFQd', 'cus_MbDG56Bk0lWPUV', 'cheesen.987@gmail.com', 'DEWAN TAN SRI AINUDDIN WAHID', '8000', 'myr', 'succeeded', '2022-10-12 17:03:14'),
('ch_3Ls17AIXxPbvwpsW2KaeHYRg', 'cus_MbDYkYHCiVuZ8w', 'tancheesen123@hotmail.com', 'DEWAN BANQUET II', '700', 'myr', 'succeeded', '2022-10-12 17:20:35');

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
('tancheesen123@hotmail.com', 'tancheesen1254', 'Staff', 'ab473ff9860294c8e77344b64b46d991', 1, '2022-09-13 23:39:12.138856');

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
('A20DW1114', 'lonely1234', 'tancheesen123@hotmail.com', '01115386485  ', 'lonely123 - 2022.10.08 - 09.54.19am.jpg'),
('tancs', 'Tan Chee Sen', 'shaoyuan0228@gmail.com', '0178945987  ', 'noprofil.jpg'),
('test3', 'testing3.3.133', 'chee.sen987@gmail.com', '0123456789               ', 'testing3.3.133 - 2022.10.12 - 01.06.11am.png'),
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
