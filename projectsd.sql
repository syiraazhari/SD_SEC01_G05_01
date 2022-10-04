-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
<<<<<<< HEAD
-- Generation Time: Oct 04, 2022 at 04:11 AM
=======
-- Generation Time: Oct 04, 2022 at 01:28 AM
>>>>>>> 5bd76251883f7507848ad846d73b5b9b01b0f78d
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
<<<<<<< HEAD
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
('A20DW0196', 'Yap Deh Kai', 'ydk1421@gmail.com', '01159908615', 'Student'),
('A20DW0976', 'Ahmad bin Ali', 'yapdehkai@gmail.com', '0197784597', 'Student'),
('A20DW1114', 'lonely123', 'tancheesen123@hotmail.com', '01115386485', 'Staff'),
('tancs', 'Tan Chee Sen', 'shaoyuan0228@gmail.com', '0178945987', 'Staff'),
('test2', 'testing2.2', 'cheesen.987@gmail.com', '123123123', 'Student'),
('test3', 'testing3.3', 'chee.sen987@gmail.com', '0123456789', 'Staff'),
('testingFail1', 'testingFail1', 'FalseEmail@gmail.com', '01115386485', 'Staff');
=======
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
('cus_MXwDPr4TN3AanP', 'tan', 'asd', 'cheesen987@gmail.com', '2022-10-03 23:14:13'),
('cus_MXwikGbwqltB2m', 'test1', 'test1', 'tancheesen123@hotmail.com', '2022-10-03 23:45:12'),
('cus_MY5x1nZyldNEU6', '213', '321', 's@gmail.com', '2022-10-04 09:17:59');
>>>>>>> 5bd76251883f7507848ad846d73b5b9b01b0f78d

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

DROP TABLE IF EXISTS `facility`;
CREATE TABLE IF NOT EXISTS `facility` (
  `facilityId` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `capacity` int(100) DEFAULT NULL,
  `facilityDetail` varchar(200) NOT NULL,
  `ratePerDay` decimal(30,0) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`facilityId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facilityId`, `name`, `category`, `capacity`, `facilityDetail`, `ratePerDay`, `status`) VALUES
('123', '123', '123', 123, '123', '123', 'AVAILABLE'),
('321', '321', '321', 321, '321', '321', 'UNDER MAINTENANCE'),
('B111', 'FOYER DEWAN BANQUET', 'FOYER DEWAN BANQUET', 509, 'Suitable for sit-down meal area', '1000', 'NOT AVAILABLE'),
('B122', 'BILIK GERAKAN', 'BILIK GERAKAN', 18, 'Suitable for medium size meeting group', '1000', 'UNDER MAINTENANCE'),
('B133', 'BILIK LPU (AL-GHAZALI)', 'BILIK LPU (AL-GHAZALI)', 20, 'Suitable for meeting, and presentation', '300', 'AVAILABLE'),
('C111', 'FOYER A BANGUNAN PSZ', 'FOYER A BANGUNAN PSZ', 60, 'Suitable for sit-down meal', '300', 'AVAILABLE'),
('C122', 'FOYER B BANGUNAN PSZ', 'FOYER B BANGUNAN PSZ', 30, 'Suitable for sit-down meal', '200', 'AVAILABLE'),
('C133', 'DATARAN ILMU', 'DATARAN ILMU', 300, 'Suitable for outdoor event', '250', 'AVAILABLE'),
('D111', 'Dewan Banquet', 'Dewan Banquet', 70, 'Suitable for big group discussion, workshop, and seminar', '620', 'AVAILABLE'),
('D122', 'DEWAN TAN SRI AINUDDIN WAHID', 'DEWAN TAN SRI AINUDDIN WAHID', 500, 'Suitable for big gathering including dinner, wedding, conference, and exam', '4000', 'AVAILABLE'),
('D133', 'DEWAN JUMAAH', 'DEWAN JUMAAH', 150, 'Suitable for big group meeting, workshop, and seminar', '1700', 'AVAILABLE'),
('D144', 'DEWAN AZMAN HASHIM', 'DEWAN AZMAN HASHIM', 500, 'Suitable for conference, seminar, and public lecture', '4000', 'AVAILABLE'),
('D155', 'DEWAN BANQUET II', 'DEWAN BANQUET II', 80, 'Suitable for workshop, group discussion, and sit-down meal', '700', 'AVAILABLE'),
('D166', 'DEWAN SEMINAR', 'DEWAN SEMINAR', 140, 'Suitable for medium size seminar and public lecture.', '1700', 'AVAILABLE'),
('E111', 'BILIK ILMUAN 1', 'BILIK ILMUAN 1', 100, 'Suitable for workshop and seminar', '1700', 'AVAILABLE'),
('E133', 'BILIK ILMUAN 3', 'BILIK ILMUAN 3', 100, 'Suitable for workshop and sit-down meal', '1200', 'AVAILABLE'),
('E222', 'BILIK ILMUAN 2', 'BILIK ILMUAN 2', 100, 'Suitable for workshop and seminar', '1700', 'AVAILABLE'),
('F111', 'BILIK KULIAH MENARA RAZAK 6', 'BILIK KULIAH MENARA RAZAK 6', 50, 'Suitable for classroom and workshop', '500', 'AVAILABLE'),
('F122', 'BILIK KULIAH MENARA RAZAK 1-5', 'BILIK KULIAH MENARA RAZAK 1-5', 30, 'Suitable for classroom and workshop', '300', 'AVAILABLE'),
('F133', 'BILIK KULIAH MENARA RAZAK 7-13', 'BILIK KULIAH MENARA RAZAK 7-13', 30, 'Suitable for classroom and workshop', '300', 'AVAILABLE');

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
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_reference`, `userId`, `date_reserved`, `reserved_by`, `date_rent_start`, `date_rent_end`, `facilityId`, `total_price`) VALUES
(1, 'tancheesen123@hotmail.com', '2022-09-29', 'lonely123', '2022-09-30', '2022-10-01', 'D166', 1700),
(2, 'tancheesen123@hotmail.com', '2022-09-29', 'lonely123', '2022-09-30', '2022-10-01', 'B111', 250),
(3, 'tancheesen123@hotmail.com', '2022-09-29', 'lonely123', '2022-09-30', '2022-10-01', 'B133', 300),
(4, 'tancheesen123@hotmail.com', '2022-09-29', 'lonely123', '2022-10-02', '2022-11-06', 'B111', 8750),
(5, 'tancheesen123@hotmail.com', '2022-10-03', 'lonely123', '2022-10-05', '2022-10-07', '123', 246),
(6, 'tancheesen123@hotmail.com', '2022-10-03', 'lonely123', '2022-10-05', '2022-10-07', 'C122', 400),
(7, 'tancheesen123@hotmail.com', '2022-10-03', 'lonely123', '2022-10-22', '2022-10-23', 'B133', 300),
(8, 'tancheesen123@hotmail.com', '2022-10-03', 'lonely123', '2022-10-05', '2022-10-07', 'B133', 600),
(9, 'tancheesen123@hotmail.com', '2022-10-03', 'lonely123', '2022-10-05', '2022-10-07', 'C111', 600),
(10, 'tancheesen123@hotmail.com', '2022-10-03', 'lonely123', '2022-10-26', '2022-10-27', 'C111', 300);
>>>>>>> 5bd76251883f7507848ad846d73b5b9b01b0f78d

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

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_3LoqLTIXxPbvwpsW0rltAYQE', 'cus_MXwDPr4TN3AanP', 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-03 23:14:13'),
('ch_3LoqpSIXxPbvwpsW0vxknUTp', 'cus_MXwikGbwqltB2m', 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-03 23:45:12'),
('ch_3LozliIXxPbvwpsW0FLEooTO', 'cus_MY5x1nZyldNEU6', 'Intro To React Course', '500', 'myr', 'succeeded', '2022-10-04 09:17:59');

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
('chee.sen987@gmail.com', 'cheesen1234', 'Admin', 'b59274db54aba7fd2e2412bad863a47b', 1, '2022-09-13 12:55:35.241720'),
('cheesen.987@gmail.com', 'tancheesen12', 'Student', 'cd109530ffd5e10e78c9d6f44db77847', 1, '2022-09-13 12:39:13.741453'),
('FalseEmail@gmail.com', '123456789', 'Staff', 'b8c0155d3d69c217bdc6520a7d2323b2', 0, '2022-09-13 22:26:41.219360'),
<<<<<<< HEAD
('shaoyuan0228@gmail.com', 'tan12345', 'Staff', '0aeece83f379a472d9456fdba72e2341', 1, '2022-10-03 13:44:52.171066'),
('tancheesen123@hotmail.com', 'tancheesen12', 'Staff', 'ab473ff9860294c8e77344b64b46d991', 1, '2022-09-13 23:39:12.138856');
=======
('s@gmail.com', 's', 'Staff', 'ab473ff9860294c8e77344b64b46d991', 1, '2022-09-13 23:39:12.138856');
>>>>>>> 5bd76251883f7507848ad846d73b5b9b01b0f78d

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
('test2', 'testing2.2', 'cheesen.987@gmail.com', '123123123', 'test2 - 2022.09.13 - 11.02.36pm.jpg');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfostaff`
--

INSERT INTO `userinfostaff` (`staffId`, `name`, `userId`, `phoneNum`, `Image`) VALUES
<<<<<<< HEAD
('A20DW1114', 'lonely123', 'tancheesen123@hotmail.com', '01115386485 ', 'lonely123 - 2022.09.14 - 01.08.44am.jpg'),
('test3', 'testing3.3', 'chee.sen987@gmail.com', '0123456789', 'test3 - 2022.09.13 - 11.07.24pm.jpg'),
('testingFail1', 'testingFail1', 'FalseEmail@gmail.com', '01115386485', 'noprofil.jpg'),
('tancs', 'Tan Chee Sen', 'shaoyuan0228@gmail.com', '0178945987', 'noprofil.jpg');
=======
('A20DW1114', 'lonely123', 'tancheesen123@hotmail.com', '01115386485 ', 'lonely123 - 2022.09.27 - 12.28.48pm.jpeg'),
('test3', 'testing3.3', 'chee.sen987@gmail.com', '0123456789', 'testing3.3 - 2022.09.28 - 06.23.14am.jpeg'),
('testingFail1', 'testingFail1', 'FalseEmail@gmail.com', '01115386485', 'noprofil.jpg');
>>>>>>> 5bd76251883f7507848ad846d73b5b9b01b0f78d

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`facilityId`) REFERENCES `facility` (`facilityId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
